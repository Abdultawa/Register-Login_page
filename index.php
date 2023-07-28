<?php
session_start();
 ?>
     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <title></title>
       </head>
       <body>
         This is the home page <br>
         <form class="" action="" method="post">
           <input type="submit" name="logout" value="Log out">
         </form>
       </body>
     </html>


      <ul>
        <li>Firstname: <?php echo $_SESSION["fname"]; ?></li>
        <li>Lastname: <?php echo $_SESSION["lname"]; ?></li>
        <li>Username: <?php echo $_SESSION["username"]; ?></li>
        <li>Password: <?php echo "*********" ?></li>
        <li>Address: <?php echo $_SESSION["address"]; ?></li>
        <li>Phone number: <?php echo $_SESSION["phone"]; ?></li>
        <li>Email: <?php echo $_SESSION["email"]; ?></li>
        <li>Regestration Number: <?php echo $_SESSION["reg_no"]; ?></li>
        <li>State: <?php echo $_SESSION["state"]; ?></li>
        <li>City : <?php echo $_SESSION["city"]; ?></li>
        <li>Country : <?php echo $_SESSION["country"]; ?></li>
        <li>Zip-code : <?php echo $_SESSION["zip_code"]; ?></li>
    </ul>
     <?php



       if (isset($_POST["logout"])) {
         // code...
         session_destroy();
         header("location: register.php");
       }
      ?>
