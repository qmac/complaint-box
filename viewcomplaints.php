<?php
$complaints = file_get_contents("complaints.txt");
$complaint_arr = array_filter(explode("\n", $complaints));
?>

<ul>
<?php
foreach($complaint_arr as $complaint) { 
echo "<li>" . $complaint . "</li>"; 
}
?> 
</ul>
<p>
	<a href="./">
		Home
	</a>
</p>
<p>
	<a href="./addcomplaint.php">
		Add complaint
	</a>
</p>