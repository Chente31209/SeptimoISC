def UltimaSifra(x):
    xs="{0}".format(x)
    Tamaño = len(xs)
    print (Tamaño)

def rotar(xs=[]):
    Pr=xs[0]
    xs.pop(0)
    xs.append(Pr)
    return xs

def rotarN(n,xs=[]):
    for i in range(0,n):
        Pr=xs[0]
        xs.pop(0)
        xs.append(Pr)
    return xs

def Rango(xs=[]):
    xs.append(min(xs))
    xs.append(max(xs))
    return xs
    
def Polinomio(xs=[]):
    xs=[]
    if(len(xs)%2)==0:
        return False
    else:
        return True

def TResIguales(x,y,z):
    if x==y:
        if  y==z:
            return True
        else:
            return False
    else:
        return False
