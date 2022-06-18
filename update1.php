<?php
session_start();
include ("db.php");
$id=$_GET['id'];
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

$query="UPDATE `payfees` SET `name`='$name',`regno`='$regno',`dept`='$dept',`class`='$class',`sem`='$sem',`fees`='$fees',
`paidamt`='$paidamt',`ship`='$ship',`pending`='$pending',`pun`='$pun' WHERE `id`='$id'";
$data=mysqli_query ($conn, $query);

if($data){
    header("Location: adminViewLay2.php?msg new record Updated successfully!");
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
<?php
$id=$_GET['id'];
$sql="SELECT * FROM `payfees`WHERE id=$id LIMIT 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
   
        <form action="" method="POST">
            <table width="100%">

                <tr>
                    <td>
                        Name of the student:
                    </td>
                    <td><input type="text" name="name"  value="<?php echo $row['name']?>">
                    </td>
                    <td>
                        Registe Number:
                    </td>
                    <td><input type="text" name="regno"  value="<?php echo $row['regno']?>">
                    </td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td><select  name="dept" >
                        <option value="Select Dept" <?php if($row['dept']=='Select Dept')
                            {
                                echo "selected";
                            }
                            ?>>Select Dept</option>
                            <option value="CS" <?php if($row['dept']=='CS')
                            {
                                echo "selected";
                            }
                            ?>>COMPUTER SCIENCE</option>
                            <option value="MATHS" <?php if($row['dept']=='MATHS')
                            {
                                echo "selected";
                            }
                            ?>>MATHS</option>
                            <option value="PHYSICS" <?php if($row['dept']=='PHYSICS')
                            {
                                echo "selected";
                            }
                            ?>>PHYISCS</option>
                            <option value="CHEMISTRY" <?php if($row['dept']=='CHEMISTRY')
                            {
                                echo "selected";
                            }
                            ?>>CEMISTRY</option>
                            <option value="BBA" <?php if($row['dept']=='BBA')
                            {
                                echo "selected";
                            }
                            ?>>BBA</option>
                            <option value="BCOM" <?php if($row['dept']=='BBA')
                            {
                                echo "selected";
                            }
                            ?>>BCOM</option>
                            <option value="BCOM-CA" <?php if($row['dept']=='BCOM')
                            {
                                echo "selected";
                            }
                            ?>>BCOM-CA</option>
                            <option value="ENGLISH" <?php if($row['dept']=='BCOM-CA')
                            {
                                echo "selected";
                            }
                            ?>>ENGLISH</option>
                            <option value="TAMIL" <?php if($row['dept']=='TAMIL')
                            {
                                echo "selected";
                            }
                            ?>>TAMIL</option>
                    </td>
                    <td>
                        Year & Section :
                    </td>
                    <td><select name="class" >
                        <option value="Select year" <?php if($row['class']=='Select year')
                            {
                                echo "selected";
                            }
                            ?>>Select year</option>
                            <option value="I-A" <?php if($row['class']=='I-A')
                            {
                                echo "selected";
                            }
                            ?>>I - A</option>
                            <option value="I-B" <?php if($row['class']=='I-B')
                            {
                                echo "selected";
                            }
                            ?>>I - B</option>
                            <option value="I-C" <?php if($row['class']=='I-C')
                            {
                                echo "selected";
                            }
                            ?>>I - C</option>
                            <option value="I1-A" <?php if($row['class']=='II-A')
                            {
                                echo "selected";
                            }
                            ?>>II - A</option>
                            <option value="II-B" <?php if($row['class']=='II-B')
                            {
                                echo "selected";
                            }
                            ?>>II - B</option>
                            <option value="II-C" <?php if($row['class']=='II-C')
                            {
                                echo "selected";
                            }
                            ?>>II - C</option>
                            <option value="III-A" <?php if($row['class']=='III-A')
                            {
                                echo "selected";
                            }
                            ?>>III - A</option>
                            <option value="III-B" <?php if($row['class']=='III-B')
                            {
                                echo "selected";
                            }
                            ?>>III - B</option>
                            <option value="III-C" <?php if($row['class']=='III-C')
                            {
                                echo "selected";
                            }
                            ?>>III - C</option>

                    </td>

                </tr>
               <tr>
                    <td> Semester:</td>
                    <td> <select name="sem">
                        <option value="Select sem" <?php if($row['sem']=='Select sem')
                            {
                                echo "selected";
                            }
                            ?>
                            >Select sem</option>
                            <option value="I"<?php if($row['sem']=='I')
                            {
                                echo "selected";
                            }
                            ?>
                            >I</option>
                            <option value="II"  <?php if($row['sem']=='II')
                            {
                                echo "selected";
                            }
                            ?>
                            >II</option>
                            <option value="III" <?php if($row['sem']=='III')
                            {
                                echo "selected";
                            }
                            ?>
                            >III</option>
                            <option value="IV"  <?php if($row['sem']=='IV')
                            {
                                echo "selected";
                            }
                            ?>
                            >IV</option>
                            <option value="V"  <?php if($row['sem']=='V')
                            {
                                echo "selected";
                            }
                            ?>
                            >V</option>
                            <option value="VI" <?php if($row['sem']=='VI')
                            {
                                echo "selected";
                            }
                            ?>
                            >VI</option>
                    </td>
                    <td>Tution Fees: </td>
                    <td><input type="number"  name="fees"  value="<?php echo $row['fees']?>"></td>

                </tr>

                <tr>
                    <td>
                        Paid Amount:
                    </td>
                    <td><input type="number"  name="paidamt"  value="<?php echo $row['paidamt']?>">
                    </td>

                    <td>
                        Pending Amount:
                    </td>
                    <td><input type="number"  name="pending"  value="<?php echo $row['pending']?>">

                <tr>
                    <td>
                        Scholarship:
                    </td>
                    <td><input type="number" name="ship"  value="<?php echo $row['ship']?>">
                    </td>
                    
            
                <td>
                    Paid or Unpaid:
                </td>
                <td>
                      <input type="radio" name="pun" value="paid" <?php echo($row['pun']=='paid')?
"checked":"";?>>paid
                     
                      <input type="radio"  name="pun" value="unpaid" <?php echo($row['pun']=='unpaid')?
"checked":"";?>>unpaid

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