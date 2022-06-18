<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM `payfees` WHERE `payfees`.`id` =$id"; 
$result = mysqli_query($conn,$query);
if($result)
{
header("Location:adminViewLay2.php"); 
}
else{
    echo "FAiled:" . mysqli_error($conn);
}
?>