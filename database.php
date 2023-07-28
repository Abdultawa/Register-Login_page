<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "assignment";
    $conn = "";

      try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        // echo "connected";
      } catch (\Exception $e) {
        echo "not connected";

      }



 ?>
