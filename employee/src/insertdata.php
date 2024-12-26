<?php
include('db.php');
if($conn->$connect_error){
  die("Connection error:" .$conn->$connect_error);
}
   $empname= $_POST['empname'];
   $empage=$_POST['empage'];
   $emprole=$_POST['emprole'];
   $empno=$_POST['empno'];
   $stmt= "insert into employee(empname,empage,emprole,empno) values('$empname','$empage','$emprole','$empno')";
     if($conn->query($stmt)=== TRUE){
          header('location:table.php?message=register successfully');
     }else{
        echo "Error:".$stmt."<br>". $conn->error;
     }
?>