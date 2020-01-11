<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fairy books</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<!-- <link rel="stylesheet" href="css/pokedex.css" /> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <!-- =======================================================
    Theme Name: Kelly
    Theme URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

<style>

/*
    Theme Name: Kelly
    Theme URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
*/
/* ==== Google font ==== */
@import url('https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700');
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
/* === fontawesome === */
@import url('font-awesome.css');


/* ===================================
 General
==================================== */

*{

	box-sizing:border-box;
	margin:0;
}

body {
	font-family:'Open Sans', Arial, sans-serif;
	font-size:16px;
	font-weight:300;
	line-height:1.6em;
	overflow-x:hidden;
	background-color:#FF99CC;
	border:solid 10px #F06292 ;
 }


 /* .container{
	
	height:1100px;
	background-image:url(../img/nostalgic.jpg);
	background-size: cover;
	background-repeat:no-repeat;
	z-index:1;

} */

.page {   
	/* margin: 50px auto; */
    /* max-width: 1200px; */
    /* border: 1px solid #eee; */
    padding: 0;  
    width: 100%;
  	height:100%
}

/* .contact-area, .mar-bot40, .tab-content {
    margin-top: 60px;
} */

#header {
	overflow: hidden;
	background-color:#FF99CC;
	width:1400px;		
}

.nav-tabs {
	overflow: hidden;	
	border-bottom:0;
	position:relative;
}
.nav-tabs li {
	float: left;
	width: 190px;
	list-style: none;
	margin-bottom:0;	
}
.nav-tabs li.box {
	width: auto;
}
.nav-tabs li a {
	display: block;
	position: relative;
	height: 150px;
	-webkit-transition: color ease .4s, background ease .4s;
	-moz-transition: color ease .4s, background ease .4s;
	-ms-transition: color ease .4s, background ease .4s;
	-o-transition: color ease .4s, background ease .4s;
	transition: color ease .4s, background ease .4s;
	color: #fff;
	text-decoration: none;
	border-radius:0;
	margin-left:0;
	margin-bottom:15px;
}

.nav-tabs li.sylveon img
 {
	width:180px;
	margin-left:16px;
	margin-right:-16px;	
	color:white;
	position:absolute;
	left:810px;
	top:-10px;
	z-index:1;
}

.nav-tabs li.profile a {
	background:#CC66FF ;
	margin-left:16px;
	margin-right:-16px;
	color:white;
}
.nav-tabs li.pokedex a {
	background: #FF00CC;
	margin-left:16px;
	margin-right:-16px;
}

.nav-tabs li.board a {
	background: #EA4C89;
	margin-left:16px;
	margin-right:-16px;
}
.nav-tabs li.contact a {
	background: #32CDFB;
	margin-left:16px;
	margin-right:-16px;
}

.nav-tabs li.login a {
	background:  #FF3366 ;
	/* margin-left:16px;
	margin-right:-16px; */
	width:50%;
}

.nav-tabs li.sign a {
	background: #FF00FF ;
	/* margin-left:16px;
	margin-right:-16px; */
	width:50%;
}

.nav-tabs li a:hover{
	background: #fff !important;
	border-radius:0;
}
.nav-tabs li a span {
	font-size: 50px;
	line-height: 50px;
	display: block;
	position: absolute;
	top:50px;
	right:60px;
	text-align:center;
	overflow: hidden;
	font-weight: normal;
	left:50px;		
}

.nav-tabs li.portfolio a span {top: 50px;}
.nav-tabs li.contacts a span {left: 50px;}
.nav-tabs li.facebook a span {right: 50px;}
.nav-tabs li a:hover,
.nav-tabs li.current a {
	color: #ccc;
}

.profile_photo {
	float: left;
	/* min-height: 150px; */
	height:830px;
	/* background: #323232; */
	width: 1350px;
	background:url(img/nostalgic.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	border:10px groove #FF33FF; 
}
.profile_photo img {
	vertical-align: top;
	width: 100%;
	height: auto;
}
.profile_name {
    background: none repeat scroll 0 0 #FF0066 ;
    float: left;
    height:150px;
    width: 1350px;
	text-decoration:none;
	padding-left:20px;
}

.profile_name a .name {
	padding-top:130px;
	margin-top:50px;
    font-weight: 700;
	text-align:center;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-size: 40px;
	text-decoration:none;
	color:#fff;
	
}
.profile_name a:hover {
	text-decoration:none;
}

.profile_name .profile_inner {
	text-align:center;
	font-size:18px;
	color:#fff;	
}


/* --- tab-content --- */
.tab-content {
	background-color:#fff;
	margin-top:-100px;
}
.tab-pane#profile {
	border-bottom:0;
	border-top:0;
}

.download {
	text-align:center;
	color:#50c0e9;
	text-decoration:none;
}

.download:hover {
	
	color:#1892BF;
	text-decoration:none;
}


/* --- contact --- */

.tab-pane#contacts {
	background-color:#fff;
}

/*===========================
  Portfolio
============================ */
/* --- section heading --- */
.section-header {
	text-align: center;
	padding-top:120px;
	margin:0 auto;
  font-size:30px;	
}
.section-header h2 {
	text-transform: uppercase;
	font-weight: 700;
	color:#FF0033 ;
	padding-bottom:40px;
}
.section-header p {
	color:#FF0033 ;
	padding-top: 10px;
	padding-bottom:40px;
	font-size:30px;
}
#section-works {
	margin-top:-100px;
	background-color: #fff;
}

nav#filter a {
	background-color: #EEE;
	color:#555;	
}

nav#filter a:hover, nav#filter a.current {
	background-color: #50c0e9;
	color:#fff;
}

nav#filter {
	margin-bottom:1.5em;
}

nav#filter li {
	display:inline-block;
	margin:0 0 0 5px;
}
nav#filter a {
	padding: 4px 12px;
	line-height: 20px;
	text-decoration: none;
}
nav#filter ul {
	margin-top:30px;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}


input{
   width:300px;
	 height:30px;
}


#footer {
	margin-top:10px;
	text-align:center;
	margin-bottom:60px;
	color:#666;
	font-size:20px;
	padding-top:30px;
}
.footer_copyright a {
	color:#50C0E9;
	text-decoration:none;
}
.footer_copyright a:hover {
	color:#199DCC;
	
}

</style>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="page">
        <header id="header">
          <ul class="nav nav-tabs" role="tablist">
            <li class="sylveon"><img src="img/Sylveon.png"></li>
            <li class="profile"><a href="profile.php">About us</a></li>
            <li class="pokedex"><a href="pokedex.php">Pokedex</a></li>
            <li class="board"><a href="Bulletinboard.php">Bulletin board</a></li>
            <li class="contact"><a href="Contact.php">Contact us</span></a></li>
            <li class="login"><a href="login.php">Login</span></a></li>
            <li class="sign"><a href="signup.php">Sign up</span></a></li>
								
						<div class="box">
              <div class="profile_photo">
								<!-- <img src="img/allfairy.jpg" alt="" class="img-responsive"> -->
								<div class="section-header">
									<form action="" method="post">
									 <h2>Contact form</h2><br>
									 <p>Please share your opinion to improve our Website.</p>
											
									 Name:<input type="text" name="pname"><br><br>
									 
									 Message:<textarea name="message"  cols="30" rows="10" placeholder="Give us your opinion!!"></textarea><br>
												
											<input type="submit" name="send" value="Send">
	
									</form>
								</div>
              </div>
		         
          </ul>
        </header>
        <!-- /Header -->
      </div>
    </div>
  </div>
 
    
            
    <a href="index.php" class="download"><h2>Go back to the top</h2></a>
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"> </i></a>

    <footer id="footer">
      <div class="footer_copyright">
        Copyright &copy; Kosei Suzuki. All rights reserved.
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Kelly
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>

</body>

</html>
