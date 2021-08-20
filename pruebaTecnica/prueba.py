nombre = input("¿Cuál es nombre?")
tipo_documento = int(input("¿Cuál es número de documento"))
pasaporte = input("¿Cuál es su pasaporte?")   
opcion = 0
cuotas = 0



opcion = 1

while(opcion !=3):
    
    print("Menu opciones")
    print("1. tarjeta debito")
    print("1. tarjeta crédito")
    opcion = input("Si dese continuar marque 1/2.\n Si no desea continuar marque 3")
    if(opcion == 1):
        print("Selecciono tarjeta de debito")
    else:
        cuotas = input("¿Cuántas cuotas desea generar a su crédito?")
    
print(cuotas)
    
        

    
    
