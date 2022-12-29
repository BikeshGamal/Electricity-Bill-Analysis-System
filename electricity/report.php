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
<legend class="ml-3">
<a class="a1" href="index.php">Home</a>  
  <a class="a1" href="form.php">Customer Entry</a>  
    <a class="a1" href="cus_bill.php">Bill Entry</a>
    <a class="a1" href="bill_payment.php">payment Entry</a>
    <a class="a1" href="view_customer.php">Cutomer Details</a>
    <a class="a1" href="view_bill.php">Bill Details</a>
    <a class="a1" href="pay.php">Payment Details</a>
  </legend>
</body>
</html>
<?php
$a1=0;$a2=0;$a3=0;$a4=0;$a5=0;$a6=0;$a7=0;$a8=0;$a9=0;$a10=0;$t=0;$d1=0;$d2=0;$d3=0;
$server="localhost";
$user="root";
$password="";
$db="nea_bill_database"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT customer_id,sc_number,name,phone,branch_name,demand_name from customer c,branch b,demand_type d where c.branch_id=b.branch_id and c.deamand_id=d.demand_id ";
  $result=mysqli_query($con, $sql) ;
  echo "<h1>Customers Summary:</h1>\n";
  while($row=mysqli_fetch_assoc($result))
  {
  if($row['branch_name']=="LAGANKHEL")
  {
    $a10++;
  }
  else if($row['branch_name']=="ACHHAM")  
  {
    $a1++;
  }
  else if($row['branch_name']=="AMUWA")  
  {
    $a2++;
  }
  else if($row['branch_name']=="ANARMANI")  
  {
    $a3++;
  }
  else if($row['branch_name']=="ARGHAKHACHI")  
  {
    $a4++;
  }
  else if($row['branch_name']=="BAGLUNG")  
  {
    $a5++;
  }
  else if($row['branch_name']=="BAITADI")  
  {
    $a6++;
  }
  else if($row['branch_name']=="BANESHWAR")  
  {
    $a7++;
  }
  else if($row['branch_name']=="CHABAHIL")  
  {
    $a8++;
  }
  else if($row['branch_name']=="DAMAK")  
  {
    $a9++;
  }
  else{
    echo "err";
  }
  if($row['demand_name']=="5A")
  {
    $d1++;
  }
  else if($row['demand_name']=="15A")
  {
    $d2++;
  }
  else if($row['demand_name']=="30A")
  {
    $d3++;
  }
  else{
    echo "err";
  }
  $t++;
  }
  echo "<b>Total Number of Customer:<b>".$t;
  echo "<br><br>";
  echo "Total Number of Customer in ACHHAM Branch:".$a1;
  echo "<br><br>";
  echo "Total Number of Customer in AMUWA Branch:".$a2;
  echo "<br><br>";
  echo "Total Number of Customer in ANARMANI Branch:".$a3;
  echo "<br><br>";
  echo "Total Number of Customer in ARGHAKHACHI Branch:".$a4;
  echo "<br><br>";
  echo "Total Number of Customer in BAGLUNG Branch:".$a5;
  echo "<br><br>";
  echo "Total Number of Customer in BAITADI Branch:".$a6;
  echo "<br><br>";
  echo "Total Number of Customer in BANESHWAR Branch:".$a7;
  echo "<br><br>";
  echo "Total Number of Customer in CHABAHIL Branch:".$a8;
  echo "<br><br>";
  echo "Total Number of Customer in DAMAK Branch:".$a9;
  echo "<br><br>";
  echo "Total Number of Customer in LAGANKHEL Branch:".$a10;
  echo "<br><br>";
  echo "Total Number of Customer(5A):".$d1;
  echo "<br><br>";
  echo "Total Number of Customer(15A):".$d2;
  echo "<br><br>";
  echo "Total Number of Customer(30A):".$d3;
  echo "<br><br>";
?>
