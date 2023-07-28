<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'database.php';
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-box">
    <h2>User Login</h2>
    <form action="login.php" method="post">
      <div class="user-box">
        <input type="text" name="username" required><br>
        <label>Username</label>
      </div>

        <div class="user-box">
          <input type="password" name="password" required><br>
          <label>Password</label>
        </div>
        <center>
          <input type="submit" value="Login" class="submit">
          | <a href="register.php">Register</a>
        </center>
    </form>
  </div>

</body>
</html>    letter-spacing: 4px


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check user credentials
    $sql = "SELECT * FROM student_info WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];

        if (password_verify($password, $hashed_password)) {
            // Password is correct, log the user in
            session_start();
            $_SESSION["user_id"] = $row["id"];
            header("Location: index.php"); // Redirect to the dashboard or any other page
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}

mysqli_close($conn);
?>
