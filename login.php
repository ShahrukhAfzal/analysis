<?php
session_start();
include("connection.php");
?>

<center>
<form action="" method="post" >
Username : <input type="text" name="user" value="" required placeholder="Please enter username"/><br><br>
Password : <input type="password" name="pass" value="" required placeholder="Please enter password"/><br><br>
<input type="submit" name="submit" value="Login" />   
<input type="reset" name="">   
</form>     

<?php
if(isset($_POST['submit']))
{
    $user = $_POST['user'];
    $pwd = $_POST['pass'];
    $query = "SELECT * FROM USER WHERE EMAIL='$user' && PASSWORD ='$pwd' ";
   
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
        echo("<p>Wrong Credentials<p>");
    }
}
?>
</center>