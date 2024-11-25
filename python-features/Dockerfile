# Usa uma imagem base leve do Python
FROM python:3.9-slim

# Define o diretório de trabalho no contêiner
WORKDIR /app

# Copia todos os arquivos do projeto para o contêiner
COPY . /app

# Instala as dependências
RUN pip install --no-cache-dir -r requirements.txt

# Exponha a porta do Flask (5000 por padrão)
EXPOSE 5000

# Comando para iniciar o servidor Flask
CMD ["python", "app.py"]
