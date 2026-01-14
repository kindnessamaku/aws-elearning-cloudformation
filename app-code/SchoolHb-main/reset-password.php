<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "<font color=\"red\">Please enter the new password.</font>";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "<font color=\"red\">Password must have atleast 6 characters.</font>";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<font color=\"red\">Please confirm the password.</font>";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "<font color=\"red\">Password did not match.</font>";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "<font color=\"red\">Oops! Something went wrong. Please try again later.</font>";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
 <meta name="description" content="SchoolHb, A website to learn programming by reading articles..">
    <meta name="author" content="Hakim Bouzourdaz">
    <meta name="keywords" content="SchoolHb,Algorithm,Java,c,c++,vb,vb.net,c#,c#.net,Android,HTML,CSS,JavaScript,PHP,SQL,CMD,Linux,Networks,security,hacking,color picker,تعلم البرمجة من الصفر حتى الإحتراف,أفضل موقع لتعلم البرمجة,تعلم البرمجة من المحترفين,أفضل موقع عربي لتعليم البرمجة,أهم موقع لتعلم البرمجة,تعلم البرمجة ببساطة">

    <meta property="og:title" content="SchoolHb | Learn Programming by reading articles" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://hakim-tech.tk/" />
    <meta property="og:image" content="logo.jpg" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />   
    <meta property="og:site_name" content="SchoolHb"/>
  <title>SchoolHb | Rest Password</title>
  <!-- favicon icon -->
  <link rel="icon" href="logo.jpg">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://hakim-tech.tk/dark-mode.css">  
  <style>img[alt="www.OOOwebhost.com"]{display: none}</style>
  <style>
 img[alt="www.000webhost.com"]{display:none;}
 </style>
    <style type="text/css" src="style.css">
body {
  background-color: rgb(68, 87, 96) !important;
  margin: auto;
  margin-top:8%;
}

.form-signin {
  max-width: 320px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  font-size: 16px;
}

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      .form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


    </style>
</head>
<body>
    <div class="container">
    <div class="jumbotron wrapper text-center hoverable p-3 special-color-dark">
        <h2 class="text-white">Reset Password</h2>
        <img class="mb-4" src="logo.png" alt="" width="100" height="100">
        <p class="h3 mb-3 font-weight-normal text-white">Please Fill out this Form to reset your Password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-signin <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label class="text-white">New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>" placeholder="New Password">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-signin <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label class="text-white">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-signin">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-danger text-white" href="welcome.php" >Cancel</a>
            </div>
        </form>
    </div>    
    </div> 
    <div class="container">
        <!-- Footer -->
<footer class="page-footer">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" >
    &copy; &nbsp;<script>document.write(new Date().getFullYear());</script> SchoolHb, Inc.
    by &nbsp;<a href="https://twitter.com/hbouzourdaz21">@hbouzourdaz21</a>
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
   </div>
    <script LANGUAGE="JavaScript">
<!--
//Disable right click script III- By Renigade (renigade@mediaone.net) //Disable select-text script (IE4+, NS6+)- By Andy Scott //Visit http://hashem-earn-from-internet.blogspot.com/ 
var message=""; 
function clickIE() {
if (document.all) {
(message);return false;
}
} function clickNS(e) { 
if (document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) { (message); return false;
} } } if (document.layers) { document.captureEvents(Event.MOUSEDOWN); 
document.onmousedown=clickNS;
} else { document.onmouseup=clickNS;
document.oncontextmenu=clickIE; 
} document.oncontextmenu=new Function("return false")
function disableselect(e) { return false } function reEnable() { return true } 
document.onselectstart=new Function ("return false") //if NS6 if (window.sidebar){ document.onmousedown=disableselect document.onclick=reEnable } //
//-->
</SCRIPT> 
</body>
</html>