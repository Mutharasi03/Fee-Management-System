
<?php
include "db.php";
if(isset($_POST['submit']))
 {
        
        $dept =$_REQUEST['dept'];          
        $I = $_REQUEST['I'];
        $II = $_REQUEST['II'];
        $III = $_REQUEST['III'];
        $IV = $_REQUEST['IV'];
        $V = $_REQUEST['V'];
        $VI = $_REQUEST['VI'];
       $sql=" INSERT INTO `newdept`(`id`,`dept`, `I`, `II`, `III`, `IV`, `V`, `VI`) VALUES (NULL,'$dept','$I','$II','$III','$IV','$V','$VI')";

       $result=mysqli_query($conn,$sql);

if($result){
    header("Location: adminCourseLay2.php?msg new record inserted successfully!");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap
    <link rel="stylesheet" type="text/css" href="js/bootstrap.
    <link rel="stylesheet" type="text/css" href="style.css">
    
   
    <title>course-fees-details page2</title>
</head>
<body>

   

    <div class="fees">
        <table >
            <form name="form" method="post" action="">
                <tr>
                
                    <td>
                        DEPTARTMENT
                    </td>
                    <td>
                        <input type="text" name="dept" required>
                    </td>
                </tr>

                <tr align="center">
                    <td colspan="2">
                
                    </td>
                </tr>
                <tr>
                    <td>SEMESTER - I</td>
                    <td>
                       <input type="number" name="I">
                    </td>

                </tr>
                <tr>
                    <td>SEMESTER - II</td>
                    <td>
                        <input type="number" name="II">
                    </td>
                </tr>
                <tr>
                    <td>SEMESTER - III</td>
                    <td>

                        <input type="number" name="III">
                    </td>
                </tr>
                <tr>
                    <td>SEMESTER - IV</td>
                    <td>
                  <input type="number" name="IV">
                    </td>
                </tr>
                <tr>
                    <td>SEMESTER - V</td>
                    <td>
                        <input type="number" name="V">
                    </td>
                </tr>
                <tr>
                    <td>
                        SEMESTER - VI
                    </td>
                    <td>
                        <input type="number" name="VI">
                    </td>
                </tr>
               <tr>
                   <td colspan="2">
                   <input type="submit" name="submit" id="submit">

                   </td>
               </tr>
            </form>

        </table>
       
        <p style="color:#FF0000;">
    </div>

</body>

</html>
<style>
      body {
        background-image: url("image/newfees.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background: rgba(76, 175, 80, 0.3)
    }

    * {
        padding: 0;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: large;

    }

    .fees {
        position: absolute;
        top: 60%;
        left: 30%;
        transform: translate(-50%, -50%);
    }

    table tr td {
        padding: 10px;
    }

    input[type=submit] {
        float: right;
        display: flex;
        border: 3px solid;
        border-radius: 24px;
        padding: 5px 10px;
    }

    h1 {
        text-align: center;
        margin-top: 3%;
    }
    input[type=number]{
        width: 250px;
    }
    input[type=text]{
        width: 250px;
    }
    

body{
background-image:url(image/img5.png);
background-attachment:fixed;
background-size:cover;
font-family:time new roman;
     
font-size:40px;
color:black;
margin-top:20px;
margin-bottom:30px;
}

.lable{
font-size: 19px;
margin-top: 20px;
font-weight: normal;
}
.form-control{
background: rgba(255, 255,255,0.2);
border: Opx;
border-radius: Opx;
border-bottom: 2px solid white;
font-size: 21px;
color: white;
margin-top: 20px

}


option{
    color: #666;
}
.btn info{
    margin-top: 30px;
    margin-left: 150px;
    width: 180px;
    font-size: 19px;
    border-radius: 1000px;
}
.col-nd-6{
    background: rgba(0,0,0,0.4);
    height: 660px;
    box-shadow: -1px 1px 68px 10px black inset;
}
</style>