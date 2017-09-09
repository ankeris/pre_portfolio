function setup() {
 createCanvas(300, 300);
}

var lightOn = true;
 function draw() {
   if (lightOn) {
     fill(255,255,0); background(225);
   } else {
     fill(0); background(123);
  }

  rect(110,110,80,80);
  noFill();
  stroke(1);
  strokeWeight(4);
}

function mousePressed() {
 lightOn = !lightOn;
}
