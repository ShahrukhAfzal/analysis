<?php
session_start();
error_reporting(0);
echo "<p align='right'><b>welcome ".$_SESSION['username']."&nbsp&nbsp&nbsp";
echo "<a href='logout_admin.php'>Logout</a></p>";
$userprofile = $_SESSION['username'];
if($userprofile==true)
{
 //header('location:data_display.py');
}
else
{
  header('location:admin.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Teacher - SignUp - Register -</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700);
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700);

body {
    background: #fff;
	font-family: 'Roboto', sans-serif;
	color:#333;
	line-height: 22px;
}
h1, h2, h3, h4, h5, h6 {
	font-family: 'Roboto Condensed', sans-serif;
	font-weight: 400;
	color:#111;
	margin-top:5px;
	margin-bottom:5px;
}
h1, h2, h3 {
	text-transform:uppercase;
}

input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 12px;
    cursor: pointer;
    opacity: 1;
    filter: alpha(opacity=1);
}

.form-inline .form-group{
    margin-left: 0;
    margin-right: 0;
}
.control-label {
    color:#333333;
}
  body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>





<link href="all/css/common.css" rel="stylesheet" type="text/css" />
        <!----Media queries css--->
         <link href="all/css/style.css" type="text/css" rel="stylesheet" />
         <link href="all/css/theme1024.css" rel="stylesheet" type="text/css" />
        <link href="all/css/theme990.css" rel="stylesheet" type="text/css" />
        <link href="all/css/theme768.css" rel="stylesheet" type="text/css" />
        <link href="all/css/theme480.css" rel="stylesheet" type="text/css" />
        <link href="all/css/theme320.css" rel="stylesheet" type="text/css" />
        <link href="all/css/theme319.css" rel="stylesheet" type="text/css" />
    <link href="all/css/quickweb.css" rel="stylesheet" type="text/css" />
     <link href="all/fonts/style.css" rel="stylesheet" type="text/css" />
   <link href="all/css/slider_css.css" type="text/css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700,900' rel='stylesheet' type='text/css'/>

    <script src="all/js/jquery-ui.js"></script>
    <script src="all/js/jquery-1.11.3.min.js"></script>
    <script src="all/js/slider.js"></script>
    <script src="all/js/plugin.js"></script>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="enter_url.php">HOME</a>
  <a href="data_analysis.php">SUBJECT ANALYSIS</a>
  <a href="data_display.php">STUDENT ANALYSIS</a>
  <a href="logout_admin.php">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

    <div class="main">
                    <header class="header">
                <div class="container">
                    <div class="col-12">


                    <nav class="mob-menu-icon mb-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </nav>


                    <nav class="col-8 menu mob-menu pull-right">

                         <nav class="mob-menu-icon" style="padding: 26px 26px;width: 100%;box-sizing: border-box;border-bottom:2px solid #1565C0; ">

                        <span class="icon-bar slide-icon-menu-color"></span>
                        <span class="icon-bar slide-icon-menu-color"></span>
                        <span class="icon-bar slide-icon-menu-color"></span>

                    </nav>




                        </nav>

                    </div>
                        </div>
            </header>
     <hr>





<body>
<div class="container">
	<div class="row">
    <div class="col-md-8">
      <section>
        <h1 class="entry-title"><span>Teacher Entry</span> </h1>
        <hr>
            <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" action="">

        <div class="form-group">
          <label class="control-label col-sm-3">TEACHER'S ID: <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <input type="text" class="form-control" name="teachers_id" id="password" placeholder="Enter teacher's Id" required value="">
           </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">SESSION :<span class="text-danger"> *</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
                 <select name="session" required>
                     <option>SELECT SESSION</option>
                     <option value=16>2016</option>
                     <option value=17>2017</option>
                     <option value=18>2018</option>
                     <option value=19>2019</option>
                     <option value=20>2020</option>
                     <option value=21>2021</option>
                     <option value=22>2022</option>
                     <option value=23>2023</option>
                </select>
                 </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">BRANCH :<span class="text-danger"> *</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
                 <select name="branch" required>
                     <option>SELECT BRANCH</option> 
                     <option value="CS">CS</option>
                      <option value="IT">IT</option>  
                      <option value="EC">EC</option>
                      <option value="EN">EN</option>
                      <option value="MECH">MECHANICAL</option>  
                      <option value="CIVIL">CIVIL</option>
                      <option value="CHEMICAL">CHEMICAL</option>
                      <option value="MCA">MCA</option>
                      <option value="MBA">MBA</option>
                </select>
                </select>
                 </label>
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">SECTION : <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="section" type="radio" value="A" checked required>
            A </label>
               
            <label>
            <input name="section" type="radio" value="B" >
            B  </label>

              <label>
            <input name="section" type="radio" value="C" >
            C </label>

              <label>
            <input name="section" type="radio" value="D" >
            D </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">SEMESTER :<span class="text-danger"> *</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
                 <select name="sem" required>
                     <option>SELECT SEMESTER</option>
                     <option value=1>1</option>
                     <option value=2>2</option>
                     <option value=3>3</option>
                     <option value=4>4</option>
                     <option value=5>5</option>
                     <option value=6>6</option>
                     <option value=7>7</option>
                     <option value=8>8</option>
                </select>
                 </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">SUBJECT CODE : <span class="text-danger"> *</span></label>
          <div class="col-md-5 col-sm-8">
          	<div class="input-group">
            <input type="text" class="form-control" name="subject" id="contactnum" placeholder="Enter Subject Code" value="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="Submit" type="submit" value="Add teacher" class="btn btn-primary">
          </div>
        </div>
      </form>
      </section>
    </div>
</div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
