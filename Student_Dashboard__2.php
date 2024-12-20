<?php

session_start();
$username=$_SESSION['logged_username'];

?>

<!DOCTYPE html>

<head >
    <title>Student Dashboard Page</title>
    <link  rel="stylesheet" href="CSS5/StyleSheet5.css" />
    <script>
        function student_data(){
            // alert("we will show student data herer")
            var usename = "<?php echo $username;?>";
            usename = usename.replace( /(<([^>]+)>)/ig, ''); // this is to remove HTML tags from string
            // alert(mail_to_send)
            usename=usename.toUpperCase()
            document.getElementById('uname').innerHTML
                = usename;
        }
        </script>
</head>
<body onload="student_data()">
<form action="requesting.php" method="post">
    <div class="wrapper">
        <div class="sidebar">
            <h2>Dashboard</h2>
          <ul>
              <li><a href=""></a>Home</li>
              <!-- <li><button type="submit" class="logout_btn2" onclick="Home.php"> Profile</button></li> -->
              <li><button type="submit" class="logout_btn2" onclick="window.open('My_Course.php'); window.close('Student_Dashboard__2.php')"  >My course</button></li>
              <li><button type="submit" class="logout_btn2" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSeqZZAeKh-cAu17GQl7c1tnwBHJD3rtos1eqs31m7bdWo4MDw/viewform?usp=sf_link')">Feedback </button></li>
              <!-- <li><button type="submit" class="logout_btn2" name="log_out_btn" onclick="window.open('Home.php'); window.close('Student_Dashboard__2.php')">logout </button></li> -->
              <li><button type="submit" class="logout_btn2" name="log_out_btn" >logout </button></li>
            
            </ul>
       </div>
        <div class="main_content">
            <div class="header">Welcome...
            <label id = "uname">User</label>
            <label id="time"></label>
            <!-- <a href ="Home.php" name="log_out_btn" class="logout_btn">Logout</a> -->
        </div>
    </div>  
    </form>  
</body>
</html>
