<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mangement System</title>
    <link href="..\student\css\style1.css" rel="stylesheet" type="text/css">
</head>
<body>
    
   <div> <h3 align="right" style="margin-right:20px;"><a href="login.php">Addmin Login</a></h3></div>
    <h1 align="center">Welcome to student  mangement system</h1>
    <form method="post" action="index.php">
        <table style="width:30%;" align="center" border="1"class="tabl">
            <tr>
                <td colspan="2"  align="center">Student Information</td>
            </tr>
            <tr>
                <td>Choose standerd</td>
                  <td><input type="text" name="std" required>
                </td>
            </tr>
            <tr>
                <td >Enter Rollno.</td>
                <td><input type="text" name="rollno" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Show Detail"> </td>
            </tr>
       </table>
    <form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
   
    $standerd=$_POST['std'];
    $rollno=$_POST['rollno'];
    include('dbcon.php');
    include('function.php');
    showdetails($standerd,$rollno);
}
?>