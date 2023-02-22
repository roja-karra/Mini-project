<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<html>
<head>
<meta charset="utf-8">
	<title>Drop-Down Menu design</title>
	<link rel="stylesheet" type="text/css" href="dropDownMenu.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/styles/styles_nw.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/bootstrap-submenu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--===Link Section Ends===-->

    <!--===SCRIPT Section===-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/scripts/bootstrap-submenu.js">

    </script>
    <!--===SCRIPT Section Ends===-->
    
    <meta name="google-site-verification" content="azVFZY8pHbbUOdsCpZSoY3t9DTQ_EwTTRimJCDO54K8" />
    <style>
      *defaults & whole*/
*
{
  outline:none !important;
}
html,body
{
  background-image: url(../images/pattern.png);
  background-color: black!important;
}

a:hover
{
  text-decoration: none !important;
  color:#fff !important;
  opacity: 0.8;
}

.deptLinks a:hover,.noteLink:hover,.marquee-link:hover
{
    color:#000 !important;
}

h6
{
  color: #629dce;
}

tr,td{
    border:1px solid #333 !important;
    background-color:black !important;
}


/*header*/
.header
{
  background-color:black;
  width: 100%;
  border: 5px solid #00baff;
  border-width: 5px 0px;
  padding: 5px 0px 0px;
}

.header header
{
  width: 75%;
  height: 140px;
}

header img
{
  height: 100%;
  width: 100%;
}

@media only screen and (max-width: 990px){
.header header
{
  width: 100%;
  height:90px;
}
    
}
nav
{
  border-top:1px solid black;
}

.navbar-nav
{
  text-align: center;
  margin:auto;
  background-color: black;
}

.navbar-nav .nav-item
{
  border-right: 1px solid black;
}

.nav-item a
{
    color: white !important;
}

.nav-item:hover
{
  cursor: pointer;
  background-color:grey !important;
}

.navbar-nav .nav-item:last-child
{
  border:0px;
}

.dropdown-menu
{
  background-color:black !important;
}

.dropdown-item
{
  color: #fff !important;
}

.dropdown-item:hover,.dropdown-item:focus
{
  background-color:grey!important;
    border-radius: 3px;
}

.scroller
{
  padding: 5px 0px;
  width: 100%;
  text-align: center;
  background-color: #fff;
  font-size: 13px;
  font-weight: bold;
  color: #ff1493;
}

#sliderBox
{
  position: relative;
}
@media only screen and (max-width: 990px)
{
.carousel-item img
{
    height:250px !important;
}
}
.quickLinks
{
  background-image: url(../images/quick.jpg);
  bottom:0px;
  position: absolute;
  justify-content: center;
  background-position: left;
  background-attachment: fixed;
  border-top: 1px solid #00baff;

}
.quickLinks a
{
  display: inline-block;
  text-align: center;
  color: #fff;
  font-weight: bold;
  border-right: 1px solid #00baff;
}

.quickLinks a:last-child
{
  border:0px;
}

.section-header
{
  color: #0d3b53;
  border-top: 1.5px solid #ccc;
  border-bottom: 1.5px solid #ccc;
}

.mon
{
  background-color: #0d3b53;
  text-align: center !important;
}

.news-date
{
  border: 1px solid  #0d3b53;
  width: 50px;
  text-align: center !important;
  font-size: 13px;
  max-height: 41px !important;
}

.notify-news:hover
{
    color:#000 !important;
}

.date
{
  color: #0d3b53;
}

footer
{
  background-color: #0d3b53;
  border-top: 5px solid #00baff;
}

footer h5
{
  color: #dfb004;
}
.section-header
{
  background-image: url(../images/secPattern.jpg);

}

.dataBox
{
  background-color: #fff;
  border: 2px solid #0d3b53;
}

.dataBox h3
{
  color: blue;
}

.dataBox .side-links li
{
  color: #fff;
  border-bottom: 1px dotted #ccc;
}
.dataBox .side-links a li:hover
{
  background-color: #fff;
  color: #000;
}

.prof
{
  background-color: #0b5d8d;
}

/*tenders*/
thead tr
{
  background-color: #0b5d8d !important;
  color: #fff;

}

table a:hover
{
    color:#111 !important;
}


/*Address Page*/
#address
{
  background-color: #0b5d8d !important;
  color: #fff;
}

/*Web Team*/

.our-team{
    overflow: hidden;
    position: relative;
    width:250px !important;
}

.webTeam
{
    width:250px !important;
}

.our-team:after{
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(43, 193, 234, 0.6);
    position: absolute;
    top: -100%;
    left: 0;
    opacity: 0;
    transition: all 0.8s ease 0s;
}
.our-team:hover:after{
    top: 0;
    opacity: 1;
}
.our-team img{
    width: 100%;
    height: auto;
}
.our-team .social{
    width: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
    position: absolute;
    top: -50%;
    left: 0;
    z-index: 1;
    transform: translateY(-50%) rotate(-12deg);
    transition: all 0.8s ease 0s;
}
.our-team:hover .social{ top: 50%; }
.our-team .social li{ display: inline-block; }
.our-team .social li a{
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: #0b579f;
    font-size: 15px;
    color: #fff;
    margin: 0 5px;
}
.our-team .team-content{
    width: 100%;
    padding: 20px 25px;
    background: #fff;
    border-bottom: 3px solid #0b579f;
    text-transform: uppercase;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
}
.our-team:hover .team-content{ background: #f9f9f9; }
.our-team .team-content:before{
    content: "";
    width: 100%;
    border-right: 420px solid #fff;
    border-top: 60px solid transparent;
    position: absolute;
    top: -60px;
    left: 0;
}
.our-team:hover .team-content:before{ border-right-color: #f9f9f9; }
.our-team .team-content:after{
    content: "";
    width: 3px;
    height: 50%;
    background: #0b579f;
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
}
.our-team .title{
    font-size: 18px;
    color: #333;
    margin: 0;
}
.our-team .post{
    display: block;
    font-size: 12px;
    font-weight: 400;
    color: #888;
    margin-top: 3px;
}

@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    .fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}

.fac-prof,.about-data
{
    background-color:black;
}
.dropdown-submenu.dropright .dropdown-menu {
  margin-left: 1px;
}

.dropdown-submenu.dropleft .dropdown-menu {
  margin-right: 1px;
}

[x-placement^="bottom-"] .dropdown-submenu .dropdown-menu,
.navbar .dropdown-submenu .dropdown-menu {
  bottom: auto;
  margin-top: calc(-0.5rem - 1px);
}

[x-placement^="top-"] .dropdown-submenu .dropdown-menu {
  top: auto;
  bottom: 0;
  margin-bottom: calc(-0.5rem - 1px);
}

.dropdown-submenu.dropright > .dropdown-toggle {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.dropdown-submenu.dropright > .dropdown-toggle::after {
  margin-right: -12px;
}
        {
    padding: 0;
    margin: 0;

}
.menu-bar
{
    background-color:black;
    text-align: center;
}
.menu-bar ul{
    display: inline-flex;
    list-style: none;
    color: white;
}
.menu-bar ul li{
    width: 120px;
    margin: 2px;
    padding: 10px;


}
.menu-bar ul li a{
    text-decoration: none;
    color: darkred;
}
.active,.menu-bar ul li:hover
{
  background: black;
  border-radius: 3px;
}
.menu-bar .font-family{
    margin-right: 2px ;
}
.sub-menu-1
{
    display: none;
}
.menu-bar ul li:hover .sub-menu-1
{
    display: block;
    position: absolute;
    background: white;
    margin-top: 15px;
    margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
    display: block;
    margin: 10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li{
    width: 150px;
    padding: 10px;
    border-bottom: 1px dotted darkred;
    background: transparent;
    text-align: left;

}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child
{
    border-bottom: none;
}
.menu-bar ul li:hover .sub-menu-1 ul li a:hover
{
    color: darkred;
}
.fa-angle-right
{
    float: right;
}
.sub-menu-2
{
    display: none;
}
.hover-me:hover .sub-menu-2
{
    position: absolute;
    display: block;
    margin-top: -40px;
    margin-left: 140px;
    background: white;
}
{
    padding: 0;
    margin: 0;

}
.menu-bar
{
    background-color:black;
    text-align: center;
}
.menu-bar ul{
    display: inline-flex;
    list-style: none;
    color: white;
}
.menu-bar ul li{
    width: 120px;
    margin: 10px;
    padding: 10px;


}
.menu-bar ul li a{
    text-decoration: none;
    color: darkred;
}
.active,.menu-bar ul li:hover
{
  background: grey;
  border-radius: 3px;
}
.menu-bar .font-family{
    margin-right: 2px ;
}
.sub-menu-1
{
    display: none;
}
.menu-bar ul li:hover .sub-menu-1
{
    display: block;
    position: absolute;
    background: white;
    margin-top: 15px;
    margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
    display: block;
    margin: 10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li{
    width: 150px;
    padding: 15px;
    border-bottom: 1px dotted darkred;
    background: transparent;
    text-align: left;

}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child
{
    border-bottom: none;
}
.menu-bar ul li:hover .sub-menu-1 ul li a:hover
{
    color: darkred;
}
.fa-angle-right
{
    float: right;
}
sub-menu-2
{
    display: none;
}
.hover-me:hover .sub-menu-2
{
    position: absolute;
    display: block;
    margin-top: -40px;
    margin-left: 140px;
    background: white;
}
</style>
</head>
<body>
	<!--<div class="menu-bar">
<ul>

	<li class="active"><a href="#" style="color:white"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="#" style="color:white"><i class="fa fa-user"></i>PUC</a>
     <div class="sub-menu-1">
         <ul>
         	<li><a href="#">PUC-1</a></li>
            <li><a href="#">PUC-2</a></li>
         </ul>	

     </div>
     <li><a href="#" style="color:white"><i class="fa fa-clone"></i>B.TECH</a>
     <div class="sub-menu-1">
         <ul>
         	<li><a href="#">E-1</a>
                <div class="sub-menu-2">
                  <ul>
                     <li><a href="#">CSE</a></li>
                     <li><a href="#">MECH</a></li>
                     <li><a href="#">ECE</a></li>
                     <li><a href="#">CIVIL</a></li>
                </ul>
                </div>
            </li>
            <li><a href="#">E-2</a>
                <div class="sub-menu-2">
                  <ul>
                     <li><a href="#">CSE</a></li>
                     <li><a href="#">MECH</a></li>
                     <li><a href="#">ECE</a></li>
                     <li><a href="#">CIVIL</a></li>
                </ul>
            </div>
        </li>

            <li><a href="#">E-3</a>
                <div class="sub-menu-2">
                  <ul>
                     <li><a href="#">CSE</a></li>
                     <li><a href="#">MECH</a></li>
                     <li><a href="#">ECE</a></li>
                     <li><a href="#">CIVIL</a></li>
                </ul>
                </div>
            </li>
            <li><a href="#">E-4</a>
                <div class="sub-menu-2">
                  <ul>
                     <li><a href="#">CSE</a></li>
                     <li><a href="#">MECH</a></li>
                     <li><a href="#">ECE</a></li>
                     <li><a href="#">CIVIL</a></li>
                </ul>
            </div>
            </li>
        </ul>
    </div>
</li>
    <li><a href="#" style="color:white"><i class="fa fa-user"></i>Competitive</a>
     <div class="sub-menu-1">
         <ul>
            <li><a href="#">GATE</a></li>
            <li><a href="#">GRE</a></li>
            <li><a href="#">GMAT</a></li>
            <li><a href="#">Banking</a></li>
            <li><a href="#">J.E Mains</a></li>
            <li><a href="#">Placements</a></li>
         </ul>  

     </div>
	
	<li><a href="cmt.php" style="color:white"><i class="fa fa-users"></i>Queries</a></li>
	<li><a href="#" style="color:white"><i class="fa fa-angellist"></i>About</a></li>
</ul>
</div>-->
    <nav class="container-fluid navbar-expand-md navbar-dark bg-transparent text-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav container">

            <li class="nav-item col-12 col-md-1 active">
              <a class="nav-link" href="#"><i class="fa fa-home">Home</i></a>
            </li>

            <li class="nav-item dropdown  col-12 col-md-2">
              <a class="nav-link dropdown-toggle" tabindex="0" data-toggle="dropdown" data-submenu="">
                PUC
              </a>
              <div class="dropdown-menu">
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle"href="e1.html">PUC-1</a>
                </div>
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle"  href="p2.html">PUC-2</a>
                </div>
                              </div>
            </li>

            <li class="nav-item dropdown col-12 col-md-2">
              <a class="nav-link dropdown-toggle" tabindex="0" data-toggle="dropdown" data-submenu="">B.TECH
              </a>
              <div class="dropdown-menu">
                <div class="dropdown dropright dropdown-submenu">
                  <a color="green" class="dropdown-item dropdown-toggle" href="my.html">E-1</a>
                </div>
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle"  href="my2.html">E-2</a>
                </div>
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle"  href="my3.html">E-3</a>
                </div>
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle"  href="my4.html">E-4</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown col-12 col-md-2">
              <a class="nav-link dropdown-toggle" tabindex="0" data-toggle="dropdown" data-submenu="">Competitive
              </a>
              <div class="dropdown-menu">
                <div class="dropdown dropright dropdown-submenu">
                  <a color="green" class="dropdown-item dropdown-toggle" href="https://drive.google.com/drive/folders/1JQOGfT8g3GPdQpx1lZMmQg1sUgD9lCru">GATE</a>
                </div>
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="upload_download/index.php">J.E.Mains</a>
                </div>
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="upload_download/index.php">GRE</a>
                </div>
                <div class="dropdown dropright dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle"  href="upload_download/index.php">TOEFFEl</a>
                </div>
              </div>
          </li>
            <li class="nav-item col-12 col-md-1">
              <a class="nav-link" href="cmt.php">Queries</a>
            </li>
             <li class="nav-item col-12 col-md-2">
              <a class="nav-link" href="https://rguktsklm.ac.in/">Campus Info</a>
            </li>
             <li class="nav-item col-12 col-md-2">
              <a class="nav-link" href="qp.html">About</a>
            </li>
          </ul>
        </div>

      </nav>
<center>
<section>
<img class="mySlides" src="y.jpg"
  style="width:100%">
	<img class="mySlides" src="mbg3.jpg"
  style="width:100%">
  <img class="mySlides" src="mbgg5.jpg"
  style="width:100%">
  <img class="mySlides" src="mbg6.jpg"
  style="width:100%">
  <img class="mySlides" src="y1.jpg"
  style="width:100%">
  <img class="mySlides" src="mbg4.jpg"
  style="width:100%">
  <img class="mySlides" src="mbgg4.jpg"
  style="width:100%">
  <img class="mySlides" src="mbg5.jpg"
  style="width:100%">
  <!--<img class="mySlides" src="mbg12.jpg"
  style="width:100%">
  <img class="mySlides" src="mbg1.jpg"
  style="width:100%">
  
  <img class="mySlides" src="mbg7.jpg"
  style="width:100%">
  <img class="mySlides" src="mbgg.jpg"
  style="width:100%">-->
  <img class="mySlides" src="mbg17.jpg"
  style="width:100%">

  
  <img class="mySlides" src="y2.jpg"
  style="width:100%">
  <img class="mySlides" src="y3.jpg"
  style="width:100%">


 

 
</section>
</center>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</body>
</html>