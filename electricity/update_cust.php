<?php
$server="localhost";
$user="root";
$password="";
$db="nea_bill_database"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if(isset($_POST['update']))
{
$customer_id=$_POST["cid"];
$sc_number=$_POST["scnum"];
$name=$_POST["fn"];
$address=$_POST["adr"];
$phone=$_POST["ph"];
$branch_id=$_POST["bid"];
$demand_id=$_POST["did"];
$status=$_POST["sts"];
$sql="UPDATE customer SET customer_id=$customer_id, sc_number='$sc_number',name='$name',address='$address',phone='$phone',branch_id='$branch_id',deamand_id='$demand_id',status=$status WHERE customer_id=$customer_id";
$data=mysqli_query($con,$sql);
if($data)
{
  echo "<script>alert('Record updated successfully')</script>";
  header("Location: uc.php");
  exit();
}
else{
  echo "<script>alert('errr')</script>";
}
}
  if(isset($_GET['customer_id']))
  {
    $cid=$_GET['customer_id'];
    $sql="SELECT *FROM CUSTOMER WHERE customer_id=$cid ";
    $result=mysqli_query($con, $sql) ;
    $data=$result->fetch_assoc();
    if(!isset($data))
    {
        echo "No user";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    a{
      text-decoration: none;
      background-color: red;
      color:wheat;
      margin:5px;
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
  <form class="bg-light" action="update_cust.php" method="POST">
    <legend class="ml-3">
    <a class="a1" href="index.php">Home</a>
    <a class="a1" href="form.php">Customer Entry</a>  
    <a class="a1" href="cus_bill.php">Bill Entry</a>
    <a class="a1" href="bill_payment.php">Payment Entry</a>
    <a class="a1" href="view_customer.php">Cutomer Details</a>
    <a class="a1" href="view_bill.php">Bill Details</a>
    <a class="a1" href="pay.php">Payment Details</a>
  </legend>
  <div class="mx-5 my-2">
    <label for="cid" class="form-label">Customer ID</label>
    <input type="number" class="form-control" name="cid" value="<?php echo $data['customer_id']; ?>" required >
  </div>
  <div class="mx-5 my-2">
    <label for="scnum" class="form-label">SC Number</label>
    <input type="text" class="form-control" name="scnum" value="<?php echo $data['sc_number']; ?>" required>
  </div>
  <div class="mx-5 my-2">
    <label for="fn" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="fn" value="<?php echo $data['name']; ?>" required>
  </div>
  <div class="mx-5 my-2">
    <label for="adr" class="form-label">Address</label>
    <input type="text" class="form-control" name="adr" value="<?php echo $data['address']; ?>"required >
  </div>
  <div class="mx-5 my-2">
     <label for="ph" class="form-label">Phone</label>
    <input type="number" class="form-control" name="ph" value="<?php echo $data['phone']; ?>" required>
  </div>
  <div class="mx-5 my-2">
    <label for="bid" class="form-label">Branch Name</label>
    <select class="form-control" name="bid" value="<?php echo $data['branch_id']; ?>">
        <option>Choose Branch</option>
        <option value="201">Achham</option>
        <option value="202">Amuwa</option>
        <option value="203">Anarmani</option>
        <option value="204">Arghakhachi</option>
        <option value="205">Baglung</option>
        <option value="206">Baitadi</option>
        <option value="207">Baneshwar</option>
        <option value="208">Chabahil</option>
        <option value="209">Damak</option>
        <option value="2010">Lagankhel</option> 
    </select>
  </div>
  <div class="mx-5 my-2">
    <label for="did" class="form-label">Demand Type</label>
    <select class="form-control" name="did" value="<?php echo $data['deamand_id']; ?>">
        <option>Choose Demand type</option>
        <option value="101">5A</option>
        <option value="102">15A</option>
        <option value="103">30A</option>
    </select>
  </div>
  <div class="mx-5 my-2">
    <label for="sts" class="form-label">Status</label>
    <input type="number" class="form-control" name="sts" value="<?php echo $data['status']; ?>" required>
  </div>
  <input type="hidden" name="customer_id" value="<?php echo $data['customer_id'];?>">
  <button name="update" class="btn btn-danger mx-5 my-2">Update</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>