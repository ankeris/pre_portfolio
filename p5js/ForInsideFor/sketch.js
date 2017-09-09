var bubbles = [];

function setup() {
	createCanvas(300, 300);

	for (var i = 0; i < 5; i++){
		bubbles[i] = new Bubble(random(width),random(height));
	}
}

function draw(){
	background(50);
	for (var i = 0; i < bubbles.length; i++){
		bubbles[i].move();
		bubbles[i].display();
		bubbles[i].ballWallHit();

		for (var j = 0; j < bubbles.length; j++){
			if (i != j && bubbles[i].intersect(bubbles[j])) {
				bubbles[i].changeColor();
				bubbles[j].changeColor();
			} else {
				bubbles[i].changeColorBack();
			}
		}
	}
}
