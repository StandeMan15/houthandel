<?php

$class_one = $_REQUEST['class_one'];
$class_two = $_REQUEST['class_two'];
$class_three = $_REQUEST['class_three'];

$cap_one = $_REQUEST['capacity_one'];
$cap_two = $_REQUEST['capacity_two'];
$cap_three = $_REQUEST['capacity_three'];

$total = 3*3;

echo $total;


if (isset($_REQUEST['delivery_days'])) {

    $deliveryDays = $_REQUEST['delivery_days'];

    if ($deliveryDays < 21) {
        $total * 0.99;
    }
    if (($deliveryDays >= 21) && ($deliveryDays < 28)) {
        $total * 0.98;
    }
    if ($deliveryDays > 28) {
        $total * 0.975;
    }
}

?>