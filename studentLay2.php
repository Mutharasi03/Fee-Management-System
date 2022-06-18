<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print-details</title>
</head>
<body>
<h2>Receipt</h2> <center>
<?php 
 include"db.php";
                                   if(isset($_GET['regno'],$_GET['sem']))
                                    {
                                        $regno = $_GET['regno'];
                                        $sem=$_GET['sem'];

                                        $query = "select * from payfees where regno='".$regno."' AND sem='".$sem."'  ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <table border="2" width="50%">
                                                <tr>
                   <td>Name:</td>
                   <td><?php echo $row['name'] ?></td>
                   </tr>
    <tr>
        <td>Register No:</td>
        <td><?php echo $row['regno'] ?></td>
    </tr>
    <tr>
    <td>Department:</td>
    <td><?php echo $row['dept'] ?></td>             
    </tr>
    <tr>
    <td>Class:</td>
    <td><?php echo $row['class'] ?></td>
    
    </tr>
    <tr>
    <td>Semester:</td>
    <td><?php echo $row['sem'] ?></td>
               
    </tr>
    <tr>
    <td>Tution Fees:</td>
    <td><?php echo $row['fees'] ?></td>
     </tr>
    <tr>
    <td>Paid Amount:</td>
    <td><?php echo $row['paidamt'] ?></td>             
    </tr>
    <tr>
    <td>Scholorship:</td>
    <td><?php echo $row['ship'] ?></td>
               
    </tr>       
    <tr>
    <td>Pending Amount:</td>
    <td><?php echo $row['pending'] ?></td>
              
    </tr>     
    <tr>
    <td>Paid Or Unpaid:</td>
    <td><?php echo $row['pun'] ?></td>
    </tr>                            

    </table>
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>


   <div class="btn">
   <button onclick="window.print()">Print</button>
   </div>
                                </center>
</body>
</html>
<style>
    h2{
        text-align:center;
    }
    body{
        font-family: sans-serif;
        text-align:center;
    }
.btn{
    margin-top: 40px;
    
}
button{
    padding:10px;
}
 table{
    padding:25px;
    border:3px solid black;
}
table tr td{
    padding:15px;
}
table td:nth-child(1)
{
    
    font-style:italic;
    
}
</style>