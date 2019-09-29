import math
import turtle

from itertools import cycle

########################################################################################################################
######## Triangle Spiral ###############################################################################################
########################################################################################################################

# def draw(l, color, threshold=5):
#     if l <= threshold:
#         return
#     else:
#         cursor.pencolor(color)
#         cursor.forward(l)
#         cursor.left(120)
#         cursor.width(3)
#         cursor.pencolor("blue")
#         cursor.forward(l / 2)
#         cursor.pencolor(color)
#         cursor.width(1)
#         cursor.forward(l / 2)
#         cursor.left(120)
#         cursor.forward(l)
#         cursor.left(150)
#         draw(l*math.sqrt(3)/2, next(gen))
#
# gen = cycle(["red", "green"])
#
# cursor = turtle.Turtle()
# cursor.speed(5)
# draw(200, next(gen))
# cv = turtle.getcanvas().postscript(file="triangle_spiral.ps", colormode='color')
# cursor.done()

########################################################################################################################
######## Fractal Tree ##################################################################################################
########################################################################################################################

# def draw(l, branches=2, angle=30, threshold=5, factor=0.5):
#     if l <= threshold:
#         return
#     else:
#         cursor.forward(l)
#         cursor.left(angle*(branches-1)/2)
#         for _ in range(branches):
#             draw(l*factor, branches, angle, threshold, factor)
#             cursor.right(angle)
#         cursor.left(angle*(branches+1)/2)  # +1 to compensate the last cursor right
#         cursor.backward(l)
#
# cursor = turtle.Turtle()
# cursor.speed(30)
#
# cursor.right(90)
# cursor.forward(200)
# cursor.left(180)
#
# draw(250, branches=2, angle=60, threshold=3, factor=0.5)
# cv = turtle.getcanvas().postscript(file="fractal_tree.ps", colormode='color')
# turtle.done()


########################################################################################################################
######## 2D Merger Sponge ##############################################################################################
########################################################################################################################
#
# def make_square(l):
#     for _ in range(4):
#         cursor.forward(l)
#         cursor.left(90)
#
# def draw(l, start_x, start_y, threshold=5):
#     if l <= threshold:
#         return
#     else:
#         cursor.penup()
#         cursor.setpos(start_x + l/3, start_y + l/3)
#         cursor.pendown()
#         make_square(l/3)
#         draw(l / 3, start_x, start_y)
#         draw(l / 3, start_x + l/3, start_y)
#         draw(l / 3, start_x + 2*l/3, start_y)
#         draw(l / 3, start_x + 2*l/3, start_y + l/3)
#         draw(l / 3, start_x + 2*l/3, start_y + 2*l/3)
#         draw(l / 3, start_x + l/3, start_y + 2*l/3)
#         draw(l / 3, start_x, start_y + 2*l/3)
#         draw(l / 3, start_x, start_y + l/3)
#
# cursor = turtle.Turtle()
# cursor.speed("fastest")
#
# w, h = turtle.window_width(), turtle.window_height()
#
# p = min(w, h)/2 - 100
#
# cursor.penup()
# cursor.setpos(-p, -p)
# cursor.pendown()
# make_square(2*p)
#
# draw(2*p, start_x=-p, start_y=-p, threshold=10)
# cv = turtle.getcanvas().postscript(file="merger_sponge.ps", colormode='color')
# turtle.done()

########################################################################################################################
######## Sierpinski Triangle ###########################################################################################
########################################################################################################################

# def make_triangle(l, reversed=False):
#     if not reversed:
#         for _ in range(3):
#             cursor.forward(l)
#             cursor.left(120)
#     else:
#         for _ in range(3):
#             cursor.forward(l)
#             cursor.right(120)
#
# def draw(l, start_x, start_y, threshold=5, depth=0):
#     factor = math.sqrt(3/4)
#     if l <= threshold:
#         return
#     else:
#         cursor.penup()
#         cursor.setpos(start_x + l/4, start_y + factor*l/2)
#         cursor.pendown()
#         cursor.fillcolor(colors[depth])
#         cursor.begin_fill()
#         make_triangle(l/2, reversed=True)
#         cursor.end_fill()
#         draw(l / 2, start_x, start_y, threshold=threshold, depth=depth+1)
#         draw(l / 2, start_x + l/2, start_y, threshold=threshold, depth=depth+1)
#         draw(l / 2, start_x + l/4, start_y + factor*l/2, threshold=threshold, depth=depth+1)
#
# cursor = turtle.Turtle()
# cursor.speed("fastest")
#
# w, h = turtle.window_width(), turtle.window_height()
#
# p = min(w, h)/2 - 100
#
# colors = ["Red", "Orange Red", "Dark Orange", "Orange", "Light Goldenrod", "Light Goldenrod Yellow", "Light Yellow"] \
#          + ["White"] * 100 # just to avoid index error
#
# cursor.penup()
# cursor.setpos(-p, -p)
# cursor.pendown()
# make_triangle(2*p)
#
# draw(2*p, start_x=-p, start_y=-p, threshold=20)
# cv = turtle.getcanvas().postscript(file="Sierpinski_triangle.ps", colormode='color')
# turtle.done()

########################################################################################################################
######## Von Koch Curve ################################################################################################
########################################################################################################################

# def draw(l, threshold=5):
#     if l <= threshold:
#         cursor.forward(l)
#     else:
#         draw(l / 3)
#         cursor.left(60)
#         draw(l / 3)
#         cursor.right(120)
#         draw(l / 3)
#         cursor.left(60)
#         draw(l / 3)
#
# cursor = turtle.Turtle()
# cursor.speed(30)
#
# w, h = turtle.window_width(), turtle.window_height()
# border = 10
#
# cursor.penup()
# cursor.setpos(-w/2+border, -h/4)
# cursor.pendown()
#
# draw(w - 2 * border)
# cv = turtle.getcanvas().postscript(file="von_koch_curve.ps", colormode='color')
# turtle.done()


########################################################################################################################
######## Dragon Curve ##################################################################################################
########################################################################################################################


# https://fr.wikipedia.org/wiki/Courbe_du_dragon

# def x(n):
#     if n == 0:
#         return
#     x(n-1)
#     cursor.right(90)
#     y(n-1)
#     cursor.forward(l)
#     # cursor.right(90)
#
# def y(n):
#     if n == 0:
#         return
#     cursor.forward(l)
#     x(n-1)
#     cursor.left(90)
#     y(n-1)
#     # cursor.left(90)
#
# cursor = turtle.Turtle()
# cursor.speed(30)
#
# l=3
# depth = 12
#
# cursor.forward(l)
# x(depth)
# cv = turtle.getcanvas().postscript(file="dragon_curve.ps", colormode='color')
# turtle.done()

########################################################################################################################
######## Koch Curve ####################################################################################################
########################################################################################################################

# https://fr.wikipedia.org/wiki/L-Syst%C3%A8me

# def draw(n):
#     if n == 0:
#         cursor.forward(l)
#         return
#     draw(n-1)
#     cursor.right(90)
#     draw(n-1)
#     cursor.left(90)
#     draw(n-1)
#     cursor.left(90)
#     draw(n-1)
#     cursor.right(90)
#     draw(n-1)
#
# cursor = turtle.Turtle()
# cursor.speed(30)
#
# w, h = turtle.window_width(), turtle.window_height()
# border = 10
#
# cursor.penup()
# cursor.setpos(-w/4, h/4)
# cursor.pendown()
#
# l=3
# depth = 5
#
# draw(depth)
# cv = turtle.getcanvas().postscript(file="koch_curve.ps", colormode='color')
# turtle.done()

import math
import turtle

# cursor = turtle.Turtle()
# cursor.speed("fastest")
#
# w, h = turtle.window_width(), turtle.window_height()
# border = 10
#
# # Les dimensions standards du parpaing sont les suivantes : L : 20 cm, H : 25 cm, l : 50 cm.
# n_horizontal, n_vertical = int(math.ceil(600/50)), int(math.ceil(140/25))
#
# scale = min((w-4*border)/600, (h-4*border)/150) # px/cm
#
# parpaing_x, parpaing_y, parpaing_z = int(50*scale), int(25*scale), int(20 * 0.5 * scale)
#
# for level in range(n_vertical):
#     # reset cursor position
#     cursor.penup()
#     cursor.setpos(-w / 2 + border + (parpaing_x // 2) * (level % 2), -h / 2 + border + parpaing_y * level)
#     cursor.pendown()
#
#     # draw projection left side
#     if level % 2 == 1:
#         cursor.left(90)
#         cursor.forward(parpaing_z / 2)
#         cursor.left(90)
#         cursor.forward(parpaing_x / 2 - parpaing_z * (3**0.5)/2)
#         cursor.left(30)
#         cursor.forward(parpaing_z)
#         cursor.left(150)
#         cursor.forward(parpaing_x / 2)
#
#     # draw line of bricks
#     for _ in range(n_horizontal - (level % 2)):
#         cursor.forward(parpaing_x)
#         cursor.left(90)
#         cursor.forward(parpaing_y)
#         cursor.left(90)
#         cursor.forward(parpaing_x)
#         cursor.left(90)
#         cursor.forward(parpaing_y)
#         cursor.left(90)
#         cursor.forward(parpaing_x)
#
#     # draw projection left side
#     if level % 2 == 0:
#         cursor.left(30)
#         cursor.forward(parpaing_z)
#         cursor.left(60)
#         cursor.forward(parpaing_y)
#         cursor.left(120)
#         cursor.forward(parpaing_z)
#         cursor.backward(parpaing_z)
#         cursor.right(30)
#         cursor.forward(parpaing_x/2)
#         cursor.left(180)
#     else:
#         cursor.left(30)
#         cursor.forward(parpaing_z)
#         cursor.left(60)
#         cursor.forward(parpaing_y-parpaing_z/2)
#         cursor.right(90)
#
# # draw top projection
# if n_vertical % 2 == 1:
#     cursor.left(180)
#     cursor.backward(parpaing_x / 2)
# else:
#     cursor.left(90)
#     cursor.forward(parpaing_z / 2)
#     cursor.left(120)
#     cursor.forward(parpaing_z)
#     cursor.backward(parpaing_z)
#     cursor.right(30)
#
# for _ in range(n_horizontal - (level % 2)):
#     cursor.forward(parpaing_x)
#     cursor.left(30)
#     cursor.forward(parpaing_z)
#     cursor.backward(parpaing_z)
#     cursor.right(30)
#
# turtle.done()

import math
import turtle

def build_angle():
    cursor.left(30)
    cursor.forward(parpaing_z)
    cursor.backward(parpaing_z)
    cursor.right(30)

def turn_and_draw(angle, distance):
    cursor.left(angle)
    cursor.forward(distance)

cursor = turtle.Turtle()
cursor.speed("fastest")

w, h = turtle.window_width(), turtle.window_height()
border = 10

# Les dimensions standards du parpaing sont les suivantes : L : 20 cm, H : 25 cm, l : 50 cm.
n_horizontal, n_vertical = int(math.ceil(600/50)), int(math.ceil(140/25))

scale = min((w-4*border)/600, (h-4*border)/150) # px/cm

parpaing_x, parpaing_y, parpaing_z = int(50*scale), int(25*scale), int(20 * 0.5 * scale)

for level in range(n_vertical):
    # reset cursor position
    cursor.penup()
    cursor.setpos(-w / 2 + border + (parpaing_x // 2) * (level % 2), -h / 2 + border + parpaing_y * level)
    cursor.pendown()

    # draw projection left side
    if level % 2 == 1:
        turn_and_draw(90, parpaing_z / 2)
        turn_and_draw(90, parpaing_x / 2 - parpaing_z * (3**0.5)/2)
        turn_and_draw(30, parpaing_z)
        turn_and_draw(150, parpaing_x / 2)

    # draw line of bricks
    for _ in range(n_horizontal - (level % 2)):
        cursor.forward(parpaing_x)
        turn_and_draw(90, parpaing_y)
        turn_and_draw(90, parpaing_x)
        turn_and_draw(90, parpaing_y)
        turn_and_draw(90, parpaing_x)

    # draw projection left side
    turn_and_draw(30, parpaing_z)
    if level % 2 == 0:
        turn_and_draw(60, parpaing_y)
        cursor.left(90)
        build_angle()
        cursor.forward(parpaing_x/2)
        cursor.left(180)
    else:
        cursor.left(60)
        cursor.forward(parpaing_y-parpaing_z/2)
        cursor.right(90)

# draw top projection
if n_vertical % 2 == 1:
    turn_and_draw(180, parpaing_x / 2)
else:
    turn_and_draw(90, parpaing_z / 2)
    cursor.left(90)
    build_angle()

for _ in range(n_horizontal - (level % 2)):
    cursor.forward(parpaing_x)
    build_angle()

turtle.done()