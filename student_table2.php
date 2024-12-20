<?php

session_start();
$username=$_SESSION['logged_username'];

?>

<!DOCTYPE html>
<!-- <head runat="server"> -->
<head>
    <title>Course Page</title>
    <link  rel="stylesheet" href="CSS5/StyleSheet5.css" />
    <!-- <link rel="stylesheet" href="Data/Admin_style.css"> -->
   </head>

<body >
    <div class="wrapper">
        <div class="sidebar">
            <h2>Dashboard</h2>
          <ul>
              <li><a href=""></a>Home</li>
              <li><button type="submit" class="logout_btn2" onclick="Home.php"> Profile</button></li>
              <li><button type="submit" class="logout_btn2" onclick="window.open('My_Course.php'); window.close('Student_Dashboard__2.php')"  >My course</button></li>
              <li><button type="submit" class="logout_btn2" onclick="Home.php">Feedback </button></li>
              <li><button type="submit" class="logout_btn2" name="log_out_btn" onclick="window.open('Home.php'); window.close('Student_Dashboard__2.php')">logout </button></li>
              <li><button type="submit" class="logout_btn2" name="log_out_btn" >logout </button></li>
            </ul>
       </div> -->
        <div class="main_content">
            <a href ="Home.php" name="log_out_btn" class="logout_btn">Logout</a>
        <table >
            <tr>
        <td>Username</td>
        <td>Roll no</td>
        <td>IN time </td>
        <td>OUT time </td>
    </tr>
        <?php

        // include "dbConn.php"; // Using database connection file here

        $db = mysqli_connect("localhost","root","","newlmsdb");

        if(!$db)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        $records = mysqli_query($db,"select * from studentstats"); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
        ?>
        <tr>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['roll_no']; ?></td>
            <td><?php echo $data['in_time']; ?></td>
            <td><?php echo $data['out_time']; ?></td>
        </tr>	
        <?php
        }
        ?>
        </table>

        <?php mysqli_close($db); // Close connection ?>

    </div>
</body>
</html>


