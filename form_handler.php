<?php

$class_one = $_REQUEST['class_one'];
$class_two = $_REQUEST['class_two'];
$class_three = $_REQUEST['class_three'];
$total = 0;

if(isset($class_one)){
    $amount_one = $class_one * 300;
    $total += $amount_one;
}

if(isset($class_two)){
    $amount_two = $class_two * 300;
    $total += $amount_one;
}

if(isset($class_three)){
    $amount_three = $class_three * 300;
    $total += $amount_three;
}

echo $total;

?>