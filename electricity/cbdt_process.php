<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            color:white;
            background-color: green;
            text-decoration: none;
        }
        body{
            background:gray;
        }
        table,th,td{
            border:1px solid black;
        }
        td{
  text-align: left;
        }
        .d1{
            width:110px;
            background: blue;
            color:white;
        }
        .d3{
            width:200px;
            background: blue;
            color:white;
        }
        legend{
      background: green;
      padding:35px;
    }
        .a1{
      padding:10px;
    }
    </style>
</head>
<body>
<legend class="ml-3"><a class="a1" href="form.php">Customer Entry</a>  
    <a class="a1" href="cus_bill.php">Bill Entry</a>
    <a class="a1" href="bill_payment.php">payment Entry</a>
    <a class="a1" href="view_customer.php">Cutomer Details</a>
    <a class="a1" href="view_bill.php">Bill Details</a>
    <a class="a1" href="pay.php">Payment Details</a>
  </legend>
</body>
</html>
<?php
$demand_id=$_POST["did"];
$server="localhost";
$user="root";
$password="";
$db="nea_bill_database"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT customer_id,sc_number,name,phone,branch_name,demand_name from customer c,branch b,demand_type d where c.branch_id=b.branch_id and c.deamand_id=d.demand_id and c.deamand_id=$demand_id ";
  $result=mysqli_query($con, $sql) ;
  echo "<h1>Customers Details:</h1>\n";
  echo"<table>
  <tr>
    <td><div class='d1'>Customer ID</div></td>
    <td><div class='d1'>SC Number</div></td>
    <td><div class='d3'>Name</div></td>
    <td><div class='d1'>Contact</div></td>
    <td><div class='d1'>Branch Name</div></td>
    <td><div class='d1'>Demand type</div></td>
    <td><div class='d1'>Action</div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[customer_id] </div></td>
    <td><div class='d1'>$row[sc_number]</div></td>
    <td><div class='d3'>$row[name]</div></td>
    <td><div class='d1'>$row[phone]</div></td>
    <td><div class='d1'>$row[branch_name]</div></td>
    <td><div class='d1'>$row[demand_name]</div></td>
    <td><div class='d1'><a href='view_bill.php'>View Bill</a></div></td>
    </tr>
    </table>";
  }
?>
