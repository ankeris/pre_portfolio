var fourth = function(d){

	var bubbles = [];
	d.setup = function() {
	d.createCanvas(300,300)

		// insert i value for the amount of figure you want

		for (var i = 0; i < 15; i++){
			bubbles[i] = {
				x: d.random(0, d.width),
				y: d.random(0, d.height),
				xspeed: d.random(-1,6),
				yspeed: d.random(-1,5),
				display: function(){
					d.stroke(255);
					d.ellipse(this.x, this.y, 30, 30);
				},
				ballSpeed: function() {
					this.x = this.x + this.xspeed;
					this.y = this.y + this.yspeed;
				},
				ballWallHit: function(){
					if (this.x > d.width || this.x < 0) {
						this.xspeed = this.xspeed * -1;
					}

					if (this.y > d.height || this.y < 0) {
						this.yspeed = this.yspeed * -1;
					}
				}
			}
		}
	}

	

	d.draw = function() {
		d.background(55);
		for (var i = 0; i < bubbles.length; i++){
			bubbles[i].display();
			bubbles[i].ballSpeed();
			bubbles[i].ballWallHit();
		}	
	}
}; var myp5 = new p5(fourth, 'moreBouncingFigures');
