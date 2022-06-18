<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM `newdept` WHERE `newdept`.`id` =$id"; 
$result = mysqli_query($conn,$query);
if($result)
{
header("Location:adminCourseLay2.php"); 
}
else{
    echo "FAiled:" . mysqli_error($conn);
}
?>