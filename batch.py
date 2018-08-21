from bs4 import BeautifulSoup
import urllib
from urllib.request import Request, urlopen

'''Abrir .csv con cant,nombre,edicion. Separar en array nombre,edicion'''

cartas = []

with open('lista_cartas.csv') as csv_file:
    line_count = 0
    for row in csv_file:
        if line_count == 0:
            line_count += 1
            continue
        linea = row.split(',')
        cartas.append([linea[1].replace(' ','+'),linea[2].strip('\n').lower()])

'''Congrats. Now we move to the scrapping part. First Open the website passing the name of the card as
the parameter '''

def bajarHtml(carta):
    req = Request('http://www.starcitygames.com/results?name='+carta,headers={'User-Agent': 'Mozilla/5.0'})
    response = urlopen(req)
    responseBytes = response.read()
    pag = open('newfile.txt','wb')
    pag.write(responseBytes)
    pag.close()
    pagALeer = open('newfile.txt','r',1,'utf-8')
    textoHtml = pagALeer.read()
    pag.close()
    return textoHtml

def buscarSoloEdicionDeCarta(lista):
    for contador in range(0,len(cartas)):
        for item in lista:
            '''print(item)'''
            indice = item.text.lower().replace(' ','').find(cartas[contador][1].replace(' ',''),0,len(cartas[contador][1].replace(' ','')))
            longs = len(item.text.lower().replace(' ',''))-len(cartas[contador][1].replace(' ',''))
            '''print('edicion en soup: '+item.text.lower().replace(' ','').replace('\n',''))
            print('edicion en lista: '+cartas[contador][1])
            print('\n')'''
            if((indice != -1) & (longs == 0)):
                return indice
    return -1

def buscarDatos(htmlString,contador):
    soup = BeautifulSoup(htmlString,'html.parser')
    soup = soup.find_all(attrs={"class":"search_results_2"})
    indexEdicion = buscarSoloEdicionDeCarta(soup)
    print('indice '+str(indexEdicion))
    if(indexEdicion == -1):
        return []
    condicionCarta = soup[indexEdicion].parent.find(attrs={'class':'search_results_7'}).text.strip()
    precio = soup[indexEdicion].parent.find(attrs={'class':'search_results_9'}).text.strip()
    if(soup[indexEdicion].text.strip() == ''):
        print('sopa: '+soup[indexEdicion].text)
        edicion = listaCompleta[contador-1][1]
    else:
        edicion = soup[indexEdicion].text.strip()
    lista = [edicion,condicionCarta,precio]
    return lista

def checkAmmountCommonCharacters(unaSentencia,otraSentencia):
    masCorta = ''
    retorno = [0,0]
    if(len(unaSentencia) > len(otraSentencia)):
        masCorta = otraSentencia
    else:
        masCorta = unaSentencia
    for i, j in zip(unaSentencia,otraSentencia):
        if(i != j):
            retorno[0] += 1
    retorno[1] = abs(len(unaSentencia)-len(otraSentencia))
    return retorno

listaCompleta = []
for i in range(0,len(cartas)):
    htmlString = bajarHtml(cartas[i][0])
    listaDatos = buscarDatos(htmlString,i)
    if(listaDatos != []):
        listaCompleta.append(listaDatos)
archivo = open('lista.txt','w')
for item in listaCompleta:
    for subitem in item:
        archivo.write(subitem[1]+','+subitem[2]+','+subitem[3]+'\n')
archivo.close()
    


'''archivo = open('lista.txt','w')
for item in listaCompleta:'''
    

'''print(listaCompleta)'''
'''
req = Request('http://www.starcitygames.com/search='+carta,headers={'User-Agent': 'Mozilla/5.0'})
response = urlopen(req)
responseBytes = response.read()
pag = open('newfile.txt','wb')
pag.write(responseBytes)
pag.close()
pagALeer = open('newfile.txt','r',1,'utf-8')
textoHtml = pagALeer.read()
pag.close()

soup = BeautifulSoup(textoHtml,'html.parser')
    listaEdicionesSitioWeb = soup.find(attrs={'for':'sf_set'}).next_sibling.next_sibling.find_all('option')

    listaEdicionesSitioWeb_array = []
    for item in listaEdicionesSitioWeb:
        listaEdicionesSitioWeb_array.append(item.text.lower())
    listaMatchs = []

'''

