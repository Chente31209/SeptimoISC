def f(n):
    if(n%2 == 0):
        return n/2
    else:
        return 3*n+1


def probelma(x):
    if(x == 1):
        print(x)
        return 1
    else:
        print(x)
        F = f(x)
        return probelma(F)
    
probelma(27)