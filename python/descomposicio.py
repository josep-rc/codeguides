x = input("Número a descomponer: ")
f = 2
r = int(x)
num_chars = len(str(x))
spaces = 0

while r != 1:
    if r % f == 0:
        spaces = num_chars - len(str(r))
        print(" " * spaces, end='')
        print(str(r) + " | " + str(f))
        r = r // f
    else:
        f = f + 1

print(" " * (num_chars - 1), end='')
print("1")
