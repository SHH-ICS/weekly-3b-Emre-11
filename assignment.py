Large = 6
ELarge = 10
OneTopping = 1
TwoTopping = 1.75
ThreeTopping = 2.5 
FourTopping = 3.35
askcondition = True
askcondition2 = True
Tax = 0.13
while askcondition:
    print("What size would you like?")
    PizzaS = (input("Large or Extra Large")) 
    if PizzaS == "Large" or PizzaS ==  "large" or PizzaS == "Extra Large" or PizzaS == "extra large" or PizzaS == "Extra large" or PizzaS == "extra Large":
        askcondition = False
        
if PizzaS == "Large" or PizzaS ==  "large":
    PizzaCost = Large
if PizzaS == "Extra Large" or PizzaS == "extra large"or PizzaS == "Extra large" or PizzaS == "extra Large":
    PizzaCost = ELarge

while askcondition2:
    print("How many toppings would you like?")
    PizzaT = (input("1, 2, 3 or 4"))
    if PizzaT == "1" or "2" or "3" or "4":
        askcondition2 = False

if PizzaT == "1":
    PizzaCost = PizzaCost + OneTopping
if PizzaT == "2":
    PizzaCost = PizzaCost + TwoTopping
if PizzaT == "3":
    PizzaCost = PizzaCost + ThreeTopping
if PizzaT == "4":
    PizzaCost = PizzaCost + FourTopping

Subtotal = PizzaCost
print(" Subtotal: $"+ str(PizzaCost))
Tax = Tax * Subtotal
print(" Tax: $" + str(round(Tax, 2)))
Total = Tax + Subtotal
print(" Total: $" + str(round(Total, 2)))
