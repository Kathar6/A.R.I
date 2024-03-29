#Proyecto:Asistente Reciclaje Inteligente (A.R.I)
#Ultima Actualización:10:27AM 28/02/2019
#Desarrolladores:Mateo Alonso Pabón, Juan David Correa, Juan Esteban Cortés, David Agudelo, Daniel Pineda.
#Imports BD,Arduino,SO
import io
import os
import mysql.connector
#import serial
# Importa la biblioteca de Google Cloud
from google.cloud import vision
from google.cloud.vision import types
client = vision.ImageAnnotatorClient()
#Conexión hacia el arduino
ser = serial.Serial('COM6',9600)
#Creación de conexion con BD mysql
conexion1 = mysql.connector.connect(host="host",user="root",passwd="root",database="bd_ari")
cursor1 = conexion1.cursor()

#Apertura de la imagen para analizar
file_name = os.path.join(
    os.path.dirname(__file__),
    'botella.jpeg')

#Carga la imagen en memoria
with io.open(file_name, 'rb') as image_file:
    content = image_file.read()

image = types.Image(content=content)

#Realiza la detección de labels
response = client.label_detection(image=image)
labels = response.label_annotations

#opcionA = "3"
#Ciclo listar labels de la imagen
for label in labels:
    opcion = label.description
    # Consulta de categoría a la bd
    sqlcomando = "select idcat from basura where nombasura = '" + format(opcion) + "'"
   
    cursor1.execute(sqlcomando)
    result = cursor1.fetchone()
    if result is not None:
        validar = result[0]
        if(validar == 1):
            print('Orgánico')
            opcionA = "1" 
            input()  
            
            break

        elif(validar == 2):
            print('Papel y cartón')
            opcionA = "2"
            input()
           
            break
        
        elif(validar == 3):
            print('Plástico')
            opcionA = "3"
           
            input()
            break

ser.write(opcionA.encode())

cursor1.close()
