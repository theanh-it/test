<?php

function displayError($errors, $name) {
    if(isset($errors[$name]))
        echo "<div style='color: red; display: inline-block;'>{$errors[$name]}</div>";
}

function redirect($location) {
    header("Location: $location");
    exit();
}
$name = $category = $supplier = $price = "";
function checkFields($form) {
    $errors = [];

    $key = 'name';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'name is required.';

    $key = 'category';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'Category input is required';
    else if (!preg_match("/^Beverages$/", $form[$key]))
    {
        $errors[$key] = 'Category input is required';
    }

    $key = 'price';
    if(!isset($form[$key]) || is_int($form[$key])===0)
        $errors[$key] = 'Please enter a valid price';

    if(count($errors) === 0) {
        redirect("summary.php");
    }

    return $errors;
}
?>


