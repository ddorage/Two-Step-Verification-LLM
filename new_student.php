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

$sql = "SELECT * FROM new_registration ";
$res = mysqli_query($link, $sql);

while ($row = $res->fetch_assoc()) {
    $request_mail= $row['email'];
    $request_roll_no= $row['roll_no'];
    $request_username=$row['Username'];
    $request_course=$row['course'];
    $request_pass=$row['passwords'];
}

$row = mysqli_num_rows($res);

if($row > 0 ){

    // $f="true";
    
    session_start();
    $_SESSION['req_flag']="true";
    $_SESSION['req_mail']=$request_mail;
    $_SESSION['req_roll']= $request_roll_no;
    $_SESSION['req_username']=$request_username;
    $_SESSION['req_course']=$request_course;
    $_SESSION['req_pass']=$request_pass;
    // echo"records found";

    
}
else {
    $_SESSION['req_flag']="false";
}

$link -> close();

if (isset($_POST['accept_request'])) {
    request_accepted();
}
else if (isset($_POST['reject_request'])) {
    request_rejected();
}

function request_accepted(){

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
    
    try{
        session_start();

        $roll=$_SESSION['req_roll'];
        $mails=$_SESSION['req_mail'];
        $usersnaem=$_SESSION['req_username'];
        $courses=$_SESSION['req_course'];
        $passes=$_SESSION['req_pass'];

        $_SESSION['req_flag']="false";
    }
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
    $isEmpty=empty($usersnaem);

    if (empty($usersnaem)){

    }
    else{
    $sql="INSERT INTO users(Username, passwords, roll_no, email, course) VALUES ('$usersnaem','$passes','$roll','$mails','$courses')";
    $res=mysqli_query($link, $sql);
    }

    if($res){
        echo "<script>alert('request accepted');</script>";
        delete_record();
        // it opens admin dashboard and replac current page with it
        echo "<script> location.replace('admin_dashboard.php');</script>";

    }
    else{
        echo "There is some problem in inserting record";
        echo mysqli_error($link);
    }


    $link -> close();
    
}
function request_rejected(){

    
    delete_record();

    echo "<script>alert('request rejected');</script>";
    echo "<script> location.replace('admin_dashboard.php');</script>";
}

function delete_record(){

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
    
    try{
        // session_start();
        $usernames=$_SESSION['req_username'];
        $password=$_SESSION['req_pass'];
        $est_mail=$_SESSION['req_mail'];

        $_SESSION['req_flag']="false";
    }
    catch(Exception $e) {
        // echo 'Message: ' .$e->getMessage();
      }

    $sql= "DELETE FROM new_registration WHERE Username = '$usernames' and passwords = '$password' and email = '$est_mail'";
    $res = mysqli_query($link, $sql);

    if($res){
        // echo "<script>alert('request accepted');</script>";
        // echo"<script> window.close();</script>";
        // echo"<script> window.open('login_page.php');</script>";

    }
    else{
        echo "There is some problem in Deleting a  record";
        echo mysqli_error($link);
    }
    // unset($_SESSION['req_username']);
    // unset($_SESSION['req_pass']);
    // unset($_SESSION['req_roll']);
    // unset($_SESSION['req_mail']);
    // unset($_SESSION['req_course']);
    $_SESSION['req_flag']="false";

    $link -> close();
    // exit();



}
// exit();

?>


<!DOCTYPE html>
<head >
    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="Data/Admin_style.css"> -->
</head>
<body >
</body>
</html>
