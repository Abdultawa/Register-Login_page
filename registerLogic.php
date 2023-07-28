<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
   session_start();
?>
<?php
    include ("database.php");

 ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
$lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
$address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);
$reg_no = filter_input(INPUT_POST, "reg_no", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$state = filter_input(INPUT_POST, "state", FILTER_SANITIZE_SPECIAL_CHARS);
$city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
$country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
$zip_code = filter_input(INPUT_POST, "zip_code", FILTER_SANITIZE_SPECIAL_CHARS);

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $username = $_POST['username'];
// $password = $_POST['password'];
// $address = $_POST['address'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $reg_no = $_POST['reg_no'];
// $state = $_POST['state'];
// $city = $_POST['city'];
// $country = $_POST['country'];
// $zip_code = $_POST['zip_code'];


      if (empty($fname)) {
            echo "please enter your first name";
      }elseif (empty($lname)) {
        echo "please enter your last name";

      }elseif (empty($username)) {
        echo "please enter your username";error_reporting(E_ALL);
ini_set('display_errors',1);

      }elseif (empty($password)) {
        echo "please enter your password";

      }elseif (empty($address)) {
        echo "please enter your address";

      }elseif (empty($phone)) {
        echo "please enter your phone number";

      }elseif (empty($reg_no)) {
        echo "please enter your reg-no";

      }elseif (empty($email)) {
        echo "please enter your email address";

      }elseif (empty ($state)) {
        echo "please enter your state";

      }elseif (empty($city)) {
        echo "please enter your city";

      }elseif (empty($country)) {
        echo "please enter your country";

      }elseif (empty($zip_code)) {
        echo "please enter your zip-code";

      }else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `student_info` (`fname`, `lname`, `username`, `password`, `email`, `address`, `phone`, `reg_no`, `state`, `city`, `country`, `zip-code`)
              VALUES('$fname', '$lname','$username', '$hash', '$email', '$address', '$phone', '$reg_no', '$state', '$city', '$country', '$zip_code')";
              try {

                        mysqli_query($conn, $sql);
                        echo "You are now registed";

                      } catch (mysqli_sql_exception) {
                          echo "That username is taken";
                      }
      }
      $_SESSION["fname"] = $_POST["fname"];
      $_SESSION["lname"] = $_POST["lname"];
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];
      $_SESSION["address"] = $_POST["address"];
      $_SESSION["phone"] = $_POST["phone"];
      $_SESSION["reg_no"] = $_POST["reg_no"];
      $_SESSION["email"] = $_POST["email"];
      $_SESSION["state"] = $_POST["state"];
      $_SESSION["city"] = $_POST["city"];
      $_SESSION["country"] = $_POST["country"];
      $_SESSION["zip_code"] = $_POST["zip_code"];



              header("location: index.php");

    }

    // mysqli_close($conn);

 ?>
