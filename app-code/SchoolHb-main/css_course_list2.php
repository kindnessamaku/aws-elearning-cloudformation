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
<html lang="en" dir="ltr">
<head>
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
  <title>SchoolHb | Courses</title>
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
  <style>img[alt="www.OOOwebhost.com"]{display: none}</style>  
</head>
<body>
    
    <!--Navbar -->
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
           <a class="nav-link" href="courses.php">HTML</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="programs.php">CSS</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="books.php">JavaScript</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="books.php">Bootstrap</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="books.php">Front-End Development</a>
         </li>
         <li class="nav-item dropdown ">
           <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">More
           </a>
           <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
             <a class="dropdown-item" href="https://vuejs.org/v2/guide/"><i class="fas fa-book"></i>  Vue Js</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="https://fr.reactjs.org/docs/getting-started.html"><i class="fas fa-book"></i>  React Js</a>
             <div class="dropdown-divider"></div>  
             <a class="dropdown-item" href="https://angular.io/docs"><i class="fas fa-book"></i> Angular</a>
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
<!--/.Navbar -->
    <div class="alert alert-primary" role="alert">
  .
</div>
      
    
<div class="container">
  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/cNyLs7YWFL8";
            $nom_vid="IELTS Reading strategies: True, False, Not Given";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/As4e8dtqBrk";
            $nom_vid="IELTS Reading";
            $chapitre="1";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/4PDgVEhfKso";
            $nom_vid="IELTS Reading: Top 10 Tips";
            $chapitre="1";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/bbDliT5EN-w";
            $nom_vid="How to succeed on IELTS Reading";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/yTOqXLWpUmQ";
            $nom_vid="IELTS Listening ";
            $chapitre="2";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/OualsHB1FqE";
            $nom_vid="IELTS Listening - Top 14 tips!";
            $chapitre="2";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/m54Vfvt_QD4";
            $nom_vid="IELTS & TOEFL Listening Practice: Academic Vocabulary ";
            $chapitre="2";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/Kxi4v9w299I";
            $nom_vid="IELTS & TOEFL - How to give your opinion";
            $chapitre="3";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/sRFEKvsw-vs";
            $nom_vid="IELTS Speaking Task 1 - How to get a high score";
            $chapitre="3";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/XyDrz6YAwvw";
            $nom_vid="IELTS Speaking Task 2 - How to succeed";
            $chapitre="3";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/TyYHs1-6Vls";
            $nom_vid="IELTS Speaking Task 3 - How to get a high score";
            $chapitre="3";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/lwL4YnMStEo";
            $nom_vid="Vocabulary: How to talk about ADVANTAGES and DISADVANTAGES";
            $chapitre="3";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/50syDdhrVPc";
            $nom_vid="IELTS & TOEFL Vocabulary: Talking about Food";
            $chapitre="3";
            break;
          case '8':/* Breakpoint */
            $lien="https://www.youtube.com/embed/PL_-z497Q-o";
            $nom_vid="IELTS & TOEFL Vocabulary - Technology";
            $chapitre="4";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/x1E2wLW9pn8";
            $nom_vid="IELTS - How to get a high score on Task 1 of the IELTS";
            $chapitre="4";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/F8WSzwBD7GQ";
            $nom_vid="Improve Your Writing - 6 ways to compare";
            $chapitre="4";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/I_WBuDKanQw";
            $nom_vid="IELTS Success – Studying Academic English at a School";
            $chapitre="4";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/i1XXR0kUKYk";
            $nom_vid="IELTS: Top 10 Spelling Mistakes";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/wF_7ha05kxY";
            $nom_vid="IELTS Writing: Numbers and Pie Charts";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/o9aVjBHEEbU";
            $nom_vid="How to write a good essay: Paraphrasing the question";
            $chapitre="4";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/KNXvnbxU61w";
            $nom_vid="IELTS Writing Task 1: How to describe a process";
            $chapitre="4";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/3oyx0-0DZrA";
            $nom_vid="Emma's TOP 15 STUDY TIPS";
            $chapitre="4";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/QC8vN3GVQhI";
            $nom_vid="IELTS Writing Task 1: How to describe BAR GRAPHS";
            $chapitre="4";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/10auVRva1Jk";
            $nom_vid="Read, Understand, and Remember! Improve your reading skills with the KWL Method";
            $chapitre="4";
            break;
          default:
            # code...
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language.php" style="color:white;">Language</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_english.php" style="color:white;">English</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="language_english_emma.php" style="color:white;">IELTS lessons</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>
<hr>

<div class="video_accordian_container">
    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <hr>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <?php
            if (isset($chapitre)){
              switch ($chapitre) {
                case '1':
                  echo '<!-- Détails chapitre 1 -->
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapter 1 : Reading
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="css_course_list2.php?video=1">&#10170  IELTS Reading strategies: True, False, Not Given</a><br>
                        <a href="css_course_list2.php?video=10">&#10170  IELTS Reading</a><br>
                        <a href="css_course_list2.php?video=11">&#10170  IELTS Reading: Top 10 Tips</a><br>
                        <a href="css_course_list2.php?video=12">&#10170  How to succeed on IELTS Reading</a><br>
                      </div>
                    </div>
                  </div> <hr>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 :  Listening
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="css_course_list2.php?video=2">&#10170  IELTS Listening </a><br>
                        <a href="css_course_list2.php?video=3">&#10170  IELTS Listening - Top 14 tips!</a><br>
                        <a href="css_course_list2.php?video=17">&#10170  IELTS & TOEFL Listening Practice: Academic Vocabulary </a><br>
                      </div>
                    </div>
                  </div> <hr>';
                  break;
                case '3':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapter 3 : Speaking
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="css_course_list2.php?video=4">&#10170  IELTS & TOEFL - How to give your opinion</a><br>
                        <a href="css_course_list2.php?video=5">&#10170  IELTS Speaking Task 1 - How to get a high score</a><br>
                        <a href="css_course_list2.php?video=6">&#10170  IELTS Speaking Task 2 - How to succeed</a><br>
                        <a href="css_course_list2.php?video=7">&#10170  IELTS Speaking Task 3 - How to get a high score</a><br>
                        <a href="css_course_list2.php?video=16">&#10170  Vocabulary: How to talk about ADVANTAGES and DISADVANTAGES</a><br>
                        <a href="css_course_list2.php?video=18">&#10170  IELTS & TOEFL Vocabulary: Talking about Food</a><br>
                        </div>
                    </div>
                  </div> <hr>';
                  break;
                case '4':
                  echo '<!-- Détails  chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Other tips
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="css_course_list2.php?video=8">&#10170  IELTS & TOEFL Vocabulary - Technology</a><br>
                        <a href="css_course_list2.php?video=9">&#10170  IELTS - How to get a high score on Task 1 of the IELTS</a><br>
                        <a href="css_course_list2.php?video=13">&#10170  Improve Your Writing - 6 ways to compare</a><br>
                        <a href="css_course_list2.php?video=14">&#10170  IELTS Success – Studying Academic English at a School</a><br>
                        <a href="css_course_list2.php?video=15">&#10170  IELTS: Top 10 Spelling Mistakes</a><br>
                        <a href="css_course_list2.php?video=19">&#10170  IELTS Writing: Numbers and Pie Charts</a><br>
                        <a href="css_course_list2.php?video=20">&#10170  How to write a good essay: Paraphrasing the question</a><br>
                        <a href="css_course_list2.php?video=21">&#10170  IELTS Writing Task 1: How to describe a process</a><br>
                        <a href="css_course_list2.php?video=22">&#10170  Emma\'s TOP 15 STUDY TIPS</a><br>
                        <a href="css_course_list2.php?video=23">&#10170  IELTS Writing Task 1: How to describe BAR GRAPHS</a><br>
                        <a href="css_course_list2.php?video=24">&#10170  Read, Understand, and Remember! Improve your reading skills with the KWL Method</a><br>
                      </div>
                    </div>
                  </div> <hr>';
                  break;
              }
            }
          ?>
        </div>
    </div>
</div>
</div>


    
    
    
    
    
    
     <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

<!-- Footer Elements -->
<div class="container">
        
<div align="center">
    <a href="#" class="btn btn-red btn-xl shadow text-center "  >Subscribe</a></div>
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
          <a href="html.php">HTML</a>
        </p>
        <p>
          <a href="css.php">CSS</a>
        </p>
        <p>
          <a href="js.php">JavaScript</a>
        </p>
        <p>
          <a href="bootstrap.php">Bootstrap</a>
        </p>
        <p>
          <a href="front_end_development.php">Front-End Development</a>
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