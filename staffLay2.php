<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <h1>paid or unpaid </h1>
</head>
<body>
    <table border="3" width="90%">
        <tr >
            <td>S.NO</td>
            <td>STUDENT NAME</td>
            <td>REGISTER NO</td>
            <td>DEPARTMENT</td>
            <td >YEAR & SECTION</td>
            <td>SEMESTER</td>
            <td>TOTAL FEES</td>
            <td>PAID AMOUNT</td>
            <td>SCHOLORSHIP</td>
            <td>PENDING</td>
           
            <td>PAID OR UNPAID</td>

        </tr>
        <?php
        include "db.php";
        if(isset($_GET['dept'],$_GET['sem'],$_GET['class']))
        {
            $dept= $_GET['dept'];
            $sem=$_GET['sem'];
            $class=$_GET['class'];

            $query = "select * from payfees where dept='".$dept."' AND sem='".$sem."' AND class='".$class."'  ";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {
                    ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['regno'] ?></td>
                <td><?php echo $row['dept'] ?></td>
                <td><?php echo $row['class'] ?></td>
                <td><?php echo $row['sem'] ?></td>
                <td><?php echo $row['fees'] ?></td>
                <td><?php echo $row['paidamt'] ?></td>
                <td><?php echo $row['ship'] ?></td>
                <td><?php echo $row['pending'] ?></td>
                <td><?php echo $row['pun'] ?></td>
                
            </tr>
            <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<style>
td{
height:15px;

    }
    table{
        border: 2px solid black;
    }
    tr{
        width: 15px;;
    }
    body{
text-align: center;
    }
    h1{
        text-transform:uppercase ;
    }
    table{
    margin-left:5%;
    margin-top:4%
}
    table tr th td {
      
        border: solid black;
        border-width:0 1px;
    }
  tr {
      border:2px solid black;
  }
  td{
      border:2px solid black;
  }
</style>
