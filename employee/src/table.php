<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding:8px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        h5{
        text-align: center;
        color:red;
        align-items:center;
       }
    </style>
</head>
<body>
    <div>
     <table>
       <thead>
         <tr>
            <td>id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Role</td>
            <td>number</td>
            <td>edit</td>
            <td>delete</td>
         </tr>   
       </thead>
       <?php
       include('db.php');
       ?>
       <tbody>
           <?php
             $query = "select * from employee";
             $result = mysqli_query($conn,$query);
             if(!$result){
                die("Query Failed :" . mysqli_error());
             }else{
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                     
                     <tr>
              
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['empname']; ?></td>
                        <td><?php echo $row['empage']; ?></td>
                        <td><?php echo $row['emprole']; ?></td>
                        <td><?php echo $row['empno']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        
                    </tr>
                    <?php
                }
             }
           ?>      
       </tbody>
     </table>
    
     <?php
       if(isset($_GET['message'])){
          echo "<h5>".$_GET['message']."</h5>";
       }
     ?>
     </div>
</body>
</html>