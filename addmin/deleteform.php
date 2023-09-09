<?php

include('../dbcon.php');
$id=$_REQUEST['sid'];

$qry ="DELETE FROM `stu` WHERE `id`='$id';";

//echo $qry;
$run= mysqli_query($con,$qry);

 if($run == true)
 {
    ?>
    <script>
        alert('data deleted successfully');
        window.open('deletestudent.php','_self');
    </script>
    <?php
 }
?>
