<?php 
include('db.php');

if ($conn->$connect_error){
    die("connection failed:". $conn->$connect_error);
}
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$name =$_POST['name'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$sql = "insert into student(name,city,phone,password) values('$name','$city','$phone','$password_hash')";

if($conn->query($sql)=== TRUE){
    header('location:index.php?message= register successfully!');
}else{
    echo "connection". $sql ."failed". $conn->error;
}

?>
