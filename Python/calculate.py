import math

x = range(0,375,15)
with open("result.txt","w") as o:
    for i in x:
        sin = math.sin(math.radians(i))
        cos = math.cos(math.radians(i))
        tan = math.tan(math.radians(i))
        print("sin"+str(i)+": "+str(sin),file=o)
        print("cos"+str(i)+": "+str(cos),file=o)
        print("tan"+str(i)+": "+str(tan),file=o)