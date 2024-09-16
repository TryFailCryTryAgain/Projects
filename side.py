# This is a side python file
import os
import random
import time

def Clear_Console():
    x = 1
    for _ in range(25):
        os.system('cls||clear')
        print(x, "%", sep="", end="")
        x += 1
        y = random.uniform(0.2, 1)
        time.sleep(y)
    for _ in range(50):
        os.system('cls||clear')
        print(x, "%", sep="", end="")
        x += 1
        y = random.uniform(0.1, 0.2)
        time.sleep(y)
    for _ in range(25):
        os.system('cls||clear')
        print(x, "%", sep="", end="")
        x += 1
        y = random.uniform(0, 0.01)
        time.sleep(y)        
    os.system('cls||clear')
    print("Loading complete! ")
        
Clear_Console()

        