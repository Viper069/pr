<?php
$ID=$_GET['ID'];
$con= mysqli_connect("localhost","root","","practice");

  $sql = "DELETE FROM employee WHERE ID='$ID'";

  $result = mysqli_query($con,$sql);
  header('location: index.php');

?>