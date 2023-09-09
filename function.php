<?php
function  showdetails($standerd,$rollno)

{
    include('dbcon.php');
    $sql= "SELECT * FROM `stu` WHERE `rollno`='$rollno' AND `std`='$standerd'";
    //echo"$sql";
    $run=mysqli_query($con,$sql);
 if(mysqli_num_rows($run)>0)
 {
    $data=mysqli_fetch_assoc($run);

    ?>
    <table border="2" style="width:50%" align="center" class="sho">
        <tr>
            <th colspan="3">STUDENT DETAILS</th>
        </tr>
        <tr>
            <th rowspan="6"><img src="dataimg/<?php echo $data['img'];?>" style="max-height:150px; max-width:120px;"/></th>
            
        </tr>
        <tr>
        <th>Roll NO.</th>
             <td><?php echo $data['rollno'];?></td>
        </tr>
        <tr>
        <th>Name</th>
             <td><?php echo $data['name'];?></td>
        </tr>
        <tr>
        <th>Standerd</th>
             <td><?php echo $data['std'];?></td>
        </tr>
        <tr>
        <th>Parent contact no</th>
             <td><?php echo $data['pcont'];?></td>
        </tr>
        <tr>
        <th>City</th>
             <td><?php echo $data['city'];?></td>
        </tr>
 </table>
    <?php
 }
 else
 {?><div  class="tr">
     <tr ><td colspan='5' >NO record Found</td></tr>
 </div>
   
   <?php
 }
}
?> 