<?php
    if (isset($_POST['register_button'])) {
        new_student_registration();
    }
    else if (isset($_POST['login_button'])) {
        student_login_verification();
    }
    else if (isset($_POST['admin_login'])) {
        admin_login_verification();
    }
    else if (isset($_POST['log_out_btn'])){
        student_is_logged_out();
    }
    else if (isset($_POST['log_out_btn2'])) {
        echo "logout";
    }
    else 
    {
        echo"<script> window.close(requesting.php);</script>";
    }

    function new_student_registration(){
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
        
        $email = $_POST['text2'];
        $password = $_POST['text4'];
        $roll_no = $_POST['text3'];
        $Usernames = $_POST['text1'];
        $coursename=$_POST["course"];

        // $email = stripslashes($email);
        // $password = stripslashes($password);
        

        $sql="INSERT INTO new_registration(Username, passwords, roll_no, email, course) VALUES ('$Usernames','$password','$roll_no','$email','$coursename')";
        $res=mysqli_query($link, $sql);

        if($res){
            echo "<script>alert('new Student is registered');</script>";
            echo"<script> location.replace('login_page.php');</script>";

        }
        else{
            echo "There is some problem in inserting record";
            echo mysqli_error($link);
        }


        $link -> close();
    }

    function student_login_verification(){
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
            $mail_to_send= $row['email'];
            $student_roll_no= $row['roll_no'];
            $student_username=$row['Username'];
        }

        // echo $mail_to_send;

        $row = mysqli_num_rows($res);

        if($row > 0 )
        {
            echo "<script> window.open('what_up.php'); </script>";
            echo"<script> window.close(requesting.php);</script>"; 
            // echo '<script>alert("loged in")</script>';
            $inTime=date("h:i:sa");
            // echo $inTime;
            try{
                session_start();
                $_SESSION['email_sending'] = $mail_to_send;
                $_SESSION['logged_username']= $student_username;
                $_SESSION['logged_rollno'] = $student_roll_no;
                $_SESSION['logged_time'] = $inTime;
            }
            catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
        }
        else
        {
            echo '<script>alert(" .....Login failed ..... ");</script>';
            echo"<script> location.replace('login_page.php');</script>";
        }
        
        $link -> close();
    }

    function admin_login_verification(){
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

        $usernames = $_POST['admin_user'];
        $password = $_POST['admin_pass'];

        $sql = "SELECT * FROM admins WHERE username = '$usernames' and passwords = '$password'";
        $res = mysqli_query($link, $sql);
        

        $row = mysqli_num_rows($res);

        if($row > 0 )
        {
        // echo '<script>alert("loged in")</script>';
            echo "<script> window.open('admin_dashboard.php'); </script>";
            echo "<script> window.close(requesting.php);</script>";
        
        }
        else {
        echo '<script>alert(" ..... Sorry You are not an Admin ..... ")</script>';
        // echo "<script> window.close(Registration.php);</script>";
        echo"<script>  location.replace('admin _login.php')</script>";
        // echo "<script> window.open('admin _login.php'); </script>";
        // echo "<script> window.close('requesting.php');</script>";
        }

        echo"<script> window.close(requesting.php);</script>";
        $link -> close();
    }

    function student_is_logged_out(){

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
            $mail = $_SESSION['email_sending'];
            $username = $_SESSION['logged_username'];
            $roll_no = $_SESSION['logged_rollno'];
            $intime = $_SESSION['logged_time'];
            $outtime = date("h:i:sa");
            // $intime ='logged_time';
            // $outtime = "out";

            // $sql="INSERT INTO studentstats(username, roll_no, in_time, out_time) VALUES ('$username',,'$roll_no','$intime','$outtime')";
            $sql="INSERT INTO `studentstats` (`username`, `roll_no`, `in_time`, `out_time`) VALUES ('$username', '$roll_no', '$intime', '$outtime');";
            
            // $sql="DELETE FROM `studentstats`";
            
            $res=mysqli_query($link, $sql);
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
          }
        if($res){
            echo "<script> window.open('home.php'); </script>";
            echo"<script> window.close('requesting.php');</script>";
        }
        else{
            echo mysqli_error($link);
        }
        echo"<script> window.close(requesting.php);</script>";
        $link -> close();
    }
  

    ?>



<!DOCTYPE html>
<head >
    <title>Blank Page</title>
    <link rel="stylesheet" href="Data/Admin_style.css">
</head>
<body >
</body>
</html>
