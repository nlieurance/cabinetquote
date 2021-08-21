<?php 


require('../connect_db.php');

$z = mysqli_query($dbc,"INSERT INTO projects (title, budget, timeframe, sqft) VALUES ('$_POST[title]','$_POST[budget]','$_POST[timeframe]','$_POST[sqft]')");

mysqli_close($dbc);

header('location:index.php');



?>

