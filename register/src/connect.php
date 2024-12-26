<?php
include('db.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $password =$_POST['password'];
    $stmt ="insert into register(fname,lname,password) values('$fname','$lname','$password')";
    if ($conn->query($stmt) === TRUE) {

        header('location:data.php?message= register successfully!');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    } 


?>  