
<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees Managemenet </title>
</head>
 
<body onload="slider()">
    <table style="background-color: white;">
        <header >
        <tr>
            <th>
                <img src="image/logos.jpeg" alt="logo">
            </th>
        </tr>
    
        <tr>
            <td>
                <nav>
                <ul class="dropdown">
                    <li> <a href="#"> Home </a></li>
                    <li> <a href="feesdetails.php"> Fees Details </a></li>
                   
                    <li> <a href="#"> Login </a>
                    <ul class="loginlist">
                        <li><a href="login.php">Admin</a></li>
                        <li><a href="login.php">Staff</a></li>
                        <li><a href="login.php">Student</a></li>
                    </ul>
                    
                    </li>
                    <li><a href="#">About as</a></li>
                    </ul>
                </nav>
            </td>
        </tr>
    </header>
    
    </table>
   
        <div class="slider">
            <img src="image/loginbg.png" id="sliderImg">
        </div>
    </div>
 <script>
     var sliderImg = document.getElementById("sliderImg");
      var images = new Array(
        "image/loginbg.png",
        "image/bgs1.jpg",
          "image/bgs.jpg"
               );
 
 var len = images.length;
 var i = 0;
 function slider()
 {
    if(i>len-1){
        i=0;
    }
    sliderImg.src = images[i];
    i++;
    setTimeout('slider()',3000);
 }
 </script>

</body>

</html>
<style>
    * {
    margin: 0;
    padding: 0;
}

body {
    background-repeat: no-repeat;
 background-color: #F7F7F7;
 
}

#sliderImg{
    width: 100%;
    height: 100vh;
    z-index: -1;
}
table, th, img {
    width: 100%;

}

.dropdown {

    display: flex;
    justify-content: center;
    list-style-type: none;
    background-color: #F7F7F7;
    padding: 1em;
    height: 35px;
}

nav ul li a {
    background-color: #F7F7F7;
    padding: 10px 20px;
}

nav a {
    display: block;
    text-decoration: none;
    font-size: 1.2em;
    font-weight: 500;
 color: #002147;
    font-family: Arial, Helvetica, sans-serif;

}

nav ul li a:hover {
    color: #F7DE3A;
    background-color: #002147;

}

nav ul li :hover {

    transform: 0.9s;
}

.loginlist {
    list-style-type: none;
    display: none;
    position: absolute;
    z-index: 1;
}

.dropdown li:nth-child(3):hover .loginlist {
    display: block;
}
</style>