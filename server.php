<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";

$conn = new mysqli("localhost","root","","practice");
{
	if($conn->connect_error){
		echo "not";
	}
	else
	{
		echo "Yes";
	}
}

if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$address = $_POST['address'];

	$sql = "INSERT INTO irina(name, address)
					 Values('$name','$address')";

	$query = mysqli_query($conn, $sql);
	header('location: practice1.php');
}

?>