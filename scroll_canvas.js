console.log("in");
(function(){

    
    var arrowLeft;
    var arrowRight;
    
    var imgTemp;
    var img = [];

    
    var wHalf = 0;
    var hHalf = 0;
    
    var game = new Phaser.Game(1024, 400, Phaser.AUTO, "body"); 
    
    var movecount = 0;
    
    var main = function(){
            
            this.preload = function(){
                game.load.image("one", "imgs/slides/0.png");
                game.load.image("two", "imgs/slides/3.png");
                game.load.image("three", "imgs/slides/2.png");
                game.load.image("arrow", "imgs/arrow.png");
            };
            this.create = function(){
                
                wHalf = game.width/2;
                hHalf = game.height/2;
                
                
                imgTemp = game.add.sprite(wHalf,hHalf, 'one');
                imgTemp.anchor = new PIXI.Point(.5, .5);
                
                if(imgTemp.height > game.height)
                {
                    var a = game.height/ imgTemp.height;
                    imgTemp.scale.setTo(a,a);
                }
                else if(imgTemp.width > game.width)
                {
                    var a = game.width/ imgTemp.width;
                    imgTemp.scale.setTo(a,a);
                }
                
                img.push(imgTemp);
                
                imgTemp = game.add.sprite(wHalf + game.width,hHalf, 'two');
                //imgTemp.x += imgTemp.width/2;
                imgTemp.anchor = new PIXI.Point(.5, .5);
                
                if(imgTemp.height > game.height)
                {
                    var a = game.height/ imgTemp.height;
                    imgTemp.scale.setTo(a,a);
                }
                else if(imgTemp.width > game.width)
                {
                    var a = game.width/ imgTemp.width;
                    imgTemp.scale.setTo(a,a);
                }
                
                
                
                img.push(imgTemp);
                
                imgTemp = game.add.sprite(wHalf + game.width * 2,hHalf, 'three');
                imgTemp.anchor = new PIXI.Point(.5, .5);
                if(imgTemp.height > game.height)
                {
                    var a = game.height/ imgTemp.height;
                    imgTemp.scale.setTo(a,a);
                }
                else if(imgTemp.width > game.width)
                {
                    var a = game.width/ imgTemp.width;
                    imgTemp.scale.setTo(a,a);
                }
                
                img.push(imgTemp);
                
                
                
                arrowLeft = game.add.button(40, 200, 'arrow', actionOnClick, this, 2, 1, 0);
                arrowLeft.name = "left";
                arrowLeft.anchor = new PIXI.Point(.5, .5);
                arrowLeft.alpha = 0;
                
                arrowLeft.onInputOver.add(over, this);
                arrowLeft.onInputOut.add(out, this);
                arrowLeft.onInputDown.add(down, this);
                arrowLeft.onInputUp.add(up, this);
                
                
                arrowRight = game.add.button(game.width -39, 200, 'arrow', actionOnClick, this, 2, 1, 0);
                arrowRight.name = "right";
                arrowRight.anchor = new PIXI.Point(.5, .5);
                arrowRight.scale.x = -1;
                arrowRight.alpha = 0;
                
                arrowRight.onInputOver.add(over, this);
                arrowRight.onInputOut.add(out, this);
                arrowRight.onInputDown.add(down, this);
                arrowRight.onInputUp.add(up, this);
                
                
                
                
                
                checkRight();
                
                //console.log(game.canvas);
                game.canvas.addEventListener("mouseout", gone, true);
                
            };
            this.update = function(){
                
                console.log("one: " + img[0].x + " :: Two: " + img[1].x + " :: Thr: " + img[2].x);
                if(movecount > 0)
                {
                    movecount -= 64;
                    for(var i = img.length - 1; i >= 0; i--)
                    {
                        img[i].x -= 64;
                    }
                    
                    if (movecount == 0) 
                    {
                        checkLeft();
                    }
                }
                else if(movecount < 0)
                {
                    movecount += 64;
                    for(var i = img.length - 1; i >= 0; i--)
                    {
                        img[i].x += 64;
                    }
                    
                    if (movecount == 0) 
                    {
                        checkRight();
                    }
            
                }
                

                
            };
            this.render = function(){
                    
                    //game.debug.geom(healthBar,'#db2121');
                    
            };
                                   
        }
    
    game.state.add("Main", main);
    game.state.start("Main");
    
     function actionOnClick(button){
            console.log("lol clicked");
         
            if(movecount == 0)
            { 
                
            if(button.name == "left")
            {
                movecount = 1024;
            }
            else if(button.name == "right")
            {
                movecount = -1024;
            }
            }
        }
    
    function up() {
            console.log('button up', arguments);

            
        }
        function down() {
            console.log('button down', arguments);

        }
        function over(button) {
            console.log('button over');
            button.alpha = 1;
        }

        function out(button) {
            console.log('button out');
            button.alpha = 0;
        }
        
    function gone(){
        console.log("lefetedondndand");
        arrowLeft.alpha = 0;
        arrowRight.alpha = 0;
    }
    
    function checkRight(){
        
        var lastIndex = 0;
        var farRight = 0;         
                
        for(var i = 0; i < img.length; i++)
        { 
            if(img[i].x > farRight)
            {
                farRight = img[i].x;
                lastIndex = i;
            }
        }
        
        img[lastIndex].x = wHalf - game.width;
    }
    function checkLeft(){
        
        var lastIndex = 0;
        var farLeft = 0;         
                
        for(var i = 0; i < img.length; i++)
        { 
            if(img[i].x < farLeft)
            {
                farLeft = img[i].x;
                lastIndex = i;
            }
        }
        
        img[lastIndex].x = wHalf + game.width;
    }    
})();

/*
var canvas = document.querySelector("canvas");

var graphics = canvas.getContext("2d");
    
var requestAnimFrame = (function(){
        // return must be on the same line at the data
    return window.requestAnimationFrame || 
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        function(f){
        setTimeout(f, 1000/60);
    };
})();

fitToContainer(canvas);

var mouse = {x:0, y:0};
var onCanvas  = false;
var bounds = canvas.getBoundingClientRect();
var slideImages = [];


var temp;
var slideNum = 0;
var slideNumMax = 0;

// need to change this to be more dynamic
for(var i = 0; i <= 2; i++)
{
    
    temp = new Sprite("imgs/slides/"+i+".png");
    temp.x += canvas.width * i * 2;
    slideImages.push(temp);
    slideNumMax = slideImages.length - 1;
}



var hor = 60;

var btn1 = new button(0, 0, 0, hor, canvas.height, -1, -canvas.width/2 + 30, "imgs/arrow2.png");
var btn2 = new button(1, canvas.width - hor, 0, hor, canvas.height, 1, canvas.width/2 - 30, "imgs/arrow.png");

function fitToContainer(canvas){
            
    canvas.style.width="100%";
    canvas.style.height="400px";
            
    canvas.width=canvas.offsetWidth;
    canvas.height=canvas.offsetHeight;
}

function Sprite(url){
		this.image = new Image();
		this.x = 0;
		this.y = 0;
        this.anchorx = 0;
        this.anchory = 0;
        this.angle = 0;
		this.scale = 1;
		this.hasLoaded = false;
		
		var me = this;
		
		this.image.onload = function(){
			me.anchorx = this.width/2 - canvas.width/2;
			me.anchory = this.height/2 - canvas.height/2;
			me.hasLoaded = true;
		}
		this.image.src = url;
		
		this.draw = function(g){
			if(!this.hasLoaded) return;
			
			g.save();
			
			g.translate(this.x, this.y);
            g.rotate(this.angle);
			g.scale(this.scale, this.scale);
			g.drawImage(this.image, -this.anchorx, - this.anchory);
            
			g.restore();
		};
	}


   function button(id, x, y, w, h, scale, x2, url){
        var obj = new Sprite(url);
        this.id = id;
		obj.x = x2;
		obj.y = 0;
        obj.h = h;
        obj.w = w;
        obj.scale = 1;
        obj.angle = 0;
        this.over = false;
        obj.dead = false;
        this.alpha = .05;
       
		
        // the update logic for this object
        // dt: the delta time of this frame
        // retun: null
		this.draw = function(g){
			g.save();
            
            if(this.over === false && this.alpha > .05){
                
                this.alpha -= .05;
            }
            else if(this.over === true && this.alpha < 1){
                this.alpha += .05;
            }
            
            g.globalAlpha = this.alpha;
			g.fillStyle = "#CCC";
            g.fillRect(x, y, w, h);
            
            obj.draw(g);
            
			g.restore();

		};
        
        this.update = function(dt){
			
            if(onCanvas === true){
                if(this.id === 0 && mouse.x > 0 && mouse.x < 60){
                    this.over = true;
                }
                else if(this.id === 1 && mouse.x > canvas.width - 60 && mouse.x < canvas.width){
                    this.over = true;
                }
                else{
                    this.over = false;
                }
            }
            else{
                this.over = false;
            }
		};
       
        this.clicked = function(){
            
            if(this.id == 0){
                console.log("left");
                slideImages[slideNum].x += canvas.width*4;
                
                if(slideNum > 0)
                {
                    slideNum--;
                    slideImages[slideNum].x = 0;
                }
                else
                {
                    slideNum = slideNumMax;
                    slideImages[slideNum].x = 0;
                }

            }
            else if(this.id == 1){
                console.log("right");
                slideImages[slideNum].x += canvas.width * 2;
                if(slideNum < slideNumMax)
                {
                    slideNum++;
                    slideImages[slideNum].x = 0;
                }
                else
                {
                    slideNum = 0;
                    slideImages[slideNum].x = 0;
                }
                
            }
            
        }
		
	}



/* -------------------General Functions------------------------*/
	/*
	// Track the mouse cursor
	canvas.addEventListener("mousemove", function(e){ 
        bounds = canvas.getBoundingClientRect();
        mouse.x = e.clientX - bounds.left;
        mouse.y = e.clientY - bounds.top;

    });
    canvas.addEventListener("mouseenter", function(e){ 
        onCanvas = true;

    });
    canvas.addEventListener("mouseleave", function(e){ 
        onCanvas = false;

    });
	canvas.addEventListener("mousedown", function(e){
		
		isMouseDown = true;
	});
	canvas.addEventListener("mouseup", function(e){
		
		isMouseDown = false;
	});
	canvas.addEventListener("click", function(e){
        console.log(btn1.over);
        if(btn1.over === true)
        {
            btn1.clicked();
        }
        
        if(btn2.over === true)
        {
            btn2.clicked();
        }
	});
	
	/* -------------------Game Loop ----------------------*/


/*
var ptime = 0;
	function gameloop(time){ 
        if(isNaN(time)) time = 0;
        
        var dt = (time - ptime) / 1000;
        ptime = time;
        
        update(dt);
        draw();
        requestAnimFrame(gameloop);
    }
	function update(dt){
		
        btn1.update(dt);
        btn2.update(dt);
		/*
        delayUntilNextAsteroid -= dt;
        
        if(delayUntilNextAsteroid <= 0){
            asteroids.push(new Asteroid());
            delayUntilNextAsteroid = .5;
        }
        
        for(var i = asteroids.length - 1; i >= 0; i--){
            asteroids[i].update();
            if(asteroids[i].dead === true){
                asteroids.splice(i, 1);
            }
        }
		*/
		
		
        //console.clear();
        //console.log(asteroids.length);
		//console.log("X: " + mouse.x + " :: Y: " + mouse.y);

/*
    }
    function draw(){
        graphics.clearRect(0,0, canvas.width, canvas.height);
        
        for(var i = 0; i <= slideNumMax; i++)
        {
		  slideImages[i].draw(graphics);
        }
        btn1.draw(graphics);
        btn2.draw(graphics);
    }
    gameloop();
    
    */