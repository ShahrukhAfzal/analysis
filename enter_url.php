<?php
session_start();
error_reporting(0);
echo "<p align='right'><b>welcome ".$_SESSION['user']."&nbsp&nbsp&nbsp";
echo "<a href='logout.php'>Logout</a></p>";
$userprofile = $_SESSION['user'];
if($userprofile==true)
{

}
else
{
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
    <title>Enter url</title>
</head>
</p>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="enter_url.php">HOME</a>
  <a href="data_analysis.php">SUBJECT ANALYSIS</a>
  <a href="data_display.php">STUDENT ANALYSIS</a>
  <a href="logout.php">Logout</a>
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

<center>
<br><br><br><br>

    <div class="form" style="background-color:">
        <h1> Have a great day!!!</h1>
        <h4 style="font-family: sans-serif">Please ensure you must have internet connection</h4>
        <button style="width: 230px; height:30px"><a href="https://erp.aktu.ac.in/WebPages/OneView/OneView.aspx" onclick="window.open('https://erp.aktu.ac.in/WebPages/OneView/OneView.aspx','newwindow','width=400,height=700');return false;">CLICK TO OPEN AKTU WEBSITE</a></button>
        <br><br>

        <form action="data_fetching_demo.py " method="post"align="center">
            <input type="text"                                                       style="width: 230px; height:30px" placeholder="Please enter the copied URL of your result" name="url" required pattern=".{100,150}">
          <br><br>  <b style="color: powderblue ; font-size: 40px">A</b><input type="radio" value="A" name = "section" required> <b style="color: mediumspringgreen; font-size: 40px">B</b><input type="radio" value="B" name = "section"> <b style="color: saddlebrown; font-size: 40px">C</b><input type="radio" value="C" name = "section"> <b style="color: khaki; font-size: 40px">D</b><input type="radio" value="D" name = "section">
            <br><br><button style="width: 230px; height:30px">Fetch Data</button>
        </form>
<br><br>

    </div>
</center>

</body>
</html>

