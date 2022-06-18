<?php
session_start();
include("db.php");
if (isset($_POST ['submit']))
{
$username=$_POST[ 'username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

$query="INSERT INTO `login`(`id`, `username`, `password`, `usertype`) VALUES (NULL,'$username','$password','$usertype')";
$data=mysqli_query ($conn, $query);

if($data){
    header("Location: success.php?msg new record inserted successfully!");
}
else{
 echo "FAiled:".mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html lang="en">            
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="deptbox">
    <form action=""method="post">
    

    <tr>
    <td>USERNAME</td>
    <td><input type="text" name="username"></td>
    
    </tr>
    <tr>
    <td>PASSWORD</td>
    <td><input type="password" name="password"></td>
    
    </tr>
    <tr>
    <td>USERTYPE</td>
    <td><select name="usertype" id="">
    <option value="admin">admin</option>
    <option value="staff">staff</option>
    <option value="student">student</option>
    </select></td>
    
    </tr>

    <tr>
    <td><input type="submit" value="submit" name="submit">
    </td></tr> 
    </form>
      </table>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url(image/nature.jpg);
        background-attachment:fixed;
        background-size:cover;


    }
    table{
        width:25rem;
        height: 25rem;
        display:flex;
        background:rgba(255,255,255,0.06);
        box-shadow:0 8px 32px 0 rgba(31,38,135,0.37) ; 
        border-radius: 30px;
        border-left: 1px solid rgba(255,255,255,0.03);
        border-top: 1px solid rgba(255,255,255,0.03);
    }
   

    .deptbox {
        font-style: inherit;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: black;
    }

    table,
    tr,
    td {
        padding: 14px;

    }

    input[type=text],
    input[type=password],
    select {
        width: 100%;
        padding: 12px 4px;
        padding-right: 20px;
        margin: 4px 0;
        box-sizing: border-box;

    }

    input[type="submit"] {
        padding: 10px 20px;
        cursor: pointer;

        border: 2px solid #2A363B;
        float: right;
        background-color:#547980;
        color: white;
    }

    input[type="submit"]:hover {
        background-color: #83AF9B;
    }
</style>