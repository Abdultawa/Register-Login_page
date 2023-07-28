<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Registeration page</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <div class="login-box">

     <form class="" action="registerLogic.php" method="post">

       <div class="user-box">
         <input type="text" name="fname" value="" required> <br>
         <label for="">Firstname</label>
       </div>

        <div class="user-box">
          <input type="text" name="lname" value="" required> <br>
          <label for="">Lastname</label>
        </div>

        <div class="user-box">
          <input type="text" name="username" value="" required> <br>
          <label for="">Username</label>
        </div>

        <div class="user-box">
          <input type="password" name="password" value="" required> <br>
          <label for="">Password</label>
        </div>

        <div class="user-box">
          <input type="text" name="address" value="" required> <br>
          <label for="">Address</label>
        </div>

        <div class="user-box">
          <input type="number" name="phone" value="" required> <br>
          <label for="">Phone number</label>
        </div>

        <div class="user-box">
          <input type="text" name="reg_no" value="" required> <br>
          <label for="">Registeration number</label>
        </div>

        <div class="user-box">
          <input type="email" name="email" value="" required> <br>
          <label for="">Email</label>
        </div>

        <div class="user-box">
          <input type="text" name="city" value="" required> <br>
          <label for="">City</label>
        </div>
        <div class="user-box">
          <input type="text" name="state" value="" required> <br>
          <label for="">State</label>
        </div>

        <div class="user-box">
          <input type="text" name="city" value="" required> <br>
          <label for="">City</label>
        </div>

        <div class="user-box">
          <input type="text" name="country" value="" required> <br>
          <label for="">Country</label>
        </div>

        <div class="user-box">
          <input type="text" name="zip_code" value="" required> <br>
          <label for="">Zip-code</label>
        </div>

        <center>
          <input type="submit" name="submit" value="Register" class="submit">
          | <a href="login.php">Log in</a>
        </center>

     </form>
   </div>

   </body>
 </html>
