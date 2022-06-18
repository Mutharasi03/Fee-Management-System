<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Newcourseadd1</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <h1>
        <center>course fees</center>
    </h1>
   
    <table  width=90%>

        <tr>
            <th rowspan="2" width="5%">
                <center>S.NO</center< /th>
            <th rowspan="2" width="20%">
                <center>DEPTMENT</center>
            </th>
            <th width="" colspan="6">SEMSTER</th>
     
        </tr>
        <tr>
            <th>I</th>
            <th>II</th>
            <th>III</th>
            <th>IV</th>
            <th>V</th>
            <th>VI</th>
           
        </tr>
        <?php
        include "db.php";
        $sql = "SELECT * FROM `newdept` ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['dept'] ?></td>
                <td><?php echo $row['I'] ?></td>
                <td><?php echo $row['II'] ?></td>
                <td><?php echo $row['III'] ?></td>
                <td><?php echo $row['IV'] ?></td>
                <td><?php echo $row['V'] ?></td>
                <td><?php echo $row['VI'] ?></td>
                
               
            </tr><tr>
        <?php
        }
        ?>
    </table>
  
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<style>
    body{
        text-align:center;
    }
    h1 {
        text-transform: uppercase;
    }

    .cssbuttons-io-button {
        display: flex;
        align-items: center;
        font-family: inherit;
        font-weight: 500;
        font-size: 16px;
        padding: 0.7em 1.4em 0.7em 1.1em;
        color: white;
        background: #ad5389;
        background: linear-gradient(0deg, rgba(20, 167, 62, 1) 0%, rgba(102, 247, 113, 1) 100%);
        border: none;
        box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
        letter-spacing: 0.05em;
        border-radius: 20em;
    }


    button {
        position: absolute;
        left: 80%;
        transform: translate(-50%, -50%);
    }
table{
    margin-left:5%;
    margin-top:4%
}
    table tr th td {
        width: 10%;
        border: solid black;
        border-width:0 1px;
    }
  tr {
      border:2px solid black;
  }
  th{
      border:2px solid black;
  }
  td{
      border:2px solid black;
  }
 
  
</style>