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
            width:103px;
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
$server="localhost";
$user="root";
$password="";
$db="nea_bill_database"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT bill_id,b_month,b_year,current_reading,previous_reading,unit_consumed,rate,subtotal,previous_due,total,ispaid from current_bill where ispaid=1 ";
  $result=mysqli_query($con, $sql) ;
  echo "<h1>Bill Details:</h1>\n";
  echo"<table>
  <tr>
    <td><div class='d1'>Bill ID</div></td>
    <td><div class='d1'>Month</div></td>
    <td><div class='d1'>Year</div></td>
    <td><div class='d1'>cur.Reading</div></td>
    <td><div class='d1'>Prev.Reading</div></td>
    <td><div class='d1'>Unit Consumed</div></td>
    <td><div class='d1'>Rate</div></td>
    <td><div class='d1'>Sub Total</div></td>
    <td><div class='d1'>Previous Due</div></td>
    <td><div class='d1'>Total</div></td>
    <td><div class='d1'>Ispaid</div></td>
    <td><div class='d1'>Action</div></td>
    </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result))
  {
    echo"<table>
    <tr>
    <td> <div class='d1'>$row[bill_id] </div></td>
    <td><div class='d1'>$row[b_month]</div></td>
    <td><div class='d1'>$row[b_year]</div></td>
    <td><div class='d1'>$row[current_reading]</div></td>
    <td><div class='d1'>$row[previous_reading]</div></td>
    <td><div class='d1'>$row[unit_consumed]</div></td>
    <td><div class='d1'>$row[rate]</div></td>
    <td><div class='d1'>$row[subtotal]</div></td>
    <td><div class='d1'>$row[previous_due]</div></td>
    <td><div class='d1'>$row[total]</div></td>
    <td><div class='d1'>$row[ispaid]</div></td>
    <td><div class='d1'><a href='payment.php'>Pay Now</a></div></td>
    </tr>
    </table>";
  }
?>

