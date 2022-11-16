<?php
$conn = mysqli_connect("localhost","root","","college");

if($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<table border="1">
    <tr>
        <th>Roll no</th>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
<?php

    while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>".$row["roll_no"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["address"]."</td>
        <td>".$row["age"]."</td>
        <td><a href='delete.php?roll_no=".$row["roll_no"]."'>delete</a></td>
        <td><a href='edit.php?roll_no=".$row["roll_no"]."'>edit</a></td>
      </tr>";
    }
    ?>
</table>
    <?php
  } else {
    echo "0 results";
  }
  $conn->close();
?>