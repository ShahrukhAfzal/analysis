<?php
session_start();
error_reporting(0);
echo "<p align='right'><b>welcome ".$_SESSION['user']."&nbsp&nbsp&nbsp";
echo "<a href='logout.php'>Logout</a></p>";$userprofile = $_SESSION['user'];
if($userprofile==true)
{
 //header('location:data_display.py');
}
else
{
  header('location:login.php');
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<script>
function myFunction() {
  window.print();
}
</script>


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

@media print {
    #printbtn {
        display :  none;
    }
}

td,th{
font-weight: bold;
    vertical-align: inherit;
	text-align:center;
border: 1px solid black;
margin: 3px;
}
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding: 5px;
  background-color: #cae8ca;
  border: 2px solid #4CAF50;
}

p.indent{ padding-left: 1.8em }
</style>
 <script>
	

function analyze() {
  var v = document.getElementById('input_id').value;
var table = document.getElementById('tableID');
var tbody = table.getElementsByTagName('tbody')[0];
var cells = tbody.getElementsByTagName('td');

for (var i = 0, len = cells.length; i < len; i++) {
if (parseInt(cells[i].innerHTML) >= v) {
    cells[i].style.backgroundColor = 'lightgreen';
  } else if (parseInt(cells[i].innerHTML) < v) {
    cells[i].style.backgroundColor = 'red';
  }
}}
</script>
		
	
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="enter_url.php">HOME</a>
  <a href="data_analysis.php">SUBJECT ANALYSIS</a>
  <a href="data_display.php">STUDENT ANALYSIS</a>
  <a href="logout.php">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Analysis</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="sticky" style="border: 15px SOLID grey" id="printbtn" >
  <center>
<form action="data_analysis.py" method="POST" >
<div class="form-group" >

  <h4>
      <b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; YEAR:         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp BRANCH:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEMESTER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                       &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;            &nbsp;&nbsp;SUBJECT CODE:   </h4> </b>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<select name="session" required>
        <option>SELECT YEAR</option>
        <option value=15>2015</option>
        <option value=16>2016</option>
        <option value=17>2017</option>
        <option value=18>2018</option>
        <option value=19>2019</option>
</select>
    &nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;   
<select name="branch" required>
        <option>SELECT BRANCH</option>
        <option value=10>CS</option>
        <option value=13>IT</option>
        <option value=00>CIVIL</option>
        <option value=40>MECHANICAL</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;
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


   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text"  style="text-transform:uppercase"  placeholder="e.g. 'RAS201' or 'REC301' " name="subject"  REQUIRED>
    </div>   <button type="submit" class="btn btn-default">Fetch Data</button>&nbsp;&nbsp;&nbsp;&nbsp; <button type="Reset" class="btn btn-default">Reset</button>
  </form>
  <hr>
  </b>
</div>

</center>
<br>
<hr><hr>
<br>
</body>
</html>

