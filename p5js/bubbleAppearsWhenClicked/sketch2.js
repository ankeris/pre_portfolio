var bubbles = [];

function setup() {
var canvas = createCanvas(300,300);
canvas.parent('bubbleappearswhenclicked');

// insert i value for the amount of figure you want
}

function draw() {
	background(55);
	textSize(26);
	fill(215);
	text("press me", 100, 150);
	for (var i = 0; i < bubbles.length; i++){
		bubbles[i].display();
		bubbles[i].ballSpeed();
		bubbles[i].ballWallHit();
	}
}
// any mouse command below

function mousePressed() {
	bubbles.push(new Bubble(mouseX, mouseY));
if (bubbles.length > 50) {
	bubbles.splice(0,1);
	}
}

function Bubble(xasis, yasis) {
	this.x = xasis;
	this.y = yasis;
	this.yspeed = random(-0.3,0.4);
	this.xspeed = random(-0.3,0.4);
	this.display = function() {
		stroke(255);
		fill(55,115,55);
		ellipse(this.x, this.y, 30, 30);
	}
	this.ballSpeed = function(){
		this.x = this.x + this.xspeed;
		this.y = this.y + this.yspeed;
	}
	this.ballWallHit = function(){
		if (this.x > width || this.x < 0) {
			this.xspeed = this.xspeed * -1;
		}

		if (this.y > height || this.y < 0) {
				this.yspeed = this.yspeed * -1;
		}
	}
}
