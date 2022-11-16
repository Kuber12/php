<?php
$conn = mysqli_connect("localhost","root","","college");
$roll = $_GET['roll_no'];

//select query to find the id
$sql="delete from students where roll_no=$roll";
mysqli_query($conn,$sql);
?>