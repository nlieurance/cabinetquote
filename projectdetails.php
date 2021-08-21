<?php 
include('header.php');
require('../connect_db.php');

echo '<h1>Project Details</h1>';

$project = "SELECT * FROM projects WHERE id=1";

$d = mysqli_query($dbc,$project);

while($row = mysqli_fetch_array($d, MYSQLI_ASSOC)){
	echo '<div class="results_box">' . 
	'<img src=' .$row['samplephoto'] . '>' . 
	'<ul>' . '<li>' . 'Project Title: ' . $row['title'] .  '</li>' 
	. '<li>' . 'Budget: $' . $row['budget'] . '</li>' 
	. '<li>' . 'Timeframe: ' . $row['timeframe'] . ' months </li>' 
	. '<li>' . 'Project Square Footage: ' . $row['sqft'] . '</li>'
	. '<a href="#"><div class="view_project">Bid on Project</div></a>' . '</div>';
}