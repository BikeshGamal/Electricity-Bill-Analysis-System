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
  <form class="bg-light" action="process_bill_payment.php" method="POST">
    <legend class="ml-3">
    <a class="a1" href="index.php">Home</a>  
      <a class="a1" href="form.php">Customer Entry</a>  
    <a class="a1" href="cus_bill.php">Bill Entry</a>
    <a class="a1" href="bill_payment.php">payment Entry</a>
    <a class="a1" href="view_customer.php">Cutomer Details</a>
    <a class="a1" href="view_bill.php">Bill Details</a>
    <a class="a1" href="pay.php">Payment Details</a>
  </legend>
  <div class="mx-5 my-2">
    <label for="pay_id" class="form-label">Pay ID</label>
    <input type="number" class="form-control" name="pay_id" required>
  </div>
  <div class="mx-5 my-2">
    <label for="bill_id" class="form-label">Bill ID</label>
    <input type="number" class="form-control" name="bill_id" required>
  </div>
  <div class="mx-5 my-2">
    <label for="cid" class="form-label">Customer ID</label>
    <input type="number" class="form-control" name="cid" required>
  </div>
  <div class="mx-5 my-2">
    <label for="bill_amount" class="form-label">Amount</label>
    <input type="text" class="form-control" name="bill_amount" required>
  </div>
  <div class="mx-5 my-2">
    <label for="discount" class="form-label">Discount</label>
    <input type="text" class="form-control" name="discount" required>
  </div>
  <div class="mx-5 my-2">
    <label for="penalty" class="form-label">Penalty</label>
    <input type="text" class="form-control" name="penalty" required>
  </div>
  <div class="mx-5 my-2">
    <label for="payment_method_id" class="form-label">Payment Method</label>
    <select class="form-control" name="payment_method_id">
        <option>Choose payment method</option>
        <option value="301">Esewa</option>
        <option value="302">Khalti</option>
        <option value="303">Connect IPS</option>
        <option value="304">Bank</option>
    </select>
  </div>
  <button type="submit" class="btn btn-danger mx-5 my-2">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>