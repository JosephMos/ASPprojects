function setup() {
  createCanvas(400, 400);
}

function draw() {
  background(255);
  flower(xLocation, yLocation, 25, 200);
  flower(xLocation+80, yLocation-25, 25, 200);
  bounceX();
  bounceY();
}

function flower(flowerX, flowerY, size, g) {
  push();
  noStroke();
  fill(235, g, 52)
  ellipse(flowerX-size, flowerY, 2*size, size);
  ellipse(flowerX+size, flowerY, 2*size, size);
  ellipse(flowerX, flowerY-size, size, 2*size);
  ellipse(flowerX, flowerY+size, size, 2*size);
  fill(255, 255, 255);
  ellipse(flowerX, flowerY, size/2, size/2);
  pop();
}

var offsetX = 5;
var offsetY = 1;
var xLocation = 0;
var yLocation = 0;

function bounceX(){
  xLocation = xLocation + offsetX;
  //print(xLocation);
  if(xLocation > width || xLocation < 0){
    offsetX = -1 * offsetX;
  }
}

function bounceY(){
  yLocation = yLocation + offsetY;
  offsetY+=0.3;
  print(yLocation);
  if(yLocation > height || yLocation < 0){
    yLocation = 0;
    offsetY = 0;
  }
}
