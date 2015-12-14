<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MEGA - Makers of Engaging Games and Animation</title>  
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body id="custom">
    <script src="phaser.min.js"></script>
    <div class="solidBG">
    <?php
            include 'header.html';
        ?>
    
    <div class="home_content">
        <div id="body">
            <!--<canvas id="canvas" width="1024px" height="400px">Image Slide Show will be here!</canvas>-->
        </div>
        <div class="other_content">
           <!-- <br><br> More content here <br><br><br> -->
            <a href="http://programwithnick.com/students/gardei/MEGA-Website/phpBB3/viewforum.php?f=3" class="left_col">
            <div >
                <h1>News</h1>
                <p>Get The Latest MEGA News Here!</p>
            </div>
                
            </a>
            <a href="http://programwithnick.com/students/gardei/MEGA-Website/phpBB3/viewforum.php?f=5" id="right_col">
            <div>
                <h1>DAGD Tutorials</h1>
                <p>Wondering How To Do Something? Check Here!</p>
            </div>
            </a>
            <a href="http://programwithnick.com/students/gardei/MEGA-Website/phpBB3/index.php" class="left_col">
            <div>
                <h1>Forums</h1>
                <p>Communicate With Your Fellow Classmates Here!</p>
            </div>
            </a>
            <a href="http://programwithnick.com/students/gardei/MEGA-Website/phpBB3/viewforum.php?f=8" id="right_col">
            <div>
                <h1>Arcade</h1>
                <p>Play Games Made By DAGD Students Here!</p>
            </div>
            </a>
        </div>
        
    </div>

    <?php

        include 'footer.html';
    ?>
    </div>
    <!-- 
    <script>
        //Following code adjusts the size of the canvas dynamically to fit the width of any screen.
        var canvas = document.querySelector("canvas");
        fitToContainer(canvas);
        
        function fitToContainer(canvas){
            
            canvas.style.width="100%";
            canvas.style.height="400px";
            
            canvas.width=canvas.offsetWidth;
            canvas.height=canvas.offsetHeight;
        }
    
    </script>
-->
    <script src="scroll_canvas.js"></script>

</body>
</html>