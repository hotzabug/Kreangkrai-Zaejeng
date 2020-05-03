
<?php 
            
$con= mysqli_connect("127.0.0.1:3307","root","root","pro") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
  date_default_timezone_set('Asia/Bangkok');
?>