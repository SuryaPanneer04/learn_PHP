<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <style>
       table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {background-color: #f2f2f2;}
       body{
        display: flex;
        flex-direction: column;
       }
       h6{
        text-align: center;
        color:red;
       }
       #btn1{
        background-color:green;
        color:white;
        border:none;
        border-radius:5px;
        cursor: pointer;
       }
       #btn2{
        background-color:red;
        color:white;
        border:none;
        border-radius:5px;
        cursor: pointer;
       }

    </style>
</head>
<body>
     
    <h1>Crud Application in PHP</h1>
  <div class="container">
    <h3>Student data</h3>
  <table>  
   <thead>
        <tr>
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>PassWord</th>
        </tr> 
   </thead>
   <?php
   include('db.php');
   ?>
   <tbody>
    <?php
      
      $query = "select * from register";
      $result = mysqli_query($conn,$query);
      
      if(!$result){
        die("Query Failed :".mysqli_error());
      }
      else{
        while($row = mysqli_fetch_assoc($result)){
            ?>
               <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><button >Update</button>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" id="btn2">Delete</a></td>
                </tr>
            <?php   
        }        
      }
    ?>
                
   </tbody>
   </table>
   <?php
     if(isset($_GET['message'])){
        echo "<h6> ".$_GET['message']."</h6>";
     }
   ?>
</div> 
</body>
</html>