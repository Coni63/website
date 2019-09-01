function getBiggestDia(X, Y, pts){
    // return the diameter of biggest the circle which fits inside object 
    // = 2 * smallest distance between 2 objects - diameter of the object
    // check also distance to walls
    var min_dist = 1e6;
    for (var i = 0; i < pts.length; i++) {
        var d = 2 * Math.sqrt( Math.pow(X - pts[i][0], 2) + Math.pow(Y - pts[i][1], 2) ) - pts[i][2];
        min_dist = Math.min(min_dist, d);
    }
	min_dist = Math.min(min_dist, 2*X); // dist to X = 0
	min_dist = Math.min(min_dist, 2*Y); // dist to Y = 0
	min_dist = Math.min(min_dist, 2*(900-X)); // dist to Y = 900
	min_dist = Math.min(min_dist, 2*(600-Y)); // dist to Y = 600
    return min_dist;
}

function computeRayMarching(pts, dir){
    var startX = 450;
    var startY = 300;
	var d = getBiggestDia(startX, startY, pts);
	var n = 0;
	var angle = Math.atan2(dir[1], dir[0]);
	//WScript.Echo(angle);
	if (d > 1) {
    	while (d > 1) {
    		startX += d/2 * Math.cos(angle);
    		startY += d/2 * Math.sin(angle);
    		n++;
    		d = getBiggestDia(startX, startY, pts);
    		if (d > 0 & d <= 1){  // in case the last circle = 0, the last point is used
                startX += d/2 * Math.cos(angle);
                startY += d/2 * Math.sin(angle);
            }
    	}
	}
	WScript.Echo(Math.round(startX) + " " + Math.round(startY));
	WScript.Echo(n);
}

// object - 1 object
// test 1
var N = 1;
var pts = [
	[900, 300, 50]
];
var R = [1, 0];
computeRayMarching(pts, R);

// val 1
var N = 1;
var pts = [
	[800, 300, 50]
];
var R = [1, 0];
computeRayMarching(pts, R);

// border - 1 object
// test 2
var N = 1;
var pts = [
	[900, 300, 50]
];
var R = [-1, 1];
computeRayMarching(pts, R);

// val 2
var N = 1;
var pts = [
	[900, 300, 50]
];
var R = [1, -1];
computeRayMarching(pts, R);

/*
// object - 10 objects - seed 42
// test 3
var N = 10;
var pts = [
	[227, 52, 118],
	[200, 225, 76],
	[402, 71, 140],
	[895, 511, 112],
	[577, 516, 119],
	[81, 84, 146],
	[832, 533, 116],
	[162, 330, 94],
	[848, 492, 86],
	[746, 280, 79]
];
var alpha = 1;
computeRayMarching(pts, alpha);  // 550 464 2 with script

// val 3
var N = 10;
var pts = [
	[227, 52, 118],
	[200, 225, 76],
	[402, 71, 140],
	[895, 511, 112],
	[577, 516, 119],
	[81, 84, 146],
	[832, 533, 116],
	[162, 330, 94],
	[848, 492, 86],
	[746, 280, 79]
];
var alpha = 1.1;
computeRayMarching(pts, alpha); // 537 473 3 with script

// border - 10 objects - seed 42
// test 4
var N = 10;
var pts = [
	[227, 52, 118],
	[200, 225, 76],
	[402, 71, 140],
	[895, 511, 112],
	[577, 516, 119],
	[81, 84, 146],
	[832, 533, 116],
	[162, 330, 94],
	[848, 492, 86],
	[746, 280, 79]
];
var alpha = 4.18;
computeRayMarching(pts, alpha); // 274 0 21 with script

// val 4
var N = 10;
var pts = [
	[227, 52, 118],
	[200, 225, 76],
	[402, 71, 140],
	[895, 511, 112],
	[577, 516, 119],
	[81, 84, 146],
	[832, 533, 116],
	[162, 330, 94],
	[848, 492, 86],
	[746, 280, 79]
];
var alpha = 3.23;
computeRayMarching(pts, alpha); // 0 258 13 with script

// invalid - 10 objects - seed 42 except last pt
// test 5
var N = 10;
var pts = [
	[227, 52, 118],
	[200, 225, 76],
	[402, 71, 140],
	[895, 511, 112],
	[577, 516, 119],
	[81, 84, 146],
	[832, 533, 116],
	[162, 330, 94],
	[848, 492, 86],
	[450, 280, 79]
];
var alpha = 4.18;
computeRayMarching(pts, alpha); // -1

// val 5
var N = 10;
var pts = [
	[227, 52, 118],
	[200, 225, 76],
	[402, 71, 140],
	[895, 511, 112],
	[577, 516, 119],
	[81, 84, 146],
	[832, 533, 116],
	[162, 330, 94],
	[848, 492, 86],
	[430, 300, 79]
];
var alpha = 4.18;
computeRayMarching(pts, alpha); // -1
*/