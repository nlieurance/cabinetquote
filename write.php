<?php


$my_file = 'file.php';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = '<!DOCTYPE html><HTML><HEAD><TITLE>Projects</TITLE><link rel="stylesheet" type="text/css" href="cabinetquote.css"></HEAD>
<BODY>

<div id="logo"><h1>CabinetQuote.com</h1></div>

<div id="menu">
	<ul>
	<li>About</li>
	<li>Join</li>
	<li>Log in</li>
	<li>Blog</li>
	</ul>
</div>

<div class="page_intro">
	<h1>Free Quotes. No Hassles.</h1>
	<h2>Need new cabinets or countertops? Post a project and get free quotes. No one will contact you and we won\'t share your info. <a href="#">Learn more.</a></h2>

	
</div>

<div class="project_results"><h1>Projects...</h1>

	<div class="results_box">
		<!--div class="column_1"--><img src="kitchen.jpg" width="200px" /img><!--/div-->
		<!--div class="column_2"-->
			<ul>
				<li><b>Project Title:</b> Remodel my kitchen</li>
				<li><b>Estimated buget:</b> $4000</li>
				<li><b>Project Square Footage:</b> 120</li>
				<li><b>Timeframe:</b> 1-2 months</li>
				<a href="#"><div class="view_project">View project</div></a>
			</ul><!--/div>
			
		<!--/div-->
		
	</div>


	<div class="results_box">
		<!--div class="column_1"--><img src="modernkitchen.jpg" width="200px" img><!--/div-->
		<!--div class="column_2"-->
			<ul>
				<li><b>Project Title: Build kitchen cabinets</b></li>
				<li><b>Estimated buget:</b> $25000</li>
				<li><b>Project Square Footage:</b> 120</li>
				<li><b>Timeframe:</b> 1-2 months</li>
				<a href="#"><div class="view_project">View project</div></a>
			</ul></a><!--/div-->
			
		<!--/div-->
		


</div>







</BODY>
</HTML>';
fwrite($handle, $data);
?>