<?php
session_start();


if (!($_SESSION["username"])) {
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
        <form method="GET" action="studentLay2.php">
            <table>
              
                <tr>
                    <td>
                        <lable for="student"><b>REGISTER NUMBER</b></lable>
                    </td>
                    <td><input type="text" name="regno" value="<?php if(isset($_GET['regno'])){echo $_GET['regno'];} ?>">
                    </td>
                </tr>
                
                <td><b> SEMESTER</b></td>
                <td>
                        <select name="sem" value="<?php if(isset($_GET['sem'])){echo $_GET['sem'];} ?>">
                        <option value="Select sem">Select sem</option>
                            <option value="I" >I</option>
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
        background-color: rgb(252, 221, 210);
        border-radius: 10%;
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
        border-radius: 24px;
        border: 2px solid purple;
        float: right;
        background-color: palevioletred;
    }

    input[type="submit"]:hover {
        background-image: url(image/img8.jpg);
    }
    </style>