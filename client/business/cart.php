<?php 

    function creat_cart($userId, $productName, $quantity, $size, $productID, $producImage, $sugar, $ice, $topping, $priceProOpt) {
        $sql = " INSERT into cart ( userId, product_name, quantity, product_size, product_img, product_id, sugar, ice, topping, priceProOpt ) values ('$userId', '$productName', '$quantity', '$size', '$producImage', '$productID', '$sugar', '$ice', '$topping', '$priceProOpt') ";
        executeQuery($sql);
    }
