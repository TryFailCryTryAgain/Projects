# Four fair six-sided dice are rolled. What is the probability they can be divided into two pairs which sum to the same value?


even = []
odd = []


def Odd():
    for y in range(24):
        if y % 2 == 0:
            even.append(y)
            y += 1
        else:
            odd.append(y)
            y += 1
            
    print(even)
    print(odd)
    
def Combinations():
    even[1]
    
            
            
Odd()

# a total of 23 values between 1 - 24, and only 11 is functional, 
# 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22