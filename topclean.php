<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

	<head profile="http://gmpg.org/xfn/11">

	<title>Supersized - Full Screen Background/Slideshow jQuery Plugin</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
	<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
	<script src="http://dev.jquery.com/view/tags/ui/latest/ui/effects.core.js"></script>
	<script src="http://dev.jquery.com/view/tags/ui/latest/ui/effects.slide.js"></script>
	<script type="text/javascript" src="supersized.2.0.js"></script>
	<script type="text/javascript">  
		$(function(){
			$.fn.supersized.options = {  
				startwidth: 640,  
				startheight: 480,
				vertical_center: 1,
				slideshow: 1,
				navigation: 0,
				transition: 2, //0-None, 1-Fade, 2-slide top, 3-slide right, 4-slide bottom, 5-slide left
				pause_hover: 0,
				slide_counter: 1,
				slide_captions: 1,
				slide_interval: 3000  
			};
	        $('#supersize').supersized(); 
	    });
	</script>
	
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		a{
			color:#8FC2FF;
			text-decoration: none;
			outline: none;
		}
		a:hover{
			text-decoration: underline;
		}
		img{
			border:none;
		}
		body {
			overflow:hidden;/*Needed to eliminate scrollbars*/
			background:#000;
		}
		/*Supersize Plugin Styles*/
		#loading {
			position: absolute;
			top: 49.5%; 
			left: 49.5%;
			z-index: 3;
			width: 24px; 
			height: 24px;
			text-indent: -999em;
			background-image: url(images/progress.gif);
		}
		#supersize{
			position:fixed;
		}
		#supersize img, #supersize a{
			height:100%;
			width:100%;
			position:absolute;
			z-index: 0;
		}
		#supersize .prevslide, #supersize .prevslide img{
			z-index: 1;
		}
		#supersize .activeslide, #supersize .activeslide img{
			z-index: 2;
		}
		
		
	</style>
</head>

<body>

<!--Loading display while images load-->
<div id="loading">&nbsp;</div>

<!--Slides-->
<div id="supersize">
	<a href="http://interfacelift.com/wallpaper_beta/details/1819/bird_on_a_branch.html"><img src="images/bird.jpg" title="Bird On A Branch"/></a>
	<a href="http://interfacelift.com/wallpaper_beta/details/988/paradise_lost.html"><img src="images/paradise.jpg" title="Paradise Lost"/></a>
	<a href="http://interfacelift.com/wallpaper_beta/details/1864/morelia_viridis.html"><img src="images/snake.jpg" title="Morelia Viridis"/></a>
</div>

</body>
</html>
