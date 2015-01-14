<?php
$complaints = file_get_contents("complaints.txt");
$complaint_arr = array_filter(explode("\n", $complaints));
?>

<header>
	<link rel="stylesheet" type="text/css" href="css/viewcomplaints.css"/>
</header>

<table cellspacing="0">
	<tr>
		<th>Complaint Text</th>
		<th>Category</th>
		<th>Tej Rage Intensity</th>
	</tr>
	<?php
	foreach($complaint_arr as $complaint) 
	{
		echo "<tr>";
		$complaint_data = explode("\t", $complaint);
		foreach($complaint_data as $data) 
		{
			echo "<td>" . $data . "</td>";
		}
		echo "</tr>";
	}
	?>
</table>

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