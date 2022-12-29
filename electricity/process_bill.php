<?php
$customer_id=$_POST["customer_id"];
$bill_id=$_POST["bill_id"];
$b_month=$_POST["b_month"];
$b_year=$_POST["b_year"];
$current_reading=$_POST["current_reading"];
$previous_reading=$_POST["previous_reading"];
$unit_consumed=$current_reading-$previous_reading;
$rate=10;
$subtotal=10*$unit_consumed;
$previous_due=$_POST["previous_due"];
$total=$subtotal+$previous_due;
$ispaid=$_POST["ispaid"];
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
  $sql = "INSERT INTO `current_bill` (`bill_id`, `b_month`, `b_year`, `current_reading`, `previous_reading`, `unit_consumed`, `rate`, `subtotal`,`previous_due`,`total`,`ispaid`,`customer_id`) VALUES ('$bill_id', '$b_month', '$b_year', '$current_reading', '$previous_reading', '$unit_consumed', '$rate', '$subtotal','$previous_due','$total','$ispaid','$customer_id')";
  
  if (mysqli_query($con, $sql)) {
    echo "New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
 
?>
