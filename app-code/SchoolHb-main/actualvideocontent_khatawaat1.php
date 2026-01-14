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
            $lien="https://www.youtube.com/embed/S8RO2w3I8AA";
            $nom_vid="STEP 1 - Arabic Alphabet - Part 1- HOW TO WRITE";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/hA3Uji7xmRc";
            $nom_vid="STEP 2 - Arabic Alphabet - Part 2 HOW TO WRITE the Arabic Alphabet";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/YSR6p9TnIv4";
            $nom_vid="STEP 3 - Letter Positions- HOW TO CONNECT LETTERS";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/itY0cDzs95o";
            $nom_vid="STEP 4 - HOW TO CONNECT LETTERS IN ARABIC- HOW TO WRITE WORDS IN ARABIC";
            $chapitre="1";
            break;
          case '4':/* Breakpoint */
            $lien="https://www.youtube.com/embed/p_reEdOrpIc";
            $nom_vid="STEP 5 -ARABIC LONG & SHORT VOWELS - HOW TO PRONOUNCE ARABIC";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/4m3zC1emOvA";
            $nom_vid="STEP 6 -READ & WRITE ARABIC Words with LONG & SHORT Vowels";
            $chapitre="2";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/o1q23Itv_HM";
            $nom_vid="STEP 7- ARABIC SOUNDS- LETTER SOUNDS/Deep and Frontal Sound Free Step by Step Arabic Lessons.";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/zazg7vp3vc4";
            $nom_vid="STEP 8 - HOW TO READ IN ARABIC- Arabic for Beginners- Free Step By Step Arabic Lessons- READING 1";
            $chapitre="2";
            break;
          case '9':/* Breakpoint */
            $lien="https://www.youtube.com/embed/CVRsFILOEDs";
            $nom_vid="STEP 10 - ARABIC POSSESSIVE PRONOUNS/ ARABIC FEMININE AND MASCULINE ضمائر الملكية - المؤنث و المذك";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/bDLLe9RymwQ";
            $nom_vid="STEP 9 - ADJECTIVES IN ARABIC- Free Step by Step Arabic Lessons, Feminine and Masculine.";
            $chapitre="3";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/7e8xk0gXYs8";
            $nom_vid="STEP 11- Arabic Feminine/Masculine- HOW TO WRITE A TWO WORD SENTENCE IN ARABIC";
            $chapitre="3";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/ffxL_49NQuA";
            $nom_vid="Step 12 -Def/indef- HOW TO DEFINE WORDS IN ARABIC Definite Article'Alif Laam' المعرفة والنكر";
            $chapitre="3";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/0uHnHOP452U";
            $nom_vid="Learning Tips- HOW TO MEMORIZE THE ARABIC ALPHABET - Learning Steps -";
            $chapitre="3";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/z_lr3L75ip8";
            $nom_vid="Arabic Verbs- Practice#7- Negation with Arabic Verbs. DON'T/ DOESN'T+Verb";
            $chapitre="3";
            break;
          case '15':/* Breakpoint */
            $lien="https://www.youtube.com/embed/hezbsci28oY";
            $nom_vid="Arabic Questions- Practice#6- How to ask in Arabic? - Practice using من؟ هل ؟ ما؟ ماذا؟";
            $chapitre="4";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/hezbsci28oY";
            $nom_vid="Arabic Nouns- Practice#4 Learn Arabic vocabulary by categories (People, Places, Objects, Drinks).";
            $chapitre="4";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/txd8ksSsIRo";
            $nom_vid="Free Arabic Lessons #learn_arabic تعلم_ العربية# Months of the Year in Arabic-/Seasons of the Year";
            $chapitre="4";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/W2tY4v5vJC0";
            $nom_vid="Arabic Phrases 1- Questions-How was your weekend in Arabic?";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/KQnCrcbGSBg";
            $nom_vid="Arabic Places and Expressions Part 1-Form Sentences الأماكن What do do you in these places?";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/PnzfOIlLLig";
            $nom_vid="Free Arabic Lessons #learn_arabic تعلم_ العربية# HOW TO CONNECT THE ARABIC LETTERS? -Arabic Classes-";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_arabic.php" style="color:white;">Arabic</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="language_arabic_arabic_khatawaat1.php" style="color:white;">Arabic language for beginners</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>


<div class="video_accordian_container">
    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="iframe-container">
            <iframe width="950" height="550" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
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
                          Chapter 1 : How to write in Arabic
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=1">&#10170  STEP 1 - Arabic Alphabet - Part 1- HOW TO WRITE</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=2">&#10170  STEP 2- Arabic Alphabet - Part 2 HOW TO WRITE the Arabic Alphabet</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=3">&#10170  STEP 3 - Letter Positions- HOW TO CONNECT LETTERS</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=5">&#10170  STEP 4 - HOW TO CONNECT LETTERS IN ARABIC- HOW TO WRITE WORDS IN ARABIC.</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 : How to read in Arabic
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=4">&#10170  STEP 5 -ARABIC LONG & SHORT VOWELS - HOW TO PRONOUNCE ARABIC</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=6">&#10170  STEP 6 -READ & WRITE ARABIC Words with LONG & SHORT Vowels</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=7">&#10170  STEP 7- ARABIC SOUNDS- LETTER SOUNDS/Deep and Frontal Sound Free Step by Step Arabic Lessons.</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=8">&#10170  STEP 8 - HOW TO READ IN ARABIC- Arabic for Beginners- Free Step By Step Arabic Lessons- READING 1</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '3':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapter 3 : Pronouns and Adjectives
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=9">&#10170  STEP 10 - ARABIC POSSESSIVE PRONOUNS/ ARABIC FEMININE AND MASCULINE ضمائر الملكية - المؤنث و المذكر</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=10">&#10170  STEP 9 - ADJECTIVES IN ARABIC- Free Step by Step Arabic Lessons, Feminine and Masculine.</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=11">&#10170  STEP 11- Arabic Feminine/Masculine- HOW TO WRITE A TWO WORD SENTENCE IN ARABIC</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=12">&#10170  Step 12 -Def/indef- HOW TO DEFINE WORDS IN ARABIC Definite Article"Alif Laam" المعرفة والنكرة</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=13">&#10170  Learning Tips- HOW TO MEMORIZE THE ARABIC ALPHABET - Learning Steps -</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=14">&#10170  Arabic Verbs- Practice#7- Negation with Arabic Verbs. DON\'T/ DOESN\'T+Verb</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Practicing examples
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=15">&#10170  Arabic Questions- Practice#6- How to ask in Arabic? - Practice using من؟ هل ؟ ما؟ ماذا؟</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=16">&#10170  Arabic Nouns- Practice#4 Learn Arabic vocabulary by categories (People, Places, Objects, Drinks).</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=17">&#10170  Free Arabic Lessons #learn_arabic تعلم_ العربية# Months of the Year in Arabic-/Seasons of the Year</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=18">&#10170  Arabic Phrases 1- Questions-How was your weekend in Arabic?</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=19">&#10170  Arabic Places and Expressions Part 1-Form Sentences الأماكن What do do you in these places?</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=20">&#10170  Free Arabic Lessons #learn_arabic تعلم_ العربية# HOW TO CONNECT THE ARABIC LETTERS? -Arabic Classes-</a><br>
                      </div>
                    </div>
                  </div>';
                  break;

                default:
                  // code...
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