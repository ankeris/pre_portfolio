var first = function(a){

	a.setup = function(){
		 a.createCanvas(300, 300);
	};

	a.draw = function(){
		a.background(0);
		a.ballDisplay();
		a.bounceOnWallHit();
		a.ballSpeed();
	};

	var ball = {
		x: 150,
		y: 0,
		xspeed: 6,
		yspeed: 5
	};

	a.ballDisplay = function() {	
		a.strokeWeight(3);
		a.stroke(255,255,0);
		a.fill(a.random(10,255),a.random(15,255),0)
		a.ellipse(ball.x, ball.y, 25,25);
	};

	a.bounceOnWallHit = function() {
		if (ball.x > a.width || ball.x < 0) {
			ball.xspeed = ball.xspeed * -1;
		}

		if (ball.y > a.width || ball.y < 0) {
			ball.yspeed = ball.yspeed * -1;
		}
	};

	a.ballSpeed = function() {
		ball.x = ball.x + ball.xspeed;
		ball.y = ball.y + ball.yspeed;
	};
};
var myp5 = new p5(first, 'bouncingball');