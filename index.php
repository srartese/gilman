<!DOCTYPE html>
<html lang="en">

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<meta charset="utf-8" />
	<link rel="stylesheet" href="css/global.css" type="text/css" />
	
	<script src="parallax.js-1.4.2/parallax.min.js"></script>
	<script src="stellar.js"> </script>
	<script src="smoothscroll.js"> </script>


	<title> Sara Artese </title>
	<link rel="shortcut icon" href="media/tablogo.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script type="text/javascript">
"use strict";
		$(document).ready(function(){
			$(window).stellar();	
			
			 $(window).scroll(function(){
				 	
				 	if($(window).scrollTop() > $(window).height()/3.5){
					
					
	        		$(".startch1").css({"transition": "3.5s"}); 
	        		$(".startch1").css({"opacity" :".9"});
	        		
				 	$("section").css({"background-color":"rgba(0,66,82, 0.99)"});   
				 	$("section").css({"height":"50px"}); 
				 	$("nav").css({"transition": "top 0.3s ease"}); 
				 	$("nav").css({"top":"0"});  
				 	$("nav").css({"height":"40px"});
				 	$("#navigation").css({"marginTop":"15px"});
				 	document.getElementById("logo").src = "media/logosm.png";
				 	$("#logo").css({"marginTop":"5px"});
				 	$("#logo").css({"marginLeft":"30px"});
        		}
        		else if($(window).scrollTop() < $(window).height()){
	        		$("section").css({"background-color":"rgba(0,66,82,0.001)"});
	        			$("section").css({"height":"80px"}); 
	        			$("nav").css({"transition": "top 0.3s ease"}); 
						$("nav").css({"top":"10px"});  
						$("nav").css({"height":"60px"});
						$("#navigation").css({"marginTop":"25px"});
						document.getElementById("logo").src = "media/Logo.png";
						$("#logo").css({"marginTop":"10px"});
						$("#logo").css({"marginLeft":"20px"});
	        	}
    		})
    		
    		/* changing the image of the arrow 
    		$('.startch1').hover(function () {
			 	$(this).find("img").src = 'media/down.png';
    			}, function () {
				$(this).find("img").src = 'media/downh.png';
			});
*/
    		
		});
					
	</script>
</head>

<body>

	<div class="header" data-stellar-background-ratio="0.3">
		<?php include ("nav.php"); ?>
			<h1>Study Abroad</h1>
			<h2> RIT Croatia</h2>
	</div>

	<div class="container-fluid content">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
				<h3> Why? </h3>
				<p> A lot of people start college and hear "study abroad" within the first week. Your new friend plans to, your advisor tells you to, your parents did, or maybe there is a booth at the freshman fair. There are so many reasons to study abroad and through my three years I have heard more excuses not to.  It is common for people just to say "Oh, I'll travel on my own time when I graduate" and sadly they don't realize that takes more effort the longer you wait.  Now is the time and as cliche as that sounds it is beyond true.  You will probably never get the chance to keep doing what you are currently doing somewhere else in the world.  I lived 4 months in Croatia attending one of RIT's global campuses and I know that later in life I never would have choosen to just live there.  I took courses towards my degree and experienced a whole new culture.  I studied abroad because it's easy to get comfortable at school or at work and this was my way of reminding myself that the world holds a lot to understand, to explore.  If there is one answer to why you should study abroad its why not?</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
				<div id="imageGil"><img src="./media/logo_gilman.png" alt="gilman" id="gil"/> </div>
				<h3> How? </h3>
				<p> When I started at RIT I had no idea about any of the details that might occumany study abroad so I went to my advisor.  She was able to share her personal experience, point me to the Study Abroad office, set up meetings for me, and make sure my schedule was aligned just right.  There is a whole office dedicated to getting students off campus and in a culture to learn.  There are global ambasadors which are students who have already studied abroad and are there to answer any questions. Start by talking to your advisors and the global office they will help to find the right program to enroll in.</p>
				<br />
				<p>The biggest help aside from support from friends and family is help financially.  Personally studing abroad would not have been possible without scholarships.  The Benjamin A. Gilman International Scholarship help my trip be possible.  They focus on giving the opportunity to those who need financial help so that they may internationalize their outlook and better preparing them to thrive in the global economy. Gilman has contibuted to not only to my professional and educational career but so many others seeking undergraduate degrees. 
					<div id="imageGil"> Check them out! 
					<br />
					<a href="https://www.iie.org/Programs/Gilman-Scholarship-Program"> https://www.iie.org/Programs/Gilman-Scholarship-Program </a></div>
				</p>
		</div>
	</div>

		</div>

		<div class="videoArea">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ZhDSNL24g8o" frameborder="0" allowfullscreen"></iframe>
</div>			</div>
	<!-- /.container -->
		<footer>
				<p> Sara Artese &copy; 2017</p> 

			</footer>
</body>
</html>