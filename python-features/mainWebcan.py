import cv2
import pickle
import extrairGabarito as exG
import time
from typing import List, Tuple

# S: Responsabilidade Única
# Carrega dados necessários do disco
def carregar_dados(campos_path: str, resp_path: str) -> Tuple[List, List]:
    with open(campos_path, 'rb') as arquivo_campos:
        campos = pickle.load(arquivo_campos)
    with open(resp_path, 'rb') as arquivo_resp:
        resp = pickle.load(arquivo_resp)
    return campos, resp

# S: Responsabilidade Única
# Processa a imagem inicial
def carregar_imagem(path: str) -> cv2.Mat:
    return cv2.imread(path)

# O: Aberto para extensão, fechado para modificação
# Extrai a região de interesse e pré-processa
def processar_imagem(imagem: cv2.Mat) -> Tuple[cv2.Mat, cv2.Mat, Tuple[int, int, int, int]]:
    imagem = cv2.resize(imagem, (600, 700))
    gabarito, bbox = exG.extrairMaiorCtn(imagem)
    imgGray = cv2.cvtColor(gabarito, cv2.COLOR_BGR2GRAY)
    _, imgTh = cv2.threshold(imgGray, 70, 255, cv2.THRESH_BINARY_INV)
    return gabarito, imgTh, bbox

# L: Segue o princípio de substituição de Liskov
# Avalia as respostas preenchidas e calcula acertos/erros
def avaliar_respostas(campos: List, imgTh: cv2.Mat, resp: List, respostasCorretas: List[str]) -> Tuple[int, int]:
    respostas = []
    for id, vg in enumerate(campos):
        x, y, w, h = map(int, vg)
        campo = imgTh[y:y + h, x:x + w]
        height, width = campo.shape[:2]
        tamanho = height * width
        pretos = cv2.countNonZero(campo)
        percentual = round((pretos / tamanho) * 100, 2)
        if percentual >= 15:
            respostas.append(resp[id])

    acertos, erros = 0, 0
    for num, res in enumerate(respostas):
        if res == respostasCorretas[num]:
            acertos += 1
        else:
            erros += 1
    return acertos, erros

# D: Depende de abstrações, não de implementações
# Renderiza resultados na imagem
def renderizar_resultados(imagem: cv2.Mat, acertos: int, pontuacao: int, bbox: Tuple[int, int, int, int]) -> None:
    cv2.rectangle(imagem, (bbox[0], bbox[1]), (bbox[0] + bbox[2], bbox[1] + bbox[3]), (0, 255, 0), 3)
    cv2.putText(imagem, f'ACERTOS: {acertos}, PONTOS: {pontuacao}', (30, 140), cv2.FONT_HERSHEY_SIMPLEX, 1.2, (0, 0, 255), 3)
  

# Função principal que organiza o fluxo
def corrigir_gabarito(campos_path: str, resp_path: str, imagem_path: str, respostasCorretas: List[str], questoes: int) -> int:
    campos, resp = carregar_dados(campos_path, resp_path)
    imagem = carregar_imagem(imagem_path)
    
    pontuacao_total = 0  # Acumula a pontuação total

    for questao in range(questoes):
        gabarito, imgTh, bbox = processar_imagem(imagem)
        acertos, erros = avaliar_respostas(campos, imgTh, resp, respostasCorretas)
        pontuacao = acertos * 0.5
        pontuacao_total += pontuacao 
        renderizar_resultados(imagem, acertos, pontuacao, bbox)
       

   
    print(f"Pontuação total: {pontuacao_total}")
    return pontuacao_total

