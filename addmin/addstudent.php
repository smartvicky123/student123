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
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
  <table border="1" align="center"  style="width:30%; margin-top:20px;">
    <tr>
        <th>Roll No</th>
        <td><input type="text" name="rollno" placeholder="enter yor roll no" required> </td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" name="name" placeholder="Write your name" required> </td>
    </tr>
    <tr>
        <th>City</th>
        <td><input type="text" name="city" placeholder="enter your city name" required> </td>
    </tr>
    <tr>
        <th>Parentd Contact no</th>
        <td><input type="text" name="pcon" placeholder="enter mobile no." required> </td>
    </tr>
    <tr>
        <th>Standered</th>
        <td><input type="text" name="std" placeholder="enter your class" required> </td>
    </tr>
    <tr>
        <th>Image</th>
        <td><input type="file" name="simg"> </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
    </tr>
</table>
</form>  
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    // extract($_POST);
     include('../dbcon.php');

    $rollno= $_POST['rollno'];
    $name= $_POST['name'];
    $city = $_POST['city'];
    $pcon= $_POST['pcon'];
    $std= $_POST['std'];
    $imagename =$_FILES['simg']['name'];
    $tempname =$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    $qry ="INSERT INTO `stu`(`rollno`, `name`, `city`, `pcont`, `std`,`img`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
    //echo $qry;
    $run= mysqli_query($con,$qry);
   
     if($run == true)
     {
        ?>
        <script>
            alert('data inserted successfully');
        </script>
        <?php
     }
    } 
    // $sql ="INSERT INTO stu(rollno,name,city,pcont,std)VALUES('$rollno','$name','$city','$pcon','$std')'";
    // $run->mysqli_query($conn,$sql);



  