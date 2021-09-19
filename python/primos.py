import time


def es_primo(num):
    for n in range(2, num):
        if num % n == 0:
            return False
    return True


inicio = time.time()

for n in range(2, 1000):
    if es_primo(n):
        print(str(n), end="\n")


fin = time.time()
print(fin - inicio)
