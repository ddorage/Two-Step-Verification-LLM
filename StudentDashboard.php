﻿<?php

?>
<!DOCTYPE html>

<head runat="server">
    <title> Student Page</title>
   <link href="CSS3/StyleSheet3.css" rel="stylesheet" />
</head>
<body  class="Student">
<form action="requesting.php" method="post">
   <header style="background-color:#22242A; top: 0px; left: 0px;">
       <div class="left-area">
           <h3 >Student<span> Dashboard</span></h3>
           <p >
           <!-- <p id="student_label" class="student_name_label">Student Name -->
       </div>
       <div class="middle-area">
           <h2>Student<span> Name</span></h2>
           <lable id="student_label" class="student_name_label">Student Name<lable>
       </div>
       <div class="right-area">
           <a href ="Home.php" name="log_out_btn" class="logout_btn">Logout</a>
           <!-- <p id="student_label" class="student_name_label">Student Name -->
       </div>
       <!-- <p id="student_label" class="student_name_label">Student Name</p> -->
   </header>
    <!-- <div class="sidebar" style="background-color:#2F323A" >
        <center>
        <img src="Adminlms.png" class="Profile_image" alt=" "/>
        <h4 >Student</h4>
         </center>
    <a href="#" name="log_out_btn" ><span>Java</span></a>
    <a href=""><span>Network Technology</span></a>
    <a href=""><span>Operating System Concept</span></a>
    <a href=""><span>Data Structure and Algorithm</span></a>
    <a href=""><span>Software Engineering </span></a>
    </div> -->
    <div >
       <img src="Student.jpeg" class="content" alt=""  style="margin-left:250px;height:100vh;background-position:center;background-size:cover"/>
    </div>
    </form>
</body>
</html>

