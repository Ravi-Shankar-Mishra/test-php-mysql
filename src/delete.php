<?php
    require './header.php';
    require './connection.php';
    $deleteid=$_GET['id'];
    $sql="DELETE FROM `employee` WHERE EMP_ID='$deleteid'";
    $result = mysqli_query($conn, $sql);
    if ($conn->query($sql) === true)
    {
        header("location:login.php");
        echo "<h2>Record Inserted successfully</h2> Please click on <strong><a href='login.php'>Login</a></strong>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    // echo $deleteid;
?>