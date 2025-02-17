from itertools import combinations

########
########
# Analise combonatória. Avaliar combinações de valores que somam até o alvo
########
#######

# Lista de valores fornecidos
valores = [
757.5,
446.5,
597.6,
458.1,
491.1,
793.3,
227.2,
287.2,
114.4,
591.5,
512.3,
447.2,
812.1,
411.6,
206.3,
435.6,
941.6,
611.2,
729.3,
873.3,
558.5,
165.5,
564.5,
78.1
]

# Alvo da soma
alvo = 1721.1

# Encontrando
resultado = None
qtdInterc = 0
for i in range(1, len(valores) + 1):
    for comb in combinations(valores, i):
        print(qtdInterc)
        if round(sum(comb), 2) == alvo:  # Ajuste para comparar com precisão
            resultado = comb
            break
        qtdInterc += 1
    if resultado:
        break

print(resultado)