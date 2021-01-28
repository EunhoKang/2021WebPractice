<!DOCTYPE html>
<html>
	<head>
		<title>Grade Store</title>
		<link href="http://selab.hanyang.ac.kr/courses/cse326/2015/problems/pResources/gradestore.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Grade Store</h1>

		<p>
			The rough economy, along with recent changes in Hanyang University, allow us to offer grades for money.  
			That's right! All you need to get a desired grade in various courses is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Buy your Grade today!</h2>
		
		<!-- create an HTML Form -->
		<form action="cheater.php" method="post">
			Name: <input type="text" name="name"/> ID: <input type="text" name="id"/><br>
			Course: <label>
				<input type="checkbox" name="cse326"/>CSE326 
				<input type="checkbox" name="cse107"/>CSE107 
				<input type="checkbox" name="cse607"/>CSE607 
				<input type="checkbox" name="cin870"/>CIN870
			</label><br>
			Grade: <select name="grade">
				<option selected="selected" value="A+">A+</option>
				<option value="A">A</option>
				<option value="B+">B+</option>
				<option value="B">B</option>
			  </select><br>
			
			Credit Card: <input type="text" name="card_number"/> 
			<input type="radio" name="card_type" value="Visa" checked="checked"/>Visa 
			<input type="radio" name="card_type" value="MasterCard"/>MasterCard
			  	<br>
			<div id="submitbutton">
				<!-- create submit button here -->
				<input type="submit" value="I am a giant cheater!" />
			</div>
		</form>
	</body>
</html>