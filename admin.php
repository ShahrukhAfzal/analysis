<?php
session_start();
include("connection.php");
?>

<center>
<form action="" method="post" >
Username : <input type="text" name="username" value="" required placeholder="Please enter username"/><br><br>
Password : <input type="password" name="password" value="" required placeholder="Please enter password"/><br><br>
<input type="submit" name="submit" value="Login"/>      
</form>    

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE admin='$username' && password ='$password' ";
   
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if ($total==1)
    {
        #echo("success");
        $_SESSION['username']=$username;
        header('location:add_teacher.php');
    }
    else
    {
        echo("<p>Wrong Credentials<p>");
    }
}
?>
 
</center>