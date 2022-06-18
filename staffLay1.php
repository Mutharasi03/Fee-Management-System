<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-details</title>
</head>

<body>
    <div class="deptbox" id="cen">
        <form method="GET" action="staffLay2.php">
            <table>
              
                <tr>
                    <td> <b>DEPARTMENT</b></td>
                    <td>
                        <select name="dept" value="<?php if(isset($_GET['dept'])){echo $_GET['dept'];} ?>">
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
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <b>CLASS</b></td>
                    <td><select name="class" value="<?php if(isset($_GET['class'])){echo $_GET['class'];} ?>">
                            <option>SELECT CLASS</option>
                            <option value="I-A">I - A</option>
                            <option value="I-B">I - B</option>
                            <option value="I-C">I - C</option>
                            <option value="I1-A">II - A</option>
                            <option value="II-B">II - B</option>
                            <option value="II-C">II - C</option>
                            <option value="III-A">III - A</option>
                            <option value="III-B">III - B</option>
                            <option value="III-C">III - C</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b> SEMESTER</b></td>
                    <td>
                        <select name="sem" value="<?php if(isset($_GET['sem'])){echo $_GET['sem'];} ?>">
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>



                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    table {
        background-color: #45ADA8;
     
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
    input[type=number],
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