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
?>
<div class="admintitle">
<h4><a href="logout.php" style="float:right; color:white; margin:10px;">Logout<a/></h4>

   <div > <h1 class="welcome"> Welcome to Admin Dashboard</h1></div>
</div>
<div class="dashboard">
    <table border="1" align="center">
        <tr>
            <td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
        </tr>
        <tr>
            <td>2.</td><td><a href="updatestudent.php">update</a></td>
        </tr>
        <tr>
            <td>3.</td><td><a href="deletestudent.php">Delete</a></td>
        </tr>
    </table>
</div>
    
</body>
</html>