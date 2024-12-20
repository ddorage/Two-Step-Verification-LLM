<?php

session_start();
$username=$_SESSION['logged_username'];

?>
<!DOCTYPE html>
<!-- <head runat="server"> -->
<head>
    <title>Course Page</title>
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
<!-- <form action="requesting.php" method="post"> -->
<form>
<div class="wrapper">
        <div class="sidebar">
            <h2>My Course</h2>
          <ul>
              <li><button type="submit" class="logout_btn2"  onclick="window.open('Student_Dashboard__2.php'); window.close('My_Course.php')">Home </button></li>
              <!-- <li><button type="submit" class="logout_btn2" onclick="Home.php"> Profile</button></li> -->
              <li><button type="submit" class="logout_btn2" onclick="window.open('');">My course</button></li>
              <li><button type="submit" class="logout_btn2" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSeqZZAeKh-cAu17GQl7c1tnwBHJD3rtos1eqs31m7bdWo4MDw/viewform?usp=sf_link')">Feedback </button></li>
              <!-- <li><button type="submit" class="logout_btn2" name="log_out_btn" onclick="window.open('Home.php'); window.close('Student_Dashboard__2.php')">logout </button></li> -->
              <li><button type="submit" class="logout_btn2" name="log_out_btn" onclick="window.open('Student_Dashboard__2.php'); window.close('My_Course.php')">Back </button></li>   
            </ul>
       </div>
        <div class="main_content">
            <div class="header">Welcome...
            <label id = "uname">User</label>
            </div>
               <div class="filter">
                   <table>
                       <tr>
                           <th>Course ID</th>
                           <th> Name</th>
                           <th>Faculity</th>
                           <th>Semester</th>
                        </tr>
                        <tr>
                           <td>IT11</td>
                           <td><a href="course.php">JAVA Programming</a></td>
                           <td>Mrs.Barve</td>
                           <td>Sem1</td>
                        </tr>
                        <tr>
                           <td>IT12</td>
                           <td><a href="course.php">Data Structure & Algorithm</a></td>
                           <td>Mrs.Patil</td>
                           <td>Sem1</td>
                        </tr>
                        <tr>
                           <td>IT13</td>
                           <td><a href="course.php">object Oriented Software Engineering</a></td>
                           <td>Mrs.J.Patil</td>
                           <td>Sem1</td>
                        </tr>
                        <tr>
                           <td>IT14</td>
                           <td><a href="course.php">Oprating System Concept</a></td>
                           <td>Mrs.Shirurkar</td>
                           <td>Sem1</td>
                        </tr>
                        <tr>
                           <td>IT15</td>
                           <td><a href="course.php">Network Technology</a></td>
                           <td>Mr.Vaidya</td>
                           <td>Sem1</td>
                        </tr>
                        <tr>
                           <td>IT21</td>
                           <td><a href="course.php">Python</a></td>
                           <td>Mr.Zirmite</td>
                           <td>Sem2</td>
                        </tr>
                        <tr>
                           <td>IT22</td>
                           <td><a href="course.php">Software Project management</a></td>
                           <td>Mrs.Shirurkar</td>
                           <td>Sem2</td>
                        </tr>
                        <tr>
                           <td>MT21</td>
                           <td><a href="course.php">Optimization Technique</a></td>
                           <td>Mr.Kulkarni</td>
                           <td>Sem2</td>
                        </tr>
                        <tr>
                           <td>IT23</td>
                           <td><a href="course.php">Advance Internet Technology</a></td>
                           <td>Mrs.Barve</td>
                           <td>Sem2</td>
                        </tr>
                        <tr>
                           <td>IT24</td>
                           <td><a href="course.php">Advance DBMS</a></td>
                           <td>Mrs.Tumsure</td>
                           <td>Sem2</td>
                        </tr>
                       </table>
               
                </div>
            </div>
         </div>
</form>   
</body>
</html>
