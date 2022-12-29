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
  <form class="bg-light" action="process_bill.php" method="POST">
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
    <label for="bill_id" class="form-label">Bill ID</label>
    <input type="number" class="form-control" name="bill_id" required>
  </div>
  <div class="mx-5 my-2">
    <label for="b_month" class="form-label">Month</label>
    <input type="text" class="form-control" name="b_month" required>
  </div>
  <div class="mx-5 my-2">
    <label for="b_year" class="form-label">Year</label>
    <input type="text" class="form-control" name="b_year" required>
  </div>
  <div class="mx-5 my-2">
    <label for="current_reading" class="form-label">Current Reading</label>
    <input type="text" class="form-control" name="current_reading" required>
  </div>
  <div class="mx-5 my-2">
    <label for="previous_reading" class="form-label">Previous Reading</label>
    <input type="text" class="form-control" name="previous_reading" required>
  </div>
  <div class="mx-5 my-2">
    <label for="previous_due" class="form-label">Previous due</label>
    <input type="number" class="form-control" name="previous_due" required>
  </div>
  <div class="mx-5 my-2">
    <label for="ispaid" class="form-label">status</label>
    <input type="number" class="form-control" name="ispaid" required>
  </div>
  <div class="mx-5 my-2">
    <label for="customer_id" class="form-label">Customer_id</label>
    <input type="number" class="form-control" name="customer_id" required>
  </div>
  <button type="submit" class="btn btn-danger mx-5 my-2">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>