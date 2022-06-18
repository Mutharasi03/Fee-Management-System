 <?php
include('db.php');
$query="select * from payfees";
$result=mysqli_fetch_assoc($conn,$sql);
?>
<?php
{
    echo  $result['id']."".$result['name']."".$result['regno']."".  $result['dept']."".$result['class']."".  $result['sem']."".
    $result['fees']."".$result['paidamt']."".$result['ship']."".$result['pending']."".$result['pun']."";             
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
        <form name="" id="" action="">
<table border="3">
<tr>
<td>NAME:</td>

</tr>
    <tr>
            <td>REGISTER NUMBER:</td>
            
            </tr>
            <tr>
                <td>DEPARTMENT:</td>
                
                </tr>
                <tr>
                    <td>YEAR&SEC:</td>
                    
                </tr>
                    <tr>
                        <td>TOTAL FEES:</td>
                        
                        </tr>
                        <tr>
                            <td>PENDING:</td>
                            
                            </tr>
                            <tr>
                                <td>SCHOLARSHIP:</td>
                                
                                <tr>
                                    <td>PAID AMOUNT:</td>
                                    
                                    </tr>
                                       </tr>
                                       <tr>
                                        <td>STATUS:</td>
                                        
                                        </tr>
                                        <style>
    body
    {
        font-family:sans-serif; 
    }
td{
 padding: 10px;
 }
                      </style>

                                                                                                                                                          


               </body>
              </html>