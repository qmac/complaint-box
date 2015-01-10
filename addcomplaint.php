<header>
	<link rel="stylesheet" type="text/css" href="styles/addcomplaint.css"/>
</header>

<form action="complain.php" method="POST">
	<div>
		<label>Complaint:</label>
		<textarea name="complaint" rows="5" cols="40"></textarea>
	</div>
	<div>
		<label>Category:</label>
		<select name="category">
			<option>Career</option>
			<option>College</option>			
			<option>Food</option>
			<option>Friends</option>
			<option>Movies</option>
			<option>Music</option>
			<option>Technology</option>
			<option>TV</option>
			<option selected="selected">Other</option>
		</select>
	</div>
	<div>
		<label>Tej Rage Intensity:</label>
		<input type="number" name="intensity" min="1" max="10"/>
	</div>
	<div>
		<label>Password:</label>
		<input type="password" name="password"/>
	</div>
	<div>
		<input type="submit" value="Submit"/>
	</div>
</form>
<p>
	<a href="./">
		Home
	</a>
</p>
<p>
	<a href="./viewcomplaints.php">
		View complaints
	</a>
</p>
