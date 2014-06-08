

var ParticleEngine = (function() {

    var screenWidth;
    var screenHeight;
    var canvas;
    var ctx;

    var acceleration;
    var particles;
    var particleSize;
    var numParticlesToAddAtOnce;
    var emitLocation;
    var velocityRange;

    var runPE = function()
    {
        ctx.fillStyle = "#fff";
        ctx.fillRect(0, 0, screenWidth, screenHeight);
        for(var p=0; p<numParticlesToAddAtOnce; p++)
        {
            addParticle();
        }
        
        for(var i=0; i<particles.length; i++)
        {
            var particle = particles[i];
            drawParticle(particle);
            updateParticle(particle, i);
        }

    };

    var addParticle = function(particle)
    {
        var particle = createParticle();
        particles.push(particle);
    };

    var createParticle = function()
    {
        var vRangeX = velocityRange["xRange"];
        var vRangeY = velocityRange["yRange"];
        var r = Math.random()*255>>0;
        var g = Math.random()*255>>0;
        var b = Math.random()*255>>0;
        
	
        var particle = {
            color : "rgba("+r+", "+g+", "+b+", 0.8)",
            location: {
                x: emitLocation["x"]-25+Math.random()*50,
                y: emitLocation["y"]-25+Math.random()*50
            },
            velocity: {
                x:  vRangeX[0]+(Math.random()*vRangeX[1]*2),
                y:  vRangeY[0]+(Math.random()*vRangeY[1]*2)
            }
        }
        
        return particle;
    };

    var updateParticle = function(particle, index)
    {
        particle.location["x"]+=particle.velocity["x"];
        particle.location["y"]+=particle.velocity["y"];
        particle.velocity["x"]+=acceleration["x"];
        particle.velocity["y"]+=acceleration["y"];

        if(particle.location["x"] > screenWidth+particleSize || particle.location["y"]+particleSize > screenHeight)
        {
            particles.splice(index, 1);
        }

        return { x: particle.location["x"], y: particle.location["y"] };
    };

    var drawParticle = function(particle)
    {
        ctx.fillStyle = particle.color;
        ctx.beginPath();
        ctx.arc(particle.location["x"], particle.location["y"], particleSize, Math.PI*2, 0, true);
        ctx.closePath();
        ctx.fill();
    };
    
    function onMove(e){
        acceleration.y=(screenHeight/2-e.clientY)/screenHeight;
        acceleration.x=(screenWidth/2-e.clientX)/screenWidth;
    }
  
  function onClick(e){
    emitLocation = {
      x: e.clientX,
      y: e.clientY
    };
    acceleration={
      x:-acceleration.x,
      y:-acceleration.y
    }; 
  } 
  
  
  function ranPos(){
    emitLocation = {
      x: Math.random()*screenWidth,
      y: Math.random()*screenHeight
    };
    acceleration={
      x:Math.random()*2* emitLocation.x>screenWidth/2 ? -1 : 1,
      y:Math.random()*2* emitLocation.y>screenHeight/2 ? 1 : -1
    }; 
  }

    return {

        init: function()
        {
            canvas = document.getElementById("mainCanvas");
            ctx = canvas.getContext("2d");
          
            canvas.width = self.innerWidth;
            canvas.height = self.innerHeight;
            ctx.width=screenWidth;
            ctx.height=screenHeight;
            screenWidth = canvas.width;
            screenHeight = canvas.height;
            
            canvas.addEventListener('mousemove', onMove);
            canvas.addEventListener('click', onClick);

            emitLocation = { x: screenWidth/2, y: screenHeight/2 };
            acceleration = { x: 0, y: 0.15 };
            velocityRange = { xRange: [-1, 1], yRange: [-1, 1] };
            particleSize = 5;
            numParticlesToAddAtOnce = 3;
            particles = new Array();
        },

        run: function()
        {
            setInterval(runPE, 30);
            setInterval(ranPos, 4000);
        }

    }

})();

setTimeout(function(){
  ParticleEngine.init();
  ParticleEngine.run();
},1000);