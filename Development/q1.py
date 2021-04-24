import random


#Q Blockchain - answer is names of users
# user = ["Mike", "Tom", "John"]
# amount = [100, 283,1983,473,384,192,3873,493,23,22,32,435,2]
# with open("blockchainData.txt", "w") as file:
#    for i in range(0, 29837):
#        file.write(random.choice(user) + " transfer " + str(random.choice(amount)) + " " + random.choice(user) + "\n")

# text = []  # flag{4263_blocks_3}
# with open("blockchainData.txt", "r") as file:
# 	count = 1
# 	for line in file:
# 		text.append(line)
# 		if len(text) == 7:
# 			count += 1
# 			text = []
# 	print(text, count)



#Q Caesar Cipher
##plainText = "I f Y o u D i d T h i s R i g h t F i n a l A n s I s : B r i s b a n e 2 0 2 1"
##plainText = plainText.split()
##cipher = ""
##for char in plainText:
##    cipher += chr(ord(char) + 9) + "\n"
##
##with open("encrypted.txt", "w") as file:
##    file.write(cipher)
##print(cipher)


### ANSWER ###  flag{Brisbane2021}
##with open("encrypted.txt", "r") as file:
##    for line in file:
####        print(line)
##        line = line.strip()
##        print(chr(ord(line) - 9), end='')




#Q Debugging
##print('Your answer is: ", end='')
##for i in range(0, 10000)
##    if (i%7 ==, 0 or i%4 == 0) and& (i <! 2500 and i >! 2483}:
##        printtf(chr((i%25)+;97), end=''));

### ANSWER ### flag{jknrvy}
##print("Your answer is: ", end='')
##for i in range(0, 10000):
##    if (i%7 == 0 or i%4 == 0) and (i < 2500 and i > 2483):
##        print(chr((i%25)+97), end='')


#Q Debugging 2
##for i in range(0,20):
##    if i % 4 == 0:
##        print(i, end='')

### ANSWER ### flag{024681012141618}
##for i in range(0,20):
##    if i % 2 == 0:
##        print(i, end='')

#Q Debugging 3
"""
The following python class will perform basic arthimetic operations. 

Fix the code below. Once you have correctly fixed all the error follow these instructions:

1. create a DoMath class object and save it in a variable called iLoveMath
2. call addition function with parameters a = 4 and b = 10, save the result to a variable called value1
3. call subtraction function with parameters a = value1 and b = 3, save the result to a variable called value2
4. call multiplication function with parameters a = value2 and b = 11, save the result to a variable called value3
5. call division function with parameters a = value3 and b = 3, save the result to a variable called value4
6. print the value1,2,3,4 as your final answer

e.g. if your value1 = 34, value2 = 93, value3 = 99, value4 = 12 then yourfinal answer would be
flag{34_93_99_12}

"""

# class DoMath:
# 	def __init__(self):
# 		pass
# 	def addition:
#         # this function takes a parameter a and b, and adds them together
# 		return a + b
	
# 	subtraction():
#         # this function takes a parameter a and b, and subtract them together
# 		return
	
# 	multiplication(self):
#         # this function takes a parameter a and b, and multiply them together


# 	division
#         # this function takes a parameter a and b, and divide them together


# class DoMath: #ANSWER flag{14_17_28_31}
# 	def __init__(self):
# 		pass
# 	def addition(self, a, b):
# 		return a + b
	
# 	def subtraction(self, a, b):
# 		return a-b
	
# 	def multiplication(self, a, b):
# 		return a * b

# 	def division(self, a, b):
# 		return a/b

# iLoveMath = DoMath()
# value1 = iLoveMath.addition(4,10)
# value2 = iLoveMath.addition(value1,3)
# value3 = iLoveMath.addition(value2,11)
# value4 = iLoveMath.addition(value3,3)
# print(value1, value2, value3, value4)
		


#Q Performance optimisation
##text = "01This 02string 03contains 04the 05answer 06to 07what 08you 09are 10looking 11for 12but 13are 14you 15able 16to 17find 18it 19though 20?"
##text = text.split()
##
##output = ""
##for i in range(0, 1000000):
##    output += random.choice(text) + "\n"
##    if i == 102837:
##        output += "the_answer_is:\njob_well_done\n"
##
##with open("q1.txt", "w") as file:
##    file.write(output)


### ANSWER ##   # flag{job_well_done}
# text = []  
# with open("textSorting.txt", "r") as file:
#    for line in file:
#        text.append(line)
#    text.sort(reverse=True)
#    print(text[0])
#    print(text[1])



# Find missing number #  flag{24857_9848_12346}
# with open("missingNumber.txt", "w") as file:
#     for i in range(0,100000):
#         if i == 24857 or i == 9848 or i == 12346:
#             continue
#         file.write(str(i))
#         file.write("\n")






#API 
import requests

# payload = {"secret_string": "youneedthis", "date": "24-04-2021", "authentication": "I_Approve_Of_This"}
# response = requests.post("http://localhost:3000/Development/API.php", payload)
# print(response.text)


response = requests.get("https://intechctf2021.000webhostapp.com/API.php")
print(response.text)