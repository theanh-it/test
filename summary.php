<?php require_once('function.php'); ?>
<!DOCTYPE html>
<html>
<head>    
    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S3777219 final test</title>
    <!-- CSS linking-->
    <link rel="stylesheet" href="product.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .form{
            padding: 15px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
<div class ="main">
<div class ="form">
    <h2>Sumary</h2>
    <p>Name: <?php echo $_GET["name"]; ?></p>
    <p>Category: <?php echo $_GET["category"]; ?></p>
    <p>Unit price: <?php echo $_GET["price"]; ?></p>
    <p>Supplier: <?php echo $_GET["supplier"]; ?></p>
</div>    
</div>
</body>
</html>