
<!DOCTYPE html>

<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<head runat="server">
    <title> Add Student Page</title>
      <link rel="stylesheet"  href="CSS2/StyleSheet2.css" />
</head>
  <body class="Add Student">
      <div class="container">
      <div class="form-box">
           <form  id="register" class="input-group" action="request.php" method="post">
     <input type="text" class="input-field" placeholder="Username" name="text1" required/>
     <input type="email" class="input-field" placeholder="Email Id" name="text2" required/>
     <input type="number" class="input-field" placeholder="Roll Number" name="text3" required/>
     <input type="password" class="input-field" placeholder="Enter password" name="text4" required/>
     <input type="text" class="input-field" placeholder="Field" required/>
      <button type="submit" class="submit-btn">Register</button>
        </form>
       </div>
      </div>
    
        
   
</body>
</html>
