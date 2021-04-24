with open("./Development/caesarEncrypted.txt", "r") as file:
   for line in file:
##        print(line)
       line = line.strip()
       print(chr(ord(line) - 9), end='')