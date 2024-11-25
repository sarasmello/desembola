import cv2

# Variável para armazenar as coordenadas dos cliques
coordenadas = []

# Função para capturar as coordenadas ao clicar na imagem
def capturar_coordenadas(event, x, y, flags, param):
    if event == cv2.EVENT_LBUTTONDOWN:  # Clique com o botão esquerdo do mouse
        coordenadas.append((x, y))
        print(f"Coordenada capturada: {x}, {y}")
        # Desenhar um círculo para marcar a coordenada na imagem
        cv2.circle(imagem, (x, y), 5, (0, 0, 255), -1)
        
        

# Carregar a imagem do gabarito
imagem = cv2.imread('D:/Desktop/gabritoDev ideias/modelo-gabarito.jpg')  # Use o caminho correto da sua imagem
imagem = cv2.resize(imagem, (1000, 900))  # Ajuste o tamanho se necessário

# Mostrar a imagem e capturar cliques
cv2.imshow('Clique nas áreas de resposta', imagem)
cv2.setMouseCallback('Clique nas áreas de resposta', capturar_coordenadas)

# Pressione 'q' para sair
while True:
    cv2.imshow('Clique nas áreas de resposta', imagem)
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# Exibir as coordenadas capturadas
print("Coordenadas capturadas:")
for coord in coordenadas:
    print(coord)

cv2.destroyAllWindows()

# Se necessário, você pode salvar as coordenadas em um arquivo para usar posteriormente
import pickle
with open('coordenadas.pkl', 'wb') as arquivo:
    pickle.dump(coordenadas, arquivo)
