<?php
$complaints = file_get_contents("complaints.txt");
$complaint_arr = array_reverse(array_filter(explode("\n", $complaints)));
?>

<header>
	<link rel="stylesheet" type="text/css" href="css/viewcomplaints.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="http://listjs.com/no-cdn/list.js"></script>
	<script src="http://listjs.com/no-cdn/list.pagination.js"></script>
</header>

<div id="complaints-table">
	<table cellspacing="0">
		<thead>
			<tr title="Click to toggle sort">
				<th class="sort" data-sort="complaint">Complaint Text</th>
				<th class="sort" data-sort="category">Category</th>
				<th class="sort" data-sort="intensity">Tej Rage Intensity</th>
			</tr>
		</thead>
		<tbody class="list">
			<?php
			foreach($complaint_arr as $complaint) 
			{
				echo "<tr>";
				$complaint_data = explode("\t", $complaint);
				echo "<td class='complaint'>" . $complaint_data[0] . "</td>";
				echo "<td class='category'>" . $complaint_data[1] . "</td>";
				echo "<td class='intensity'>" . $complaint_data[2] . "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
		<caption id="navbar" align="bottom">
			<ul class="pagination"></ul>
			<input class="search" placeholder="Filter"/>
		</caption>
	</table>
	<script type="text/javascript">
		var options = {
			valueNames: ['complaint', 'category', 'intensity'],
			page: 8,
			plugins: [ListPagination({})]
		};

		var list = new List('complaints-table', options);
	</script>
</div>

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