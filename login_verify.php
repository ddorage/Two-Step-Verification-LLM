<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newlmsdb";

    // Create connection
    $link = mysqli_connect($servername,$username,$password); 
    mysqli_select_db($link, $dbname) or die("cannot select DB");

    // Check connection
    if ($link->connect_error) {
      die("Connection failed: " . $link->connect_error);
    }
    // echo "Connected successfully";

    $usernames = $_POST['get_user'];
    $password = $_POST['get_pass'];
    

    $sql = "SELECT * FROM users WHERE username = '$usernames' and passwords = '$password'";
    $res = mysqli_query($link, $sql);
    

    while ($row = $res->fetch_assoc()) {
      $mail_to_send= $row['email']."<br>";
    }

    echo $mail_to_send;
    $row = mysqli_num_rows($res);

    if($row > 0 )
    {
      // echo '<script>alert("loged in")</script>';
      $open= "<script> window.open('what_up.php'); </script>";
      echo $open ;
      $close ="<script> window.close(); </script>";
      echo $close;
    }
    else {
      echo '<script>alert(" .....Login failed..... ")</script>';
    }


?>