import os
import random
import time

# Unicode for red Hearts : \u2764\uFE0F
# Unicode for broken red Hearts : \U0001F494
# C:\Code Folder\Projects\Test.py

def cls():
    os.system('cls||clear')

Player_Stats = {
    "Health": 100,
}
           
def Hearth_with_half_hearts():
    cls()
    x = Player_Stats["Health"] % 10
    y = int(Player_Stats["Health"] / 10)
    for _ in range(y):
        print("\u2764\uFE0F", end=" ")
        time.sleep(0.5)
    if x != 0:
        if x > 5:
            print("\u2764\uFE0F", end=" ")
            time.sleep(0.5)
        else:
            print("\U0001F494", end=" ")
            time.sleep(0.5)
    else:
        print("", end=" ")
        time.sleep(0.5)
        
def Dmg_Taken():
    dmg = []
    for _ in range(10):
        x = random.randint(1, 6)
        Player_Stats["Health"] = Player_Stats["Health"] - x
        dmg.append(x)
    Hearth_with_half_hearts()
    print("")
    print("Health that remains : ", Player_Stats["Health"])
    print("You have taken : ", sum(dmg))
Dmg_Taken()
# print("\U0001F494")

