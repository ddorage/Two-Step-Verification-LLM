
<!DOCTYPE html>

<head runat="server">
    <title>Admin Page</title>
    <link rel="stylesheet"  href ="CSS/Style.css" />
    <!-- <script type="text/javascript" src="new_register.js"></script> -->
    <script>
        var num=0;
        function new_requests(){

            // document.getElementById("label_1").style.visibility="hidden";
            // document.getElementById("label_2").style.visibility="hidden";
            
            alert("Hello! I am an alert box!!");
            

            var nodes="Student Who register New Their name will be visible here "
            nodes += "random_name Here "+ num
            var tag = document.createElement("p");
            tag.classList.add("gwd-p-request_label")
            var text = document.createTextNode(nodes);
            tag.appendChild(text);
            var element = document.getElementById("new_student");
            element.appendChild(tag);
            num +=1;
            
            // alert("Hello! I  box!!");
            // // document.getElementById("p1").style.visibility="hidden"
            document.getElementById("new_student").style.visibility="visible";

            // alert("Hello!");
            
        }
        function label_click() {
            // document.getElementById("label_1").style.visibility="hidden";
            // document.getElementById("label_2").style.visibility="hidden";
            document.getElementById("reqest_process").style.visibility="hidden";
        }
    </script>

</head>
<body  class="Admin" onload="new_requests()">
   <header style="background-color:#22242A; top: 0px; left: 0px;">
       <div class="left-area">
           <h3 >Admin<span> Panel</span></h3>
       </div>
       <div class="right-area">
           <a href ="home.php" class="logout_btn">Logout</a>
       </div>
       <!-- <div id="new_student" class="Formbox">
           <label id="label_1" class="gwd-label-accept" onclick="label_click()">Accept</label>
           <label id="label_2" class="gwd-label-reject" onclick="label_click()">Reject</label>
       </div> -->
   </header>
    <div class="sidebar" style="background-color:#2F323A" >
        <center>
        <img src="Adminlms.png" class="Profile_image"  alt=" "/>
        <h4 >Admin</h4>
         </center>
    <a href="#" ><span>Dashboard</span></a>
    <a href="Course.aspx"><span>Course</span></a> 
    <a href="AddStudent.aspx"><span>Add Student</span></a>
    <a href="" ><span>Request Box</span></a>
    </div>
    <div >
        <!-- <img src="a2.png" class="content" alt=""  style="margin-left:250px;height:100vh;background-position:center;background-size:cover"/> -->
        <!-- <img src="a2.png" class="content" alt=""  style="margin-left:250px;height:100vh;z-index=-1"/> -->
        
        <div id="new_student" class="Formbox">
           <label id="label_1" class="gwd-label-accept" onclick="label_click()">Accept</label>
           <label id="label_2" class="gwd-label-reject" onclick="label_click()">Reject</label>
        </div>
    </div>
    
    <!-- <div id="new_student" class="gwd-div-ij54s">
        <label id="label_1" class="gwd-label-accept" onclick="label_click()">Accept</label>
        <label id="label_2" class="gwd-label-reject" onclick="label_click()">Reject</label>  
    </div> -->

</body>
</html>
