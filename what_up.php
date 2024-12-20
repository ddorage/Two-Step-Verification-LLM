<?php
    session_start();
    $mail=$_SESSION['email_sending'];
    // echo $mail;
?>
<!DOCTYPE html>
<!-- <head  runat="server"> -->
<head >
    <title> 2 step verification </title>
    <style type="text/css" id="gwd-text-style">
    body {
    margin:0;
    padding:0;
    font-family:sans-serif;
    }
    .container {
    width: 100%;
    height: 100%;
    background-image: url('registration.png');
    background-position: center;
    background-size: cover;
    position: absolute;
    }
    .form-box {
    width: 380px;
    height: 400px;
    position: relative;
    margin: 6% auto;
    background: rgb(254, 255, 255);
    padding: 5px;
    overflow:hidden;
    }
    .gwd-input-9j95 {
        /* this is textbox 10 for testing */
        position: absolute;
        height: 20px;
        width: 94px;
        left: 10%;
        top: 300px;
        visibility: hidden:
    }
    .gwd-button-9j95 {
        position: absolute;
        border-image-source: none;
        border-image-width: 1;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-color: transparent;
        background-image: none;
        background-color: rgb(255, 245, 157);
        font-family: Arial;
        font-style: normal;
        /* z-index:-1; */
        height: 20px;
        width: 94px;
        left: 10%;
        top: 400px;

    }
    .gwd-button-129w {
        /* Verify buttton  */
        position: absolute;
        border-image-source: none;
        border-image-width: 1;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-color: transparent;
        background-image: none;
        background-color: rgb(255, 245, 157);
        font-family: Arial;
        font-style: normal;
        z-index:-1;
        left: 45.43%;
        top: 59%;
        /* left: 600px; */
        width: 99.99px;
        height: 23.99px;
        /* visibility: hidden; */
        visibility: visible;
    }
    .submit-btn {
        /* Verify buttton  */
        width: 50%;
        padding: 10px 30px ;
        cursor: pointer;
        margin: auto;
        display: block;
        background: linear-gradient(to right,#ff105f,#ffad06);
        border:0;
        outline:none;
        border-radius:30px;
        position: absolute;
        font-family: Arial;
        font-style: normal;
        left: 20%;
        top: 85%;
        visibility: hidden;
    }
    .qr-canvas-box{
        /* QR Canvas */
        position: absolute;
        width: 200px;
        height: 200px;
        box-sizing: border-box;
        border-width: 0px;
        border-style: solid;
        border-color: rgb(0, 0, 0);
        /* top: 31.34%; */
        /* left: 42.09%; */
        left: 22%; 
        top:15%;
        visibility: visible;
    }
    .mail-text{
        /* Check mail text */
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right,#4EC632,#BCEAB1);
        border: 0;
        outline: none;
        left: 22%; 
        top: 500px;
        visibility: visible;
    }
    .textbox-verification{
    /* textbox 3 Input Box */
    position: absolute;
    background-image: none;
    padding:10px 0;
    margin:5px 0;
    border-left:0;
    border-top:0;
    border-right:0;
    border-bottom: 1px solid #999;
    outline:none;
    background:transparent;
    background-color: rgb(255, 255, 255);
    width: 50%;
    height: 8%;
    top: 65%;
    /* left: 42%; */
    left: 25%;
    visibility: hidden;
    }

    </style>
<script src="Data\qriousJs.js"></script>
<script src= "https://smtpjs.com/v3/smtp.js"> </script>
<script >
        
    var numRand
    var otp1,otp2
    var try_mail;
    var attempt=0;
    // window.onload=qrShow();
    function qrShow(){
        
        // numRand = Math.floor(Math.random() * ("987654" - "98765" + 1)) + 98765; //random number of 6 digit
        otp1 = Math.floor(Math.random() * ("987" - "98" + 1)) + 98; //random number of 3 digit
        otp2 = Math.floor(Math.random() * ("987" - "98" + 1)) + 98; //random number of 3 digit
        numRand=otp1+""+otp2;




        sendEmail();
        
        
        
        
        
        // document.getElementById("text_10").value=numRand;
        
        var a=otp1.toString();
        var qr = new QRious({
            element: newCanvas,
            // background: 'green',
            backgroundAlpha: 0.8,
            foreground: 'black',
            foregroundAlpha: 0.8,
            level: 'H',
            padding: 25,
            size: 250,
            value: a,
        });
        // document.getElementById("text_10").value=numRand;
        document.getElementById("text_3").style.visibility="visible";
        document.getElementById("button_3").style.visibility="visible";
        document.getElementById("label1").style.visibility="hidden";

        // document.getElementById("newCanvas").style.visibility="collapse";
        // document.getElementById("myCanvas").style.visibility="visible"
        // document.getElementById("text_3").style.visibility="visible";
        // document.getElementById("button_2").style.visibility="visible";
        
    }
    function sendEmail() { 
        // var mail_to_send =document.getElementById("text_1").value;
        // var mail_to_send="lmsprojectmail@gmail.com"

        var mail_to_send = "<?php echo $mail;?>";
    
        mail_to_send = mail_to_send.replace( /(<([^>]+)>)/ig, ''); // this is to remove HTML tags from string
        
        hide_mail(mail_to_send);
        Email.send({ 
            Host: "smtp.elasticemail.com", 
            Username: "samanaheka@gmail.com", 
            Password: "B17D924AAEEC4E164EACCC34615830633620", 
            To: mail_to_send, 
            From: "samanaheka@gmail.com", 
            Subject: "Your OTP", 
            Body: otp2, 
        })
            .then(function (message) { 
            alert("mail sent successfully to "+try_mail) 
            }); 
    }
    function hide_mail(user_email) {

        var avg, splitted, part1, part2;
        splitted = user_email.split("@");
        part1 = splitted[0];
        avg = part1.length / 2;
        part1 = part1.substring(0, (part1.length - avg));
        part2 = splitted[1];
        try_mail= part1 + "****@" + part2;
    }
    function otp1_verify(){
        var qrotp=document.getElementById("text_3").value
        

        if (qrotp==otp1){
            alert("Your Qr Code is Right .......!")
            document.getElementById("newCanvas").style.visibility="collapse";
            document.getElementById("text_3").style.visibility="hidden";
            document.getElementById("button_3").style.visibility="hidden";
            document.getElementById("text_4").style.visibility="visible";
            document.getElementById("button_4").style.visibility="visible";
            document.getElementById("label1").style.visibility="visible";
            
        }
        else{
            attempt=attempt+1
            if (attempt<3){
                alert("Scan the Qr code and enter OTP  ");
            document.getElementById("text_3").value="";
            }
            else{
                window.open("login_page.php")
                window.close("what_up.php")
            }
        }
    }
    function otp2_verify(){
        var emailotp= document.getElementById("text_4").value
        document.getElementById("text_4").style.visibility="visible";
        document.getElementById("button_4").style.visibility="visible";

        if (emailotp==otp2){
            alert("Your email Otp is right .......!");
            // location.replace('Student_Dashboard__2.php');
            window.open("Student_Dashboard__2.php");
            window.close('what_up.php');
        }
        else{
            attempt=attempt+1
            if (attempt<3){
                alert("Check your Email for OTP  ");
                document.getElementById("text_3").value="";
            }
            else{
                window.open("login_page.php")
                window.close("what_up.php")
            }
            // location.replace('StudentDashboard.php');
            // window.open("login page.html")
            // window.close("what up.html")
        }

    }
    function checkTextbox(){
        var value1=document.getElementById("userName").value
        value1 =value1.toLowerCase();
    }
    
</script>
</head>
<?php
// echo $mail;
// echo "<script type='text/javascript'>iAmTeser();</script>";

?>

<body class="Registration" onload="qrShow()">
<div class="container" >
<!-- <button id="onload" type="submit" class="gwd-button-9j95" onclick="console.log('The ')">Click here</button> -->
    <div class="form-box" >
        <form  id="qr_canvas" name="new_form">
            <canvas id="newCanvas" class="qr-canvas-box" style="border:1px solid #000000;"></canvas>
            <input type="text" id="text_3" class="textbox-verification" placeholder="Enter Qr OTP Here" required>
            <input type="text" id="text_4" class="textbox-verification" placeholder="Enter email OTP Here" required>
            <lable id="label1" class="mail-text">Check your mail for OTP</label>
            <button id="button_3" name="button3" type="submit" class="submit-btn" onclick="otp1_verify()">Verify QR</button>
            <button id="button_4" name="button4" type="submit" class="submit-btn" onclick="otp2_verify()">Verify Mail</button>
            
            <!-- <button id="button_4" name="button4" type="submit"  onclick="alert('la me go ')">verify2</button> -->
        
        </form>
    </div>
</div>
<!-- <input type="text" id="text_10" class="gwd-input-9j95"> -->
<!-- <button id="onload" type="submit" class="gwd-button-9j95" onclick="alert('button ')">Click here</button> -->
</body>
</html>
