<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    body{
        background: gray;
    }
    </style>
</head>
  <body>
  <form class="bg-light" action="bpm_process.php" method="POST">
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