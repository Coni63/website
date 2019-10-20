var pts = [];
var counts = [];
var w = 900; //window.innerWidth;
var h = 600; //window.innerHeight;
var centerX = Math.floor(w/2);
var centerY = Math.floor(h/2);
var numPts = 20;
var pivot = -1;
var old_pivot = -1;
var angle = 0;
var clockwise = true;
var left =0;
var right = 0;

function setup() {
    createCanvas(w, h);
    background(51);
    randomSeed(10);
    while (pts.length < numPts){
        let x = random(w-40);
        let y = random(h-40);
        let p = createVector(x+20, y+20);
        let valid = true;
        for (let j = 0; j < pts.length; j++){
            for (let k=j+1; k < pts.length; k++){
                let v1 = createVector(pts[j].x - p.x, pts[j].y - p.y);
                let v2 = createVector(pts[k].x - p.x, pts[k].y - p.y);
                let alpha = v1.angleBetween(v2);
                
                if (alpha < radians(1) || (PI - alpha) < radians(1)){
                    valid = false;
                }
            }
        }
        if (valid){
            pts.push(p);
            counts.push(0);
        }
    }
    console.log(pts);
    frameRate(30);
}

function draw() {
    background(51);
    left = 0;
    right = 0;
    
    if (pivot == -1){
        fill(color(255, 204, 0));
        for (let i = 0; i < numPts; i++){
            ellipse(pts[i].x, pts[i].y, 10, 10);
            text(counts[i], pts[i].x-10, pts[i].y-20, 20, 20);
        }
    } else {
        let d = p5.Vector.fromAngle(radians(angle), 1000);
        let normal_d = p5.Vector.fromAngle(radians(angle+90), 1000);
        // draw the line
        stroke(150);
        line(pts[pivot].x-d.x, pts[pivot].y-d.y, pts[pivot].x+d.x, pts[pivot].y + d.y);
        stroke(0);
        
        // draw points and count
        let colorA = color(255, 153, 153);
        let colorB = color(153, 204, 255);
        for (let i = 0; i < numPts; i++){
            let v2 = createVector(pts[pivot].x-pts[i].x, pts[pivot].y-pts[i].y);
            if (normal_d.dot(v2)>0){
                fill(colorB);
                left ++;
            } else {
                fill(colorA);
                right++;
            }
            text(counts[i], pts[i].x-10, pts[i].y-20, 20, 20);
            ellipse(pts[i].x, pts[i].y, 10, 10);
        }
        
        // check distance to other pts
        for (let i = 0; i < numPts; i++){
            if (i != pivot && i != old_pivot){
                let v2 = createVector(pts[pivot].x-pts[i].x, pts[pivot].y-pts[i].y);
                let alpha = d.angleBetween(v2);
                if (alpha < radians(1) || (PI - alpha) < radians(1)){
//                    clockwise = !clockwise;
                    old_pivot = pivot;
                    pivot = i;
                    counts[i]++;
                    break;
                }
            }
        }
        
        // update rotation
        if (clockwise){
            angle++;
        } else { 
            angle--;
        }
        
        fill(color(255, 204, 0));
        textSize(20);
        text("Left   : " + left, w-100, 20, 100, 50);
        text("Right : " + right, w-100, 50, 100, 50);
        textSize(12);
        
    }
    
    console.log(counts);
    
}

function mousePressed() {
    for (let i = 0; i < numPts; i++){
        let d = dist(mouseX, mouseY, pts[i].x, pts[i].y);
        if (d < 10) {
            pivot = i;
            counts[i]++;
        }
    }
    console.log("Pivot = " + pivot);
}