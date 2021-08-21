<?php
include('header.php'); 
require('../connect_db.php')



?>

<div class="project_results"><h1>Post a Project...</h1>

<p>Use this form to post a project. You'll be able to see quotes from cabinetmakers as soon as they are posted, but no one will contact you.
	If and when you're ready to hire, just press the Contact button to get in touch with the cabinetmaker you want.</p>

<div class="project_form"><form action="post_action.php" method="POST" accept-charset="utf-8">
	<p>Project Title <input name="title" type="text" size="100"></p>
	<p>Estimated Budget (USD. No dollar sign. Ex: 4000) <input name="budget" type="text" size="10"></p> 
	<p>Timeframe (When you expect to hire) <select name="timeframe"><option value="one_month">Less than one month</option>
		<option value="1-2 Months">1-2 months</option>
		<option value="3-6 months">3-6 months</option>
		<option value"More than 6 months">More than 6 months</option>
	</select>
	<p>Project Square Footage (Multiply the room width by the room length.) <input name="sqft" type="text" size="5"></p>
	<p>Type of Work Needed: </p>
	<p><input type="checkbox" name="work_type" value="New Cabinets"> New Cabinets
	<input type="checkbox" name="work_type" value="New Countertops"> New Countertops
	<input type="checkbox" name="work_type" value="Refacing"> Refacing
	<input type="checkbox" name="work_type" value="New Doors"> New Doors
	<input type="checkbox" name="work_type" value="New Drawers"> New Drawers</p>
	<p>Project Description:</p>
	<p><textarea name="description" cols="90" rows="10"></textarea></p>
	<p><input type="submit" value="Submit"></p></form>
</div>

</div>
