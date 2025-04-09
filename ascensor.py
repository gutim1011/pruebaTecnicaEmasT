def calcular_energia(movimientos):
    actual = 1
    energia = 0
    for movimiento in movimientos:
        energia = energia + abs(actual-movimiento[1]) + abs(movimiento[1]-movimiento[2])
        actual = movimiento[2]
    return {"Piso final": actual,"Energía consumida" : energia}

print(calcular_energia( [[5, 2, 7], [10, 3, 1], [15, 7, 8]]))