<?php
	session_start();

?>


<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AEMS</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<!--<div id="leftpart">
    </div>-->
    
    
		<div id="header"></div>
    	<div id="navmenu">
        <?php	
            include 'header.php';
         ?>   
        </div>
    	<div id="bodypart">
        	<div id="leftbody">
            
            </div>
            
            <div id="slideshow">
            
            	<ul class="slides">
    				<li><canvas style="display:none"></canvas><img src="img/photos/1.jpg" width="95%" height="100%" alt="Marsa Alam underawter close up" /></li>
        			<li><canvas style="display:none"></canvas><img src="img/photos/2.jpg" width="95%" height="100%" alt="Turrimetta Beach - Dawn" /></li>
        			<li><img src="img/photos/3.jpg" width="125%" height="100%" alt="Power Station" /></li>
        			<li><img src="img/photos/4.jpg" width="95%" height="100%" alt="Colors of Nature" /></li>
    			</ul>

    			<span class="arrow previous"></span>
    			<span class="arrow next"></span>
                
            	
            </div>
            <div id="rightbody">
            	<!--<p align="right">
                <br />
            	<input hspace="50px" type="text" placeholder="Write Search Text" id="search" />
                <input type="button" value="Search"/>
            	</p>
                <h2 align="right" style="color:#3366FF">Recent</h2>-->
            </div>
        </div>
    	<div id="footer">
        <?php	
            include 'footer.php';
         ?>
        </div>

</body>

</html>