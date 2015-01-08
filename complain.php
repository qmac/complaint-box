<?php
include("credentials.php");

$complaint = $_POST["complaint"] . "\n";
$password = $_POST["password"];
if($password == PASSWORD)
{
	file_put_contents("complaints.txt", $complaint, FILE_APPEND);
}
header("Location: viewcomplaints.php");
die();
?>
