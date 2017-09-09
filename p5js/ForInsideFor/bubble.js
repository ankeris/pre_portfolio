function Bubble(xas, yas) {
	this.x = xas;
	this.y = yas;
	this.r = 18;
	this.xspeed = random(-1,1);
	this.yspeed = random(-1,1);
	this.col = color(150,170,155);
	this.changeColor = function(){
		this.col = color(200,60,55);
	}
	this.changeColorBack = function(){
		this.col = color(150,170,155);
	}
	this.intersect = function(other) {
		var d = dist(this.x, this.y, other.x, other.y);
		if (d < this.r + other.r) {
			return true;
		} else {
			return false;
		}
	}

	this.display = function() {
		stroke(220);
		fill(this.col);
		ellipse(this.x, this.y, this.r * 2, this.r * 2);
	}
	this.move = function() {
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