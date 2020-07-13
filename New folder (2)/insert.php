
 <?php
$con= mysqli_connect("localhost","root","","practice");
if (isset($_POST['Submit'])) {
  $ID =$_POST['ID'];
  $Name=$_POST['Name'];
  $Salary=$_POST['Salary'];

  $sql = "INSERT INTO employee(ID,Name,Salary) VALUES('$ID','$Name', '$Salary')";

  $result = mysqli_query($con,$sql);
  header('location: index.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  

<div class="Container">
  <div class="row clearfix">
  <div class="col-md-2">
    <a href="index.php" class="btn btn-success">Back</a>
  </div>  
  <div class="col-md-8"> 

<H1>Employee Information</H1>
<form method="POST">
<table class="table">
	<tr>
		<th class="text-right">ID</th>
		<td><input type="Number" name="ID"></td>
	</tr>
	<tr>
		<th class="text-right">Name</th>
		<td><input type="text" name="Name"></td>
	</tr>
	<tr>
		<th class="text-right">Salary</th>
		<td> <input type="Number" name="Salary"> </td>
	</tr>
  <th></th>
  <td><input type="Submit" name="Submit"></td>
</table>
  </div>
  </div>
</div>
</form>




      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 