<?php
    $errors = [];
    function name(){
        if(!$_POST['name']){
            $GLOBALS['errors']["name"] = "Vui lòng nhập tên sản phẩm!";
            return false;
        }
        return true;
    }
    function category(){
        if(!$_POST['category']) {
            $GLOBALS['errors']["category"] = "Vui lòng chọn danh mục!";
            return false;
        }
        if($_POST['category'] != "Beverages") {
            $GLOBALS['errors']["category"] = "Phải là Beverages!";
            return false;
        }
        return true;
    }
    function unitPrice(){
        if(!$_POST['price']) {
            $GLOBALS['errors']["price"] = "Vui lòng nhập đơn giá!" ;
            return false;
        }
        if(!is_numeric($_POST['price'])) {
            $GLOBALS['errors']["price"] = "Phải là số!" ;
            return false;
        }
        if($_POST['price'] < 0) {
            $GLOBALS['errors']["price"] = "Phải là số Dương!" ;
            return false;
        }
        return true;
    }
    function validate(){
        $name       = name();
        $category   = category();
        $unitPrice  = unitPrice();
        if($name && $category && $unitPrice) return true;
        else return false;
    }
    if(isset($_POST['submit'])){
        validate();
    }
?>