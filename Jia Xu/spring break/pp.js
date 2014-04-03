var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

// Canvas dimensions
var W = canvas.width = document.body.offsetWidth;
var H = canvas.height = document.body.clientHeight;

// Parameters
var particleCount = 15;
var particleRadius = 4;
var vMin = 0.0001;
var vMax = 3;
var updateInterval = 1;
var reduceSpeedOnImpact = false;


// Create array of particles
var particles = [];
for (var i = 0; i < particleCount; i++)
{
  // Adds particle to array
  particles.push(new createParticle());
}

// Call init function
init();

// Intilization function
function init()
{
  
  // Make canvas fullscreen
  setFullscreen();
  
  // Particle coordinates
  var x = 100; var y = 100;
  
  // Animate particle
  function draw()
  {
    // Paint canvas black. It is placed within draw() to remove the trail of particles.
    ctx.fillStyle = "black";
    ctx.fillRect(0, 0, W, H);
    
    // Draw particle array
    for (t = 0; t < particles.length; t++)
    {
      // Create reference to current particle
      var p = particles[t];
      var d = new Date();
      var n=d.getMilliseconds();
      var noiseFloat = noise.perlin3(p.x*0.0025, p.y*0.0025, n*0.00000001);
      var noiseVecX;
      var noiseVecY;
      noiseVecX = Math.cos(((noiseFloat -0.3) * Math.PI*2) * 10);
      noiseVecY = Math.sin(((noiseFloat - 0.3) * Math.PI*2) * 10);
      
      // Draw current particle
      ctx.beginPath();
      ctx.fillStyle = "white";
      ctx.arc(p.x, p.y, particleRadius, Math.PI*2, false);
      ctx.fill();
      
      // Position particle according to velocity
      p.vx+=noiseVecX;
      p.vy+=noiseVecY;

      p.x += p.vx;
      p.y += p.vy;
      
       // Contain particle inside canvas
      if (p.x > W) p.vx *= -1;
      if (p.x < 0) p.vx *= -1;
      if (p.y > H) p.vy *= -1;
      if (p.y < 0) p.vy *= -1;
      
      // Recover lost particles
      if (p.x > W + particleRadius) p.x = W - particleRadius;
      if (p.x < 0 - particleRadius) p.x = particleRadius;
      if (p.y > H + particleRadius) p.y = H - particleRadius;
      if (p.y < 0 - particleRadius) p.y = particleRadius;
      
      // Canvas collision detection
      if( (p.x > W) || (p.x < 0) || (p.y > H) || (p.y < 0) )
      {
        console.log("collision detected!");
      }
    }
      
  }
  
  // Loop particle animation
  setInterval(draw, updateInterval);
  
} // initialization function

// Create particle function
function createParticle()
{
  // Random position on the canvas
  this.x = Math.random()*W;
  this.y = Math.random()*H;
  // Random velocity
  this.vx = Math.random()*vMax-vMin;
  this.vy = Math.random()*vMax-vMin;
}

// Fullscreen canvas function
function setFullscreen()
{
  W = canvas.width = document.body.offsetWidth;
  H = canvas.height = document.body.clientHeight;
}

// Event handlers
window.onresize = setFullscreen;
//document.getElementById('myCanvas').onclick = init;