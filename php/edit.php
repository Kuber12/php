
<html>
<?php
    $conn = mysqli_connect("localhost","root","","college");
    $roll = $_GET['roll_no'];
    $sql = "SELECT * FROM students where roll_no='roll_no'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
?>
    <body>
        <form action="update.php" method="post">
            <input type="hidden" value="<?php echo $row['roll_no']?>">
            <label>Name</label>
            <input type="text" value="<?php echo $row['name']?>">
            <label>Address</label>
            <input type="text" value="<?php echo $row['address']?>">
        </form>
    </body>
<?php
    }
?>

</html>