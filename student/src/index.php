<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            flex-direction:column;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {background-color: #f2f2f2;}
        h1{
            text-align:center;
        }

         h6{
            color:red;
            text-align:center;
         }   
    </style>
</head>
<body>

<h1>Student Data</h1>
  <form action="insert.php" method="post">
          <div class="Register">
                 <label >Name :</label>
                 <input type="text" name="name" placeholder="Enter your name" autocomplete="name" required>
                 <label >city :</label>
                 <input type="text" name="city" placeholder="Enter your city" autocomplete="city" required>
                 <label >phone NO :</label>
                 <input type="text" name="phone" placeholder="Enter your phone" autocomplete="phone" required>
                 <label >password :</label>
                 <input type="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                 <button>register</button>
           </div>
   </form>
<table>
   <thead>
       <tr>
          <th>Id</th>
          <th>Name</th>
          <th>City</th>
          <th>PhoneNo</th>
          <th>password</th>
       </tr>
   </thead>
   <?php include('db.php');?>
   <tbody>
    <?php
       $query = "select * from student";
       $result =mysqli_query($conn,$query);
       if(!$result){
        die("query failed:". mysqli_error());
       }else{
          while($row = mysqli_fetch_assoc($result)){
            ?>
               <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
            <?php
          }
       }
    ?>   
   </tbody>
</table>
<?php
  if(isset($_GET['message'])){
    echo "<h6>".$_GET['message']."</h6>";
  }
?>
</body>
</html>

