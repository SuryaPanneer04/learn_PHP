<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
         body{
            padding: 0%;
            margin: 0%;
            display: flex;
            justify-content:center ;
            align-items: center;
            font-size: 24px;
         }
         form,.Register{
            display: flex;
           flex-direction: column;
            margin: 0px 35px;
           background-color: antiquewhite;
           gap: 10px;
         }
    </style>
</head>
<body>
    <form action="connect.php" method="post">
            <div class="Register">
                 <label >FirstName :</label>
                 <input type="text" name="fname" placeholder="Enter your fname" autocomplete="fname" required>
                 <label >LastName :</label>
                 <input type="text" name="lname" placeholder="Enter your lname" autocomplete="lname" required>
                 <label >Password :</label>
                 <input type="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                 <button>register</button>
           </div>
    </form>
<!-- <?php include('data.php');?> -->
</body>
</html>