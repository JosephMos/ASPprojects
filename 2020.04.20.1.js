function setup() {
  createCanvas(600, 600);
}

function draw() {
  //background(220);
  fill (Math.floor(Math.random() * 256), Math.floor(Math.random() * 256), Math.floor(Math.random() * 256));
  ellipse (mouseX, mouseY, 20, 20);
  ellipse (mouseY, mouseX, 20, 20);
  ellipse (600 - mouseY, 600 - mouseX, 20, 20);
  ellipse (600 - mouseX, 600 - mouseY, 20, 20);
  if (mouseIsPressed) {
    fill(255);
  } else {
    fill(0);
  }
  ellipse((mouseX + mouseY)/2, (mouseY + mouseX)/2, 20, 20);
  ellipse(600 - (mouseX + mouseY)/2, 600 - (mouseY + mouseX)/2, 20, 20);
}
