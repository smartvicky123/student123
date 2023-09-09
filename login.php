<?php
 session_start();
 if(isset($_SESSION['uid']))
 { 
   // Window.open('login.php','_self');
   // header('location:addmin/login.php');
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login Page </title>
</head>
<style>
.back a{
  text-decoration:none;
  color:blue;
}

  </style>
<body>
    <h1 align="center">Admin Login</h1>
    <form action="login.php" method="post">
        <table align="center">
            <tr>
               <td>username </td><td><input type="text" name="uname" required></td>
            </tr>
            <tr>
              <td> Password </td><td><input type="password" name="pass" required></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
            </tr>
           <div class="back"> <a href="index.php">Back to show student information</a></div>
        </table>
    </form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $qry ="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
   $run = mysqli_query($con,$qry);
   $row=mysqli_num_rows($run);//ye method m hmko no.of ro pta lagega;
   if($row <1)
   {
    ?>
    <script>
        alert('username or password not match ! !');
        Window.open('login.php','_self');
    </script>
    <?php
   }
   else
   {
    $data = mysqli_fetch_assoc($run);
    $id=$data['id'];
   // echo"id=".$id;
    
   
     $_SESSION['uid']=$id;
    header('location:addmin/addmindash.php');
   }
}
?>