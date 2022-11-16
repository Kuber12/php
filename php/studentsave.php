<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_DATABBASE','college');
    
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABBASE);

    $fullname = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    $sql = "insert into students(name,address,age)
    values('$fullname','$address','$age')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    $conn->close();
?>