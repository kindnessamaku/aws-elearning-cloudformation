<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | <?php echo htmlspecialchars($_SESSION["username"]); ?></title>
  
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
 <meta name="google-site-verification" content="6s-xqNZ6z2XQ-fHwS0LzQSKn2gq-DJDDpnCySJ5E2AU" />
    
</head>
<body>
<nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark special-color-dark">
      <a class="navbar-brand" href="index.html">
       <img src="logo.png" width="(30)" height="30" class="d-inline-block align-top" alt="" loading="lazy">
     </a>
     <div style="color:white;">School<span style="color:orange;">Hb&nbsp;&nbsp;&nbsp;</span></div>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
       aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
       <ul class="navbar-nav mr-auto">
           .
         <li class="nav-item active">
           <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Home
             <span class="sr-only">(current)</span>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="html_course_1.php">HTML</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="computer_science_python_thenewbaghdad.php">Python</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="computer_science_c++_thenewboston.php">C++</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="computer_science_java_learninglad.php">JAVA</a>
         </li>
         <li class="nav-item dropdown ">
           <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">Languages
           </a>
           <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
             <a class="dropdown-item" href="language_english_emma.php"><i class="fas fa-book"></i>  English</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="language_french_lingoni.php"><i class="fas fa-book"></i>  French</a>
           </div>
         </li>
       </ul>  
       <ul class="navbar-nav ml-auto nav-flex-icons">
           
         <li class="nav-item ">
               
           <a class="nav-link waves-effect waves-light" href="https://twitter.com/hbouzourdaz21" target="_blank">
             <i class="fab fa-twitter"></i>
           </a>
         </li>
           <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://facebook.com/hbouzourdaz97" target="_blank">
             <i class="fab fa-facebook"></i>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://instagram.com/h_bouzourdaz" target="_blank">
             <i class="fab fa-instagram"></i>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://github.com/hbouzourdaz" target="_blank">
             <i class="fab fa-github"></i>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://linkedin.com/hbouzourdaz" target="_blank">
             <i class="fab fa-linkedin"></i>
           </a>
         </li>
       <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://www.youtube.com/channel/UC9zuAcoQFtLEnOUD61sjHrg/?sub_confirmation=1" target="_blank">
             <i class="fab fa-youtube"></i>
           </a>
           </li>
       
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-right dropdown-default"
               aria-labelledby="navbarDropdownMenuLink-333">
               <a class="dropdown-item" href="reset-password.php" title="Rest your Password"><i class="fas fa-key"></i>  Change Password</a>
               <a class="dropdown-item" href="logout.php" ><i class="fas fa-sign-out-alt"></i>  Sign Out</a>
             </div>
           </li>
       </ul>
         
     </div>
   </nav>
<div class="alert alert-primary" role="alert">
  .
</div>
    
    

    
    
<!--/.Navbar -->
    



    
  <!-- Page Content -->
  <div class="container">
<div class="alert alert-success fade show" role="alert"><center>
مرحبا بك في موقعنا <br>Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> to <a  class="alert-link">SchoolHb</a>:)
   </center></div><!--botton type="botton" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>      
    <!--</botton>   
      
      
      
      
    
    <!-- Jumbotron Header -->
  <!-- News jumbotron -->
      
<div class="jumbotron text-center hoverable p-4 special-color-dark">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class="view overlay">
        <img src="logo.png" class="img-fluid"  alt="">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->
      <a href="#" class="blue-text">
        <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> DZ School</h6>
      </a>

      <h4 class="h4 mb-4 text-white " >School<span style="color:orange;">Hb&nbsp;&nbsp;&nbsp;</span></h4>

      <p class="font-weight-normal text-white ">Hello, my name's Hakim Bouzourdaz<br> 
In the hope to present useful content to you in this space, my website is particularly interested in technology, Programming, Graphic Design as well as useful educational videos, Inshallah.🌷</p>
        
      <p class="font-weight-normal text-white">by <a href="https://linktr.ee/hbouzourdaz"><b style="color:white;">Hakim Bouzourdaz</b></a>, 13/08/2020</p>
      <p class="font-weight-normal text-white">You can visite my YT Channel & GitHub Account</p>  

      <a href="https://github.com/hbouzourdaz" target="_blank"><button type="button" class="btn btn-black btn-rounded waves-effect waves-light "><i class="fab fa-github"></i>   GitHub</button></a>  
      <a href="https://www.youtube.com/channel/UC9zuAcoQFtLEnOUD61sjHrg/?sub_confirmation=1" target="_blank"><button type="button" class="btn btn-red btn-rounded waves-effect waves-light"><i class="fab fa-youtube"></i>   YouTube</button></a>  
        

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>

<div class="alert alert-success fade show" role="alert"><center>
Programming Courses
   </center></div>     
      
      
<!-- News jumbotron -->

    <!-- Page Features -->
    <div class="row text-center ">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 hoverable">
            <div class="view overlay"> 
          <img class="card-img-top" src="https://cdn.hipwallpaper.com/m/32/68/h6rLgA.jpg" alt="">
               <a>
          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
          <div class="card-body">
            <h4 class="card-title">HTML</h4>
            <p class="card-text" style="font-size: 18px">Learn HTML from scratch while coding your own project step-by-step with Expert Instructors</p>
          </div>
          <div class="card-footer">
            <a href="html_course_1.php" class="btn blue-gradient"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;المزيد</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 hoverable">
            <div class="view overlay"> 
          <img class="card-img-top" src="img/img_6.jpg" alt="">
               <a>
          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
          <div class="card-body">
            <h4 class="card-title">Python</h4>
            <p class="card-text" style="font-size: 18px">Learn Python, a powerful language used by sites like YouTube and Dropbox. Learn the fundamentals of programming to build web apps and manipulate data.</p>
          </div>
          <div class="card-footer">
            <a href="computer_science_python_thenewbaghdad.php" class="btn blue-gradient"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;المزيد</a>
          </div>
        </div>
      </div>

       <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 hoverable">
          <div class="view overlay"> 
          <img class="card-img-top" src="img/img_4.jpg" alt="">
               <a>
          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
          <div class="card-body">
            <h4 class="card-title">C++</h4>
            <p class="card-text" style="font-size: 17px">C++ Tutorial | Learn C++ Programming for beginners and professionals with examples on constructor, if-else, switch, break, continue, comments, arrays,</p>
          </div>
          <div class="card-footer">
            <a href="computer_science_c++_thenewboston.php" class="btn blue-gradient"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;المزيد</a>
          </div>
        </div>
      </div> 
        
        
        
        
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 hoverable">
            <div class="view overlay"> 
          <img class="card-img-top" src="img/img_5.jpg" alt="">
               <a>
          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
          <div class="card-body">
            <h4 class="card-title">JAVA</h4>
            <p class="card-text" style="font-size: 18px">Java is a powerful general-purpose programming language. Our Java tutorial will guide you to learn Java one step at a time with the help of examples.</p>
          </div>
          <div class="card-footer">
            <a href="computer_science_java_learninglad.php" class="btn blue-gradient"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;المزيد</a>
          </div>
        </div>
      </div>

    </div>
    <div class="alert alert-success fade show" role="alert"><center>
Languages Courses
   </center></div>   
    <div class="row text-center ">

      <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100 hoverable">
            <div class="view overlay"> 
          <img class="card-img-top" src="img/img_1.jpg" alt="">
               <a>
          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
          <div class="card-body">
            <h4 class="card-title">English</h4>
            <p class="card-text" style="font-size: 18px">Learn English Free Online - Helping people to learn British English. For the love of English.</p>
          </div>
          <div class="card-footer">
            <a href="language_english_emma.php" class="btn blue-gradient"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;المزيد</a>
          </div>
        </div>
      </div>

       <div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100 hoverable">
          <div class="view overlay"> 
          <img class="card-img-top" src="img/img_2.jpg" alt="">
               <a>
          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
            </div>
          <div class="card-body">
            <h4 class="card-title">French</h4>
            <p class="card-text" style="font-size: 17px">Free French Lessons Online with Audio. No sign up required. Learn French now! Beginner & Intermediate Level.</p>
          </div>
          <div class="card-footer">
            <a href="language_french_lingoni.php" class="btn blue-gradient"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;المزيد</a>
          </div>
        </div>
      </div> 

    </div>
    <!-- /.row -->

  </div>
    
  <!-- /.container -->  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">
          
  <div align="center">
      <a href="https://linktr.ee/hbouzourdaz" class="btn btn-red btn-xl shadow text-center ">Subscribe</a></div>
  </div>
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">
  
      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">School<span style="color:orange;">Hb&nbsp;&nbsp;&nbsp;</span></h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>You can visit my personel account on:</p>
          <ul class="list-unstyled list-inline text-center">
        
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1" href="https://facebook.com/hbouzourdaz2I">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1" href="https://twitter.com/hbouzourdaz21">
                <i class="fab fa-twitter"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1" href="https://instagram.com/hbouzourdaz21">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-dribbble mx-1" href="https://www.youtube.com/channel/UC9zuAcoQFtLEnOUD61sjHrg/?sub_confirmation=1">
                <i class="fab fa-youtube"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1" href="https://github.com/hbouzourdaz">
                <i class="fab fa-github"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1" href="https://linkedin.com/hbouzourdaz">
                <i class="fab fa-linkedin"> </i>
              </a>
            </li>
          </ul>
  
      </div>
      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="privacy.html">Privacy Policy</a>
        </p>
        <p>
          <a href="terms.html">Terms</a>
        </p>
  
      </div>
      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  
        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Category</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="html_course_1.php">HTML</a>
        </p>
        <p>
          <a href="computer_science_python_thenewbaghdad.php">Python</a>
        </p>
        <p>
          <a href="computer_science_c++_thenewboston.php">C++</a>
        </p>
        <p>
          <a href="computer_science_java_learninglad.php">JAVA</a>
        </p>
        <p>
          <a href="language_english_emma.php">English</a>
        </p>
        <p>
          <a href="language_french_lingoni.php">French</a>
        </p>
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="https://www.google.com/maps/place/Beni+Ourtilane/@36.431185,4.7385733,12z/data=!3m1!4b1!4m5!3m4!1s0x128cd99e0e693383:0x9e7e9b31ce1bfe4a!8m2!3d36.441325!4d4.8505566"><i class="fas fa-home mr-3"></i> Sétif, Beni Ouertilane, ALGERIA</a></p>
        <p></p>
          <a href="mailto:hbouzourdaz@gmail.com"><i class="fas fa-envelope mr-3"></i> hbouzourdaz@gmail.com</a>  
        </p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 213 792573095</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 213 780559817</p>
  
      </div>
      <!-- Grid column -->
  
    </div>
    <!-- Grid row -->
  
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" >
    &copy; &nbsp;<script>document.write(new Date().getFullYear());</script> SchoolHb, Inc.
    by &nbsp;<a href="https://twitter.com/hbouzourdaz21">@hbouzourdaz21</a>
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->  
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="http://hakim-tech.tk/js.js"></script>
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
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="103537604888325">
      </div>
</html>