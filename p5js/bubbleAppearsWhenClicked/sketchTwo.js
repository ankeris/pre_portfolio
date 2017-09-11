var second = function(b){
	var bubbles = [];

	b.setup = function() {
		b.createCanvas(300,300);
	}

	b.draw = function() {
		b.background(55);
		b.textSize(26);
		b.fill(215);
		b.text("press me", 100, 150);
		for (var i = 0; i < bubbles.length; i++){
			bubbles[i].display();
			bubbles[i].ballSpeed();
			bubbles[i].ballWallHit();
		}
	}
	// any mouse command below

	b.mousePressed = function() {
		bubbles.push(new b.Bubble(b.mouseX, b.mouseY));
	if (bubbles.length > 50) {
		bubbles.splice(0,1);
		}
	}

	b.Bubble = function(xasis, yasis) {
		this.x = xasis;
		this.y = yasis;
		this.yspeed = b.random(-0.3,0.4);
		this.xspeed = b.random(-0.3,0.4);
		this.display = function() {
			b.stroke(255);
			b.fill(55,115,55);
			b.ellipse(this.x, this.y, 30, 30);
		}
		this.ballSpeed = function(){
			this.x = this.x + this.xspeed;
			this.y = this.y + this.yspeed;
		}
		this.ballWallHit = function(){
			if (this.x > b.width || this.x < 0) {
				this.xspeed = this.xspeed * -1;
			}

			if (this.y > b.height || this.y < 0) {
					this.yspeed = this.yspeed * -1;
			}
		}
	}
};
var myp5 = new p5(second, 'bubbleAppearsWhenClicked');