<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo"";
}
else{
   header('location: ../login.php');
    //echo "<script>window.location.href='login'</script>";
}
?>

<?php
include('header.php');
include('titlehead.php');
include('../dbcon.php');
$sid= $_GET['sid'];
$sql= "SELECT * FROM `stu` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
  <table border="1" align="center"  style="width:30%; margin-top:20px;">
    <tr>
        <th>Roll No</th>
        <td><input type="text" name="rollno" value=<?php echo $data['rollno'];?>> </td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" name="name"  value=<?php echo $data['name'];?>required> </td>
    </tr>
    <tr>
        <th>City</th>
        <td><input type="text" name="city" value=<?php echo $data['city'];?> required> </td>
    </tr>
    <tr>
        <th>Parentd Contact no</th>
        <td><input type="text" name="pcon" value=<?php echo $data['pcont'];?>> </td>
    </tr>
    <tr>
        <th>Standered</th>
        <td><input type="text" name="std" value=<?php echo $data['std'];?> required> </td>
    </tr>
    <tr>
        <th>Image</th>
        <td><input type="file" name="simg"> </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input type="hidden" name="sid" value=<?php echo $data['id'];?>"/>    
        <input type="submit" name="submit" value="submit"></td>
    </tr>
</table>
</form>  