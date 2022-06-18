<?php

include"db.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="student")
	{	

		$_SESSION["username"]=$username;

		header("location:studentLay1.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location: aadminHome.php");
	}
    elseif($row["usertype"]=="staff")
	{

		$_SESSION["username"]=$username;
		
		header("location: staffLay1.php");
	}
	else
	{
		echo "username or password incorrect";
	}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-Page</title>
    <script src="https://kit.fontawesome.com/b90d0a6d61.js" crossorigin="anonymous"></script>
</head>

<body>

 

    <tr>
        <td>
            <form class="box" action="#" method="POST">
                <box>
                    <div class="texticon">
                        <i class=" fa fa-solid fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required>
                    </div>

                    <div class="texticon">
                        <i class=" fa fa-solid fa-lock"></i>
                        <input type="password" placeholder=" Password" name="password" required>
                    </div>
                    <input type="submit" name="submit" value="Login" />
                </box>
            </form>
        </td>
    </tr>
</body>

</html>
<style>
    body {
    
        background-image:linear-gradient(rgba(190, 218, 32, 0.473),rgba(41, 114, 59, 0.3),rgba(41, 114, 59, 0.3)),url("image/loginbg.png") ;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        margin: 0;
        padding: 0;
        font-size: larger;
    
    }

    .fa {
        font-size: px;
        color: white;
        background-clip: text;


    }

    label {
        color: white;

    }
    box {
        background: linear-gradient(rgba(41, 114, 59, 0.3),);
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    

    }

   ::placeholder{
       color: white;
       opacity: 0.9;
   }

    box input[type="text"],
    box input[type="password"] {
        border: 0;
        background: none;
        margin: 20px auto;
        border-bottom: 3px solid ;
        padding: 14px 10px;
        width: 180px;
        outline: none;
        color: #fff;
        transition: 0.25s;
    }

    box input[type="text"]:focus,
    box input[type="password"]:focus
    {
        width: 200px;
        border-color: #F7DE3A;
    }

    box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 50px auto;
        text-align: center;
        border: 3px solid #2ecc71;
        padding: 10px 30px;
        outline: none;
        color: #fff;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
        font-size: 0.8em;
    
    }

    box input[type="submit"]:hover {
        background-color: #2ecc71;
    }
</style>