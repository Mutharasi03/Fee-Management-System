<?php
session_start();
include ("db.php");
if (isset($_POST ['submit']))
{
$name=$_POST[ 'name'];
$regno=$_POST['regno'];
$dept=$_POST['dept'];
$class=$_POST['class'];
$sem=$_POST['sem'];
$fees=$_POST['fees'];
$paidamt=$_POST['paidamt'];
$ship=$_POST['ship'];
$pending=$_POST['pending'];
$pun=$_POST['pun'];

$query="INSERT INTO payfees ( `id`,`name`, `regno`, `dept`, `class`, `sem`, `fees`, `paidamt`, `ship`, `pending`, `pun`) VALUES 
(NULL,'$name','$regno','$dept','$class','$sem','$fees','$paidamt','$ship','$pending','$pun')";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paid or unpaid page1</title>
</head>

<body>
   
        <form action="" method="POST">
            <table width="100%">

                <tr>
                    <td>
                        Name of the student:
                    </td>
                    <td><input type="text" name="name">
                    </td>
                    <td>Total Fees: </td>
                    <td><input type="number"  name="fees"></td>

                    
                </tr>
                <tr>
                <td>
                        Registe Number:
                    </td>
                    <td><input type="text" name="regno">
                    </td>
                    <td>
                        Paid Amount:
                    </td>
                    <td><input type="number"  name="paidamt" >
                    </td>
                   
                    
                    

                </tr>
               <tr>
                    <td> Semester:</td>
                    <td> <select name="sem">
                        <option value="Select sem">Select sem</option>
                            <option value="I" >I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                    </td>
                    <td>
                        Scholarship:
                    </td>
                    <td><input type="number" name="ship">
                    </td>
                   
                  
                </tr>

                <tr>
                <td>Department:</td>
                    <td><select  name="dept">
                        <option value="Select Dept">Select Dept</option>
                            <option value="CS">COMPUTER SCIENCE</option>
                            <option value="MATHS">MATHS</option>
                            <option value="PHYSICSS">PHYSICS</option>
                            <option value="CHEMISTRY">CHEMISTRY</option>
                            <option value="BBA">BBA</option>
                            <option value="BCOM">BCOM</option>
                            <option value="BCOM-CA">BCOM-CA</option>
                            <option value="ENGLISH">ENGLISH</option>
                            <option value="TAMIL">TAMIL</option>
                    </td>
                    <td>
                        Pending Amount:
                    </td>
                    <td><input type="number"  name="pending">
</td>
                   

                <tr>
                <td>
                        Year & Section :
                    </td>
                    <td><select name="class" >
                        <option >Select year</option>
                            <option value="I-A" >I - A</option>
                            <option value="I-B">I - B</option>
                            <option value="I-C">I - C</option>
                            <option value="I1-A">II - A</option>
                            <option value="II-B">II - B</option>
                            <option value="II-C">II - C</option>
                            <option value="III-A">III - A</option>
                            <option value="III-B">III - B</option>
                            <option value="III-C">III - C</option>

                    </td>
                 
                    
            
                <td>
                    Paid or Unpaid:
                </td>
                <td>
                      <input type="radio" name="pun" value="paid" required>paid
                     
                      <input type="radio"  name="pun" value="unpaid" required>unpaid

                </td>

                </tr>
                <tr >
                <td colspan="4"><input type="submit" name="submit"></td>
                </tr>
                </form>
            </table>
     


</body>

</html>

<style>
 
* {
        margin: 0;
        padding: 0;
        font-family: Verdana;
    }
body{
    margin-top: 80px;
    background-image: url("image/img8.jpg");
        background-repeat: no-repeat;
        background-size: cover;

}

    input[type=text] ,input[type=number],select{
    width: 100%;
    padding: 12px 4px;
    padding-right: 20px;
    margin: 4px 0;
    box-sizing: border-box;

}
table tr td {
 padding: 15px;  
 text-transform: uppercase; 
 font-weight: 800;
}
input[type=submit]{
   float: right;
   margin-right: 580px;
   margin-top: 20px;
    padding: 9px 18px;
    
   
}
</style>