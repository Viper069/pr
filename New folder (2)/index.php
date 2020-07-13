<?php
$con= mysqli_connect("localhost","root","","practice");
$sql = "SELECT * FROM employee";
$result = mysqli_query($con, $sql);
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
    <a href="insert.php" class="btn btn-success">Add employee</a>
  </div>  
  <div class="col-md-8"> 

<H1>Employee list</H1>

<table class="table table-bordered">
  <thead>
    <tr bgcolor="aliceblue">
      <th>SL</th>
      <th>Name</th>
      <th>Salary</th>
      <th>Action</th>
    </tr>
  </thead>
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
    ?>
  <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['Name'];  ?></td>
    <td><?php echo $row['Salary']; ?></td>
    <td>
      <a class="btn btn-info btn-sm" href="show.php?ID=<?php echo $row['ID']; ?>">View</a>
      <a class="btn btn-info btn-sm" href="edit.php?ID=<?php echo $row['ID']; ?>">Edit</a>
      <a class="btn btn-info btn-sm" href="delete.php?ID=<?php echo $row['ID']; ?>" onclick="return confirm('Are you really want delte this data')" >Delete</a>
    </td>
  </tr>
<?php }   ?>
</table>

  </div>
  </div>
</div>





      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>