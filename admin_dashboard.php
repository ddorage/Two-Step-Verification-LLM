<?php
// require_once "new_student.php";
require "new_student.php";
// session_start();
if( isset($_SESSION['req_roll'])){
    
    $roll=$_SESSION['req_roll'];
    $mails=$_SESSION['req_mail'];
    $usersnaem=$_SESSION['req_username'];
    $courses=$_SESSION['req_course'];
    $flags=$_SESSION['req_flag'];
    // echo $flags;
}
else{
    // echo "error in session files";
}
?>
<!DOCTYPE html>
<head >
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="Data/Admin_style.css">
    <!-- <script type="text/javascript" src="new_register.js" ></script> -->
    <script>
        var num=0;

        var roll_no = "<?php echo $roll;?>";"<?php echo $roll;?>";
        var mail_id = "<?php echo $mails;?>";"<?php echo $mails;?>";
        var user_name = "<?php echo $usersnaem;?>";"<?php echo $usersnaem;?>";
        var cours = "<?php echo $courses;?>";"<?php echo $courses;?>";
        var flag1 = "<?php echo $flags;?>";
        // "<?php echo $flags;?>";
        function new_requests(){
            // flag1 = flag1.toString();
            // alert(flag1);
            
            if (flag1) {
                var nodes="";
                nodes += "Username :"+user_name+"  Roll-No : "+ roll_no+"  Email: "+mail_id+"  Course: "+cours;
                var tag = document.createElement("p");
                tag.classList.add("gwd-p-hk4a")
                var text = document.createTextNode(nodes);
                tag.appendChild(text);
                var element = document.getElementById("reqest_process");
                element.appendChild(tag);
                num +=1;
            } else {
                
                document.getElementById("label_1").style.visibility="hidden";
                document.getElementById("label_2").style.visibility="hidden";
                document.getElementById("reqest_process").style.visibility="hidden"

            }
            
            document.getElementById("reqest_process").style.visibility="visible";
            // label_click();
        }
        function label_click() {

            var x = document.getElementById('label_1');
            if (x.style.visibility === 'hidden') {
                document.getElementById("label_1").style.visibility="visible";
                document.getElementById("label_2").style.visibility="visible";
            } else {
                document.getElementById("label_1").style.visibility="hidden";
                document.getElementById("label_2").style.visibility="hidden";
                document.getElementById("reqest_process").style.visibility="hidden"
                }
            
            }
        function request_for_admin(){
            if (flag1) {
                document.getElementById("admin_profile").src="Data/Adminlms_request.png";
            }
        }
        
    </script>
</head>

<body onload="request_for_admin()">
   <!-- <header style="background-color:#22242A"> -->
   <form action="new_student.php" method="post" >
    <header style="background-color:#1c1d20">
       <div class="left-area">
           <h3 >Admin<span> Panel</span></h3>
       </div>
       <div class="right-area">
           <a href ="home.php" class="logout_btn" onclick="logout_btn()">Logout</a>
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
    <a href="student_table.php"><span>View Student Data</span></a>
    </div>
    <div >
        <img src="a2.png" alt=""  style="margin-left:250px;height:100vh;background-position:center;background-size:cover;"/>
    </div>
    <div id="reqest_process" class="gwd-div-ij54s">
        <button id="label_1" class="gwd-label-1is2" name="accept_request" onclick="label_click()">Accept</label>
        <button id="label_2" class="gwd-label-18fd" name="reject_request" onclick="label_click()">Reject</label>  
    </div>
    </formm>
</body>



</html>
