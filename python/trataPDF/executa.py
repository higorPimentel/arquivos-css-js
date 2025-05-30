import pdfplumber
import pandas as pd

#arquivo = r"C:\Users\contr\OneDrive\Desktop\Sistema\Rlatorios\pedidos\pedidos.pdf"
arquivo = r"C:\Users\contr\OneDrive\Desktop\python\trata_pedidos\validacao_ped_suelen.pdf"

arryCabecalho = []
arryData = []


with pdfplumber.open(arquivo) as pdf:
    for i, pagina in enumerate(pdf.pages):
        print(f"\n--- Página {i + 1} ---")


        if i + 1 == 16:
            a = 58

        # Extrair texto
        texto = pagina.extract_text()
        #print("Texto encontrado:")
        #print(texto)

        nroLinha = 0
        linhas = texto.splitlines()
        #cabecalho = linhas[0].split()


        for linha in linhas[1:]:
            partes = linha.split()

            if nroLinha == 0:
                info1 = partes[0]

            if nroLinha == 1:
                info2 = partes[0]

            if nroLinha == 2:
                info3 = partes[0]

            if nroLinha == 3:
                info4 = partes[0]


            # CABEÇALHO
            if nroLinha == 4:
                info5 = partes[0]
                info6 = partes[1]
                info7 = partes[2]
                info8 = partes[3]
                info9 = partes[4]
                info10 = partes[5]
                #info10 = partes[6]

                newItemHead = [info5, info6, info7, info8, info9, info10]
                #arryCabecalho.append(newItemHead)


            if nroLinha > 4 and nroLinha < 68:
                info11 = partes[0]
                qtdItens = len(info11)

                if qtdItens > 4:

                    if "." in info11:
                        break

                    #print(info11)

                    info12 = partes[1]
                    info13 = partes[2]
                    info14 = partes[3]
                    info15 = partes[4]
                    info16 = partes[5]
                    #info17 = partes[6]
                    #info18 = partes[7]
                    #info19 = info16 + "_" + info17 + "_" + info18

                    newItemProd = [info11,info12,info13,info14,info15,info16]
                    arryData.append(newItemProd)

            nroLinha = nroLinha + 1
            if i + 1 == 2 and  nroLinha ==9:
                a = 30
                print(nroLinha)



print(newItemHead)
print(arryData)

df = pd.DataFrame(arryData)

# Salvar com cabeçalhos
#df.to_excel('dados_com_cabecalhos.xlsx', index=False, header=True)
df.to_excel('dados_renomeados.xlsx', index=False, header=newItemHead)
print("processo Finalizado")

            #titulo = partes[0]
            #data = partes[1]
            #vencto = partes[2]
            #dia = partes[3]
            #valor = partes[4]
            #nome = partes[5]

        # Extrair tabelas (se houver)
        #tabelas = pagina.extract_tables()
        #for idx, tabela in enumerate(tabelas):
        #    print(f"\nTabela {idx + 1}:")
        #    for linha in tabela:
        #        print(linha)