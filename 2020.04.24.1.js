function setup() {
  createCanvas(700, 600);
  background(41, 207, 88);
  noStroke();
  //flower below
  fill(255, 50, 50);
  fieldOfFlowers();
}

function draw() {

}

function flower(flowerX, flowerY, size, g) {
  push();
  fill(235, g, 52)
  ellipse(flowerX-size, flowerY, 2*size, size);
  ellipse(flowerX+size, flowerY, 2*size, size);
  ellipse(flowerX, flowerY-size, size, 2*size);
  ellipse(flowerX, flowerY+size, size, 2*size);
  fill(255, 255, 255);
  ellipse(flowerX, flowerY, size/2, size/2);
  pop();
}


function fieldOfFlowers() {
  for (let i = 0; i < 50; i++) {
    for (let i = 0; i < 10; i++) {
      let fX = random(700);
      if (i < 5) {
       flower(fX, i*(70+i*2), (i*(70+i*2))/20, random(200));
       fX = random(700);
       flower(fX, i*(70-i*2), (i*(70-i*2))/20, random(200));
       fX = random(700);
       flower(fX, i*70, (i*70)/20, random(200));
      } else {
       flower(fX, i*70, (i*70)/20, random(200));
      }
    }
    //flower(fX, fY, (fY)/20, random(200));
  }

}
