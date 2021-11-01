<?php require_once('function.php'); ?>
<?php 
if(isset($_POST['submit'])){
    $check = validate();
    if($check) header('Location: /summary.php?name='.$_POST["name"].'&category='.$_POST["category"].'&price='.$_POST["price"].'&supplier='.$_POST["supplier"]);
} 
?>
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
</head>
<body>
<div class ="main">
<div class ="form">
    <h2>Add product</h2>
    <form id="form" method="post">
        <label>Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter product name">
        <p class="error"><?php if(isset($errors["name"])) echo $errors["name"]; ?></p>
        <br>
        <label>Category:</label>
        <input type="text" name="category" id="category" placeholder="Enter product category">
        <p class="error"><?php if(isset($errors["category"])) echo $errors["category"]; ?></p>
        <br>
        <label>Unit price:</label>
        <input type="text" name="price" id="price" placeholder="Enter product price">
        <p class="error"><?php if(isset($errors["price"])) echo $errors["price"]; ?></p>
        <br>
        <label>Supplier:</label>
        <select id="supplier" name="supplier">
        <option value="Pavlova, Ltd.">Pavlova, Ltd</option>
        <option value="Exotic Liquids">Exotic Liquids</option>
        <option value="HotNCold">HotNCold</option>
        <br><br><br>
        <input type="submit" name="submit" value="Submit" id="submit" class="btn">           
        </select>
    </form>
</div>    
</div>
</body>
</html>