<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .empDetailes{
            display:flex;
            flex-direction: column;
            margin: 35px 0px;

        }
        input{
            margin:20px;
            width: 100%;
            padding:20px;
        }
    </style>
</head>
<body>
      <?php
       include('db.php');
        if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $empname = $_POST['empname'];
            $empage = $_POST['empage'];
            $emprole = $_POST['emprole'];
            $empno = $_POST['empno'];
         $query = "update employee set empname ='".$empname."',empage ='".$empage."',emprole ='".$emprole."',empno ='".$empno."' where id ='".$id."'";
         if($conn->query($query)===True){
            header('location:table.php?message = Updated successfully');
         }else{
            echo "query failed" . $conn->err;
         }
        
        }
      ?>
      
   <?php  include('db.php'); ?>
     <?php
     
      $a = $_GET['id'];
     
      $sql = "select * from employee where id = $a";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $empname = $row['empname'];
        $empage = $row['empage'];
        $emprole = $row['emprole'];
        $empno = $row['empno'];
      }
     ?>
   <form action="" method = "post">  
     <div class="empDetailes">
              <label htmlfor="empname">Name :</label>
              <input type ="text" name="empname" placeholder="enter your name" value ="<?php echo $empname; ?>" autocomplete="name" required>
              <label htmlfor="empage">Age :</label>
              <input type="text" name="empage" placeholder="enter your age"  value ="<?php echo $empage ;?>" autocomplete="age" required>
              <label htmlfor="emprole">Role :</label>
              <input type="text" name="emprole" placeholder="enter your role"  value ="<?php echo $emprole; ?>" autocomplete="role" required>
              <label htmlfor="empno">number :</label>
              <input type="text" name="empno" placeholder="enter your number"  value ="<?php echo $empno; ?>" autocomplete="number" required>
              <input type="submit" name="submit" id="sub">
        </div>
    </form>   
</body>
</html>