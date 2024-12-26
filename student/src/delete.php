<?php
include('db.php');

if(isset($_GET['id'])){
  
    $istoDelete = $_GET['id'];
   
    $sql = "delete from student where id = $istoDelete";
  
    if($conn->query($sql)=== TRUE){
        header('location:index.php?message= delete Successfully');
        exit();
    }
    else{
        echo "failed".$conn->error;
    }
    
}

?>