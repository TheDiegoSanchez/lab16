import os
import urllib.parse

sent_query = os.environ['QUERY_STRING']
query_list = sent_query.split('=')
query_dict = urllib.parse.parse_qs(os.environ['QUERY_STRING'])

def greeter(name, surname):
    return('Hola ' + str(name).capitalize()+ ' ' + str(surname).capitalize() + '¿ como estas?')

input_name = str(query_dict['nombre'])[2:-2]
input_surname = str(query_dict['apellido'])[2:-2]

print("Tipo de contenido: text/html\n ")
print(str(greeter(input_name, input_surname)))