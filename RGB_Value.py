import random

def RGB():
    while True:
        try:
            user_input = input("Do you wanna generate a random RGB value? ")
        except ValueError():
            print("Faulty Input")
            continue
        else:
            answer_yes = ["yes", "ye", "y"]
            if user_input.lower() in answer_yes:
                print("Generating random Value : ", end="\n\n")
                R_value = random.randint(1, 255)
                G_value = random.randint(1, 255)
                B_value = random.randint(1, 255)
                print("Your random generated RGB value is : ", R_value, G_value, B_value)
            else:
                print("Re-directing")
                RGB()
                break

RGB()