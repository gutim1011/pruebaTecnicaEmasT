def categorias(codigos_libros):
    contador_categorias = [False,False,False,False,False,False,False,False,False,False]
    for codigo in codigos_libros:
        for categoria in codigo:
            if not(contador_categorias[int(categoria)]):
                contador_categorias[int(categoria)] = True
    return contador_categorias.count(True)

print(categorias(["12", "23", "123", "1234", "34"]))