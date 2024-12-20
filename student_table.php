<?php

session_start();
$username=$_SESSION['logged_username'];

?>

<!DOCTYPE html>
<head>
    <title>Course Page</title>
    <link  rel="stylesheet" href="CSS5/admin_student_view.css" />
    <link rel="stylesheet" href="Data/Admin_style.css">
   </head>

<body >
   <form  >
   <header style="background-color:#1c1d20">
       <div class="left-area">
           <h3 >Admin<span> Panel</span></h3>
       </div>
       <div class="right-area">
           <a href ="home.php" class="logout_btn">Logout</a>
       </div>
   </header>
    <div class="sidebar" style="background-color:#2F323A" >
        <center>
        <img id="admin_profile" src="Data/Adminlms.png" class="Profile_image" onclick="new_requests();"  />
        <h4 >Admin</h4>
        </center>
    <a href="admin_dashboard.php"><span>Dashboard</span></a>
    <!-- <a href="#"><span>Course</span></a>
    <a href="#"><span>Study Material</span></a> -->
    <a href="student_table.php"><span>View Student Profile</span></a>
    </div>
    <div >
        <img src="a2.png" alt=""  style="margin-left:250px;height:100vh;background-position:center;background-size:cover;"/>
    <table >
  <tr>
    <th>Username</th>
    <th>Roll no</th>
    <th>IN time </th>
    <th>OUT time </th>
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
    </div>
    </formm>
</body>
</html>


