<!DOCTYPE html>
<head runat="server">
    <title> Login and Registration Form</title>
    <link rel="stylesheet"  href="Style1.css" />
    <!-- <script type="text/javascript" src="toggle login.js"></script> -->
</head>
<body class="Registration">
    <div class="container">
     <div class="form-box">
     <div class="button-box">
     <div id="btn"></div>
     <button type="button" class="toggle-btn" onclick="login()">Log In</button>
     <button type="button" class="toggle-btn" onclick="register()">Register</button>
     </div> 
     <form  id="login" class="input-group"  action="requesting.php" method="post">
     <input type="text" id="userName"class="input-field" placeholder="Username" name="get_user"
     required>
     <input type="text" id="userPass" class="input-field" placeholder="Enter password" name="get_pass"
      required>
      <input type="checkbox" class="check-box"><span>Remember password</span>
      <!-- <span>Remember password</span> -->
      <!-- <input type="checkbox" class="check-box"><span>  </span> -->
      <button type="submit" class="submit-btn" name="login_button"onclick="">Log in</button>
        </form>
        <form  id="register" class="input-group" action="requesting.php" method="post">
     <input type="text" class="input-field" placeholder="Username" name="text1" required/>
     <input type="email" class="input-field" placeholder="Email Id" name="text2" required/>
     <input type="number" class="input-field" placeholder="Roll Number" name="text3" required/>
     <input type="password" class="input-field" placeholder="Enter password" name="text4" required/>
     <input type="text" class="input-field" placeholder="Field" name="course" required/>
      <button type="submit" class="submit-btn"  name="register_button">Register</button>
        </form>   
       </div>
      </div>
      <script type="text/javascript" src="toggle login.js"></script>
     <!-- <script type="text/javascript" src="login cha.js"></script> -->
     <!-- <script>
        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
         </script> -->
    
</body>
</html>
