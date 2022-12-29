<?php
$customer_id=$_POST["cid"];
$pay_id=$_POST["pay_id"];
$bill_id=$_POST["bill_id"];
$bill_amount=$_POST["bill_amount"];
$discount=$_POST["discount"];
$penalty=$_POST["penalty"];
$payment_amount=$bill_amount+$penalty-$discount;
$payment_method_id=$_POST["payment_method_id"];
?>
<?php
$server="localhost";
$user="root";
$password="";
$db="nea_bill_database"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO `bill_payment` (`pay_id`, `bill_id`, `bill_amount`, `discount`, `penalty`, `payment_amount`, `payment_method_id`,`customer_id`) VALUES ('$pay_id', '$bill_id','$bill_amount', '$discount', '$penalty', '$payment_amount', '$payment_method_id','$customer_id')";
  
  if (mysqli_query($con, $sql)) {
    echo "New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
