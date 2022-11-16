<?php

$class_one = intval($_REQUEST['class_one']);
$class_two = intval($_REQUEST['class_two']);
$class_three = intval($_REQUEST['class_three']);
$total = 0;

if(isset($class_one)){
    $amount_one = $class_one * 300;
    $total += $amount_one;
}

if(isset($class_two)){
    $amount_two = $class_two * 500;
    $total += $amount_one;
}

if(isset($class_three)){
    $amount_three = $class_three * 450;
    $total += $amount_three;
}

echo $total;


// if (isset($_REQUEST['delivery_days'])) {
//     $deliveryDays = $_REQUEST['delivery_days'];
//     if ($deliveryDays <= 21) {
//         $total * 0.99;
//     }
// }

?>