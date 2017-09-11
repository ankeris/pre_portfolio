var third = function(c){
	var bubbles = [];
	c.setup = function() {
		c.createCanvas(300,300)
			for (var i = 0; i < 30; i++){
				bubbles[i] = new c.Bubble(c.random(c.width), c.random(c.height)); 
			}
	}

	c.mousePressed = function(){
		for (var i = 0; i < bubbles.length; i++){
			bubbles[i].clicked();
		}
	}

	c.draw = function() {
		c.background(55);
		for (var i = 0; i < bubbles.length; i++){
			bubbles[i].display();
			bubbles[i].ballSpeed();
			bubbles[i].ballWallHit();
		}
	}

	c.Bubble = function(xasis, yasis) {
		this.x = xasis;
		this.y = yasis;
		this.col = c.color(1,22,0,80);
		this.yspeed = c.random(-0.1,0.2);
		this.xspeed = c.random(-0.1,0.2);

		this.display = function() {
			c.stroke(255);
			c.fill(this.col);
			c.ellipse(this.x, this.y, 30, 30);
		}

		this.ballSpeed = function(){
			this.x = this.x + this.xspeed;
			this.y = this.y + this.yspeed;
		}

		this.clicked = function() {
			var d = c.dist(c.mouseX, c.mouseY, this.x, this.y);
			if (d < 15) {
			this.col = c.color(0,10,155);
			this.xspeed = 0;
			this.yspeed = 0;
			}
		}

		this.ballWallHit = function(){
			if (this.x > c.width || this.x < 0) {
				this.xspeed = this.xspeed * -1;
			}

			if (this.y > c.height || this.y < 0) {
					this.yspeed = this.yspeed * -1;
			}
		}
	}
}; var myp5 = new p5(third, 'ballsFreezeOnClick');