<?php
include('db.php');

if(isset($_GET['id'])){
    $isToDelete = $_GET['id'];

    $sql= "Delete from employee where id = $isToDelete";
    if($conn->query($sql)===TRUE){
        header('location:table.php?message=delete successfully');
         exit();
    }else{
        echo "query failed :" .$sql."connection" .$conn->err;
    }
}
?>