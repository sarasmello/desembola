from flask import Flask, jsonify, request
from mainWebcan import corrigir_gabarito
import socket
import os

app = Flask(__name__)

@app.route('/correcao', methods=['POST'])
def correcao():
    try:
        # Obtém os dados do payload enviado pelo cliente
        data = request.get_json()

        # Verifica se todos os campos necessários estão no payload
        campos_path = data.get('campos_path')
        resp_path = data.get('resp_path')
        imagem_path = data.get('imagem_path')
        respostas_corretas = data.get('respostasCorretas')
        questoes = data.get('questoes')

        # Valida os parâmetros
        if not all([campos_path, resp_path, imagem_path, respostas_corretas, questoes]):
            return jsonify({
                "success": False,
                "message": "Parâmetros inválidos. Certifique-se de enviar todos os campos obrigatórios."
            }), 400

        # Chama a função corrigir_gabarito diretamente
        pontuacao = corrigir_gabarito(
            campos_path=campos_path,
            resp_path=resp_path,
            imagem_path=imagem_path,
            respostasCorretas=respostas_corretas,
            questoes=questoes
        )

        # Retorna o resultado como resposta JSON
        return jsonify({
            "success": True,
            "message": "Correção realizada com sucesso!",
            "pontuacao": pontuacao
        })
    except Exception as e:
        # Retorna erro em caso de falha
        return jsonify({
            "success": False,
            "message": "Erro ao realizar a correção.",
            "error": str(e)
        }), 500
    
@app.route('/')
def home():
    return "Aplicação está rodando!"

def get_ip():
    """Obtém o IP da máquina local."""
    hostname = socket.gethostname()
    return socket.gethostbyname(hostname)

if __name__ == '__main__':
    # Obtém a porta do ambiente (ou usa uma porta padrão para testes locais)
    porta = int(os.getenv("PORT", 5000))  # 5000 é usado apenas como fallback local
    
    # Obtém o IP da máquina
    ip = get_ip()

    print(f"A aplicação está rodando em: http://{ip}:{porta}")
    
    # Inicia o servidor Flask
    app.run(host="0.0.0.0", port=porta)

