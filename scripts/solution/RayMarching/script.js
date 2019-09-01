var pts = [];
var w = 900; //window.innerWidth;
var h = 600; //window.innerHeight;
var centerX = Math.floor(w/2);
var centerY = Math.floor(h/2);
var d_min = Math.floor((w+h) / 20);
var numPts = 10;
var trace = [];
var draw_bubble = true;

function setup() {
    createCanvas(w, h);
    background(51);
    randomSeed(42);
    for (let i = 0; i < numPts; i++) {
        let x = random(w);
        let y = random(h);
        let d = random(d_min, 2 * d_min);
        pts.push([x, y, d]);
    }
//    console.log(pts);
//    frameRate(1);
}

function draw() {
    background(51);
    if (draw_bubble){
        drawBubble();
    }
    drawLine();
    drawRayMarching();
}

function mousePressed() {
    draw_bubble = false;
}

function mouseReleased() {
    draw_bubble = true;
}

function drawBubble(){
    stroke(0);
    strokeWeight(1);
    fill(150);
    for (let i = 0; i < numPts; i++) {
        ellipse(pts[i][0], pts[i][1], pts[i][2], pts[i][2]);
    }
    fill('red');
    ellipse(centerX, centerY, d_min, d_min);
}

function drawLine(){
    let alpha = Math.atan2(mouseX-centerX, mouseY-centerY) - Math.PI/2;
    let endX = centerX + (h+w)/2 * Math.cos(alpha);
    let endY = centerY - (h+w)/2 * Math.sin(alpha);
    stroke('red');
    strokeWeight(2);
    line(centerX, centerY, endX, endY);
//    console.log(alpha);
}

function getBiggestDia(X, Y, pts){
	// return the diameter of biggest the circle which fits inside object 
    // = 2 * smallest distance between 2 objects - diameter of the object
    let min_dist = 1e6;
    for (let i = 0; i < numPts; i++) {
        var d = 2 * Math.sqrt( Math.pow(X - pts[i][0], 2) + Math.pow(Y - pts[i][1], 2) ) - pts[i][2];
        min_dist = Math.min(min_dist, d);
    }
    min_dist = Math.min(min_dist, 2*X); // dist to X = 0
	min_dist = Math.min(min_dist, 2*Y); // dist to Y = 0
	min_dist = Math.min(min_dist, 2*(w-X)); // dist to Y = 900
	min_dist = Math.min(min_dist, 2*(h-Y)); // dist to Y = 600
    return min_dist;
}

function computeRayMarching(){
    let rays = [];
    var startX = centerX;
    var startY = centerY;
    var d = getBiggestDia(startX, startY, pts);
    if (d > 1) {
		var n = 0;
		while (d > 1) {
            rays.push([startX, startY, d]);
            var alpha = Math.atan2(mouseX-centerX, mouseY-centerY) - Math.PI/2;
			startX += d/2 * Math.cos(alpha);
			startY -= d/2 * Math.sin(alpha);
			d = getBiggestDia(startX, startY, pts);
            if (d > 0 & d <= 1){
                startX += d/2 * Math.cos(alpha);
                startY -= d/2 * Math.sin(alpha);
                rays.push([startX, startY, d]);
            }
            n++;
		}
	}
//    console.log(Math.round(startX) + " " + Math.round(startY) + " " + n);
    if (startX > 0 & startX < w & startY > 0 & startY < h) {
        let n = rays.length;
        if (trace.length > 255){
            trace.pop();
        }
        trace.unshift([rays[n-1][0], rays[n-1][1]]);
    }
    return rays;
}

function drawRayMarching(){
    let rays = computeRayMarching();
    noFill();
    stroke(0);
    strokeWeight(3);
    for (let i = 0; i < rays.length; i++){
        ellipse(rays[i][0], rays[i][1], rays[i][2], rays[i][2]);
    }
    stroke(255);
    strokeWeight(5);
    for (let i =0; i< trace.length ; i++){
        point(trace[i][0], trace[i][1]);
        stroke(255 - i);
    }
}