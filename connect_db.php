<?php 
$dbc = 
mysqli_connect('localhost','root','','cabinetquote_db')
	OR die
	(mysqli_connect_error());

	mysqli_set_charset($dbc,'utf8');