<?php
$complaints = file_get_contents("complaints.txt");
$complaint_arr = array_filter(explode("\n", $complaints));
?>

<h3>
	Tej's Complaints
</h3>

<table>
	<tr>
		<td>Complaint Text</td>
		<td>Category</td>
		<td>Tej Rage Intensity</td>
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