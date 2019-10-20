import sys
import math
import time

class Point:
    def __init__(self, x, y, index):
        self.x = x
        self.y = y
        self.n = 0
        self.pivot = False
        self.index = index

    def __repr__(self):
        return f"Pts({self.x}, {self.y}) = {self.n}"

    def set_pivot(self):
        for pts in listed_points:
            pts.pivot = False
        self.pivot = True
        self.n += 1

k = int(input())
n = int(input())
pivot_number = int(input())
listed_points = []
for i in range(k):
    x, y = [int(j) for j in input().split()]
    listed_points.append(Point(x, y, i))

tic = time.time()

alpha = 0                                # angle of the line "l"

prev_pivot = listed_points[pivot_number] # require to save the previous pivot to not select it again after a change

pivot = listed_points[pivot_number]
pivot.set_pivot()

memo = []                                # stores (previous_pivot, pivot, rotation) which is required for memoization
skip_memo = False                        # once we use the memo, we should not go thru it for the last remaining steps

loop = 1
while loop <= n:
    closest_pts = None
    shift_angle = 10
    for pts in listed_points:
        if not pts.pivot and pts != prev_pivot:
            if pts.x == pivot.x:
                alpha_2 = math.pi / 2
            else:
                alpha_2 = math.atan((pts.y - pivot.y) / (pts.x - pivot.x))
            theta = alpha_2 - alpha

            if theta > 0:              # to get direct angle
                theta = math.pi - theta
            else:
                theta = -theta

            if theta < shift_angle:        # we store the next pivot and also the angle of the future line "l"
                shift_angle = theta
                next_angle = alpha_2
                closest_pts = pts
    loop += 1

    prev_pivot = pivot                     # swap pivots
    pivot = closest_pts
    pivot.set_pivot()
    
    # next_angle = (next_angle + math.pi)%math.pi
    
    # memoization
    if not (prev_pivot, pivot) in memo:
        memo.append((prev_pivot, pivot))
    elif not skip_memo:
        prev_index = memo.index((prev_pivot, pivot))
        loop_freq = loop - prev_index - 2    # -2 is because the loops starts at 1, and the index at 0
        remaining_steps = n - loop
        turn = remaining_steps // loop_freq
        n = loop + (remaining_steps % loop_freq)
        for pprivot, cpivot in memo[prev_index:]:  # increase each points by the number of loops skipped with memoization
            cpivot.n += turn
        skip_memo = True

    alpha = next_angle

toc = time.time()
print(toc-tic, file=sys.stderr)

print(pivot.index)
for pts in listed_points:
    print(pts.n)