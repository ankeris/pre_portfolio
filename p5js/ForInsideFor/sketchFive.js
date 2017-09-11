var fifth = function(e){

	var bubbles = [];
	e.setup = function() {
		e.createCanvas(300, 300);
		for (var i = 0; i < 5; i++){
			bubbles[i] = new e.Bubble(e.random(e.width),e.random(e.height));
		}
	}

	e.draw = function(){
		e.background(50);
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

	e.Bubble = function(xas, yas) {
		this.x = xas;
		this.y = yas;
		this.r = 18;
		this.xspeed = e.random(-1,1);
		this.yspeed = e.random(-1,1);
		this.col = e.color(150,170,155);
		this.changeColor = function(){
			this.col = e.color(200,60,55);
		}
		this.changeColorBack = function(){
			this.col = e.color(150,170,155);
		}
		this.intersect = function(other) {
			var d = e.dist(this.x, this.y, other.x, other.y);
			if (d < this.r + other.r) {
				return true;
			} else {
				return false;
			}
		}

		this.display = function() {
			e.stroke(220);
			e.fill(this.col);
			e.ellipse(this.x, this.y, this.r * 2, this.r * 2);
		}
		this.move = function() {
			this.x = this.x + this.xspeed;
			this.y = this.y + this.yspeed;
		}

		this.ballWallHit = function(){
			if (this.x > e.width || this.x < 0) {
				this.xspeed = this.xspeed * -1;
			}

			if (this.y > e.height || this.y < 0) {
					this.yspeed = this.yspeed * -1;
			}
		}
	}
};
var myp5 = new p5(fifth, 'ForInsideFor');