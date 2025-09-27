const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

// Player image (replace with your own URL if you like)
const playerImg = new Image();
playerImg.src = "img/4c248734-ab80-4c88-b0e8-bf95272c2013 (1).png";

let player;
let obstacles;
let frame;
let score;
let gameOver;
let nextObstacle;
let lastObstacleFrame;
var speed = 5;

const gravity = 0.6;
const minGap = 400 * (speed / 5); // minimum frames between obstacles
const maxGap = 800 * (speed / 5); // maximum frames between obstacles

function resetGame() {
  player = {
    x: 50,
    y: 150,
    width: 70,
    height: 70,
    dy: 0,
    jumping: false,
  };
  obstacles = [];
  frame = 0;
  score = 0;
  gameOver = false;
  nextObstacle = getRandomInterval();
  lastObstacleFrame = 0;
  loop();
}

function getRandomInterval() {
  // convert desired pixel gap into frames based on speed
  return Math.floor((Math.random() * (maxGap - minGap) + minGap) / speed);
}

function drawPlayer() {
  // How big you want the image to look
  const scale = 2; // 2 = double size
  const drawWidth = player.width * scale;
  const drawHeight = player.height * scale;

  // Center the image on the collision box
  const drawX = player.x - (drawWidth - player.width) / 2;
  const drawY = player.y - (drawHeight - player.height) / 2;

  ctx.drawImage(playerImg, drawX, drawY, drawWidth, drawHeight);
}

function drawObstacles() {
  ctx.fillStyle = "red";
  obstacles.forEach((ob) => {
    ctx.fillRect(ob.x, ob.y, ob.w, ob.h);
  });
}

function updatePlayer() {
  player.y += player.dy;
  if (player.y + player.height < canvas.height) {
    player.dy += gravity;
  } else {
    player.y = canvas.height - player.height;
    player.dy = 0;
    player.jumping = false;
  }
}

function updateObstacles() {
  if (frame - lastObstacleFrame >= nextObstacle) {
    let h = Math.random() * 30 + 20;
    obstacles.push({
      x: canvas.width,
      y: canvas.height - h,
      w: 20,
      h: h,
    });
    lastObstacleFrame = frame;
    nextObstacle = getRandomInterval();
  }
  obstacles.forEach((ob) => (ob.x -= speed));
  obstacles = obstacles.filter((ob) => ob.x + ob.w > 0);
  speed += 0.003;
}

function detectCollision() {
  for (let ob of obstacles) {
    if (
      player.x < ob.x + ob.w &&
      player.x + player.width > ob.x &&
      player.y < ob.y + ob.h &&
      player.y + player.height > ob.y
    ) {
      gameOver = true;
    }
  }
}

function drawScore() {
  ctx.fillStyle = "black";
  ctx.font = "16px Arial";
  ctx.fillText("Score: " + score, 10, 20);
}

function loop() {
  if (gameOver) {
    ctx.fillStyle = "black";
    ctx.font = "30px Arial";
    ctx.fillText("GAME OVER!", canvas.width / 2 - 170, canvas.height / 2);
    speed = 5;
    return;
  }

  ctx.clearRect(0, 0, canvas.width, canvas.height);

  drawPlayer();
  drawObstacles();
  drawScore();

  updatePlayer();
  updateObstacles();
  detectCollision();

  frame++;
  if (frame % 10 === 0) score++;

  requestAnimationFrame(loop);
}

document.addEventListener("keydown", (e) => {
  if (e.code === "Space") {
    if (gameOver) {
      resetGame();
    } else if (!player.jumping) {
      player.dy = -12;
      player.jumping = true;
    }
  }
});

playerImg.onload = () => resetGame();
