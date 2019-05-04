<?php
session_start();
include("connection.php");
?>

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="all/image/png" href="all1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="all1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="all1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="all1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="all1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="all1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="all1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="all1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="all1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="all1/css/util.css">
	<link rel="stylesheet" type="text/css" href="all1/css/main.css">
<!--===============================================================================================-->


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
                      
                        <div class="menu-item-box center "><a href="index.html" class="menu-link">Home</a></div>
                     <div class="menu-item-box center "><a href="index.html#about" class="menu-link">About</a></div>
                        <div class="menu-item-box center "><a href="index.html#contact" class="menu-link">Contact</a></div>
                        <div class="menu-item-box center "><a href="i.html" class="menu-link">Login</a></div>
                        <div class="menu-item-box center "><a href="member.html" class="menu-link">Signup</a></div>
                        
                        

                        </nav>
                        


                       

                    </div>
                        </div>
            </header>
     <hr>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('all1/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="">
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					<a href="https://www.facebook.com/" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="https://accounts.google.com/ServiceLogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn-google m-b-20">
						<img src="all1/images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="user" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pwd" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="member.html" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="all1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="all1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="all1/vendor/bootstrap/js/popper.js"></script>
	<script src="all1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="all1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="all1/vendor/daterangepicker/moment.min.js"></script>
	<script src="all1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="all1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="all1/js/main.js"></script>
	</div>
</body>


<?php
if(isset($_POST['submit']))
{
    $user = $_POST['user'];
    $pwd = $_POST['pass'];
    $query = "SELECT * FROM USER WHERE USERNAME='$user' && PASSWORD ='$pwd' ";

    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if ($total==1)
    {
        #echo("success");
        $_SESSION['user']=$user;
        header('location:enter_url.php');
    }
    else
    {
        echo("Wrong Credentials");
    }
}
?>
<?php
echo "haan";
?>

