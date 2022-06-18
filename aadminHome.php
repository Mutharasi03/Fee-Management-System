<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>

<style>
    body{
background-image:url(image/img8.jpg);
background-attachment:fixed;
background-size:cover;
font-family:time new roman;
    }

    .top{
        display: flex;
        flex-direction: row-reverse;
    }
.body_card{
    display:flex;
    margin-top: 80px;  
    text-align: center;
}
.card {
display: inline-block;
font-family: arial;
flex-wrap: wrap;
flex:1 1 11rem;
margin:10px 20px;
background:#fff;
box-shadow:0 0 15px rgba(0,0,0,0.4);
padding:5px 10px;
align-self: normal;
width: 225px;
height: 300px;
}

.card:hover{
    
    transform: translateY(-10px);
}

</style>
</head>
<body>
<center><h1>Welcome admin!</h1></center>
    <div class="top">

<a href="logout.php">Logout</a>
</div>
<div class="body_card">
<div class="card">
<h2>Course Fee</h2>
   <a href="adminCourseLay2.php"> <img src="image/course_structure.jpg" alt="coursefees" ></a>
    
</div>



<div class="card">
<h2>Pay fees</h2>
   <a href="adminPayLay1.php"> <img src="image/paidOrUnpaid.jpg" alt="coursefees"></a>


</div>

<div class="card">
    <h2>View Record</h2>
   <a href="adminViewLay2.php"> <img src="image/fview_record.png" alt="view_record"></a>

</div>

<div class="card">
    <h2>Add User</h2>
   <a href="adminAdduserLay2.php"> <img src="image/addusers.png" alt="addusers"></a>

</div>
</div>

</body>
</html>
