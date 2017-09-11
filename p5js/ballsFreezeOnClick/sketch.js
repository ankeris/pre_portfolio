var third = function(c){
	var bubbles = [];
	function setup() {
		createCanvas(300,300)
			for (var i = 0; i < 30; i++){
				bubbles[i] = new Bubble(random(width), random(height)); 
			}
	}

	function mousePressed(){
		for (var i = 0; i < bubbles.length; i++){
			bubbles[i].clicked();
		}
	}

	function draw() {
		background(55);
		for (var i = 0; i < bubbles.length; i++){
			bubbles[i].display();
			bubbles[i].ballSpeed();
			bubbles[i].ballWallHit();
		}
	}

	function Bubble(xasis, yasis) {
		this.x = xasis;
		this.y = yasis;
		this.col = color(1,22,0,80);
		this.yspeed = random(-0.1,0.2);
		this.xspeed = random(-0.1,0.2);

		this.display = function() {
			stroke(255);
			fill(this.col);
			ellipse(this.x, this.y, 30, 30);
		}

		this.ballSpeed = function(){
			this.x = this.x + this.xspeed;
			this.y = this.y + this.yspeed;
		}

		this.clicked = function() {
			var d = dist(mouseX, mouseY, this.x, this.y);
			if (d < 15) {
			this.col = color(0,10,155);
			this.xspeed = 0;
			this.yspeed = 0;
			}
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
};