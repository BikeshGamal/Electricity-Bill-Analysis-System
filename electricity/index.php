<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background:green;
            color:white;
            text-align: center;
            padding:20px;
        }
        .par{
            display:flex;
        }
        .menu{
            background-color: gray;
            height:100vh;
        }
        a{
            text-decoration: none;
            line-height: 30px;
            color:black;
        }
        h3{
            background-color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>Nepal Electricity Authority</h1>
        <h2>Bill Analysis System</h2>
    </header>
    <div class="par">
    <div class="menu">
        <ul style="list-style:none;">
            <a href="index.php"><li><h3>Home Page</h3></li></a>
            <a href="form.php"><li><h3>Detail Page</h3></li></a>
            <a href="consumer_module.php"><li><h3>consumer Module</h3></li></a>
            <a href="bill_module.php"><li><h3>Bill Management module</h3></li></a>
            <a href="pay_module.php"><li><h3>Payment Management</h3></li></a>
            <a href="report.php"><li><h3>Reporting</h3></li></a>
        </ul>
    </div>
    <div class="detail">
        <img height="100%" width="1100px" src="https://myrepublica.nagariknetwork.com/uploads/media/2019/August/NEA.jpg">
    </div>
    </div>
</body>
</html>