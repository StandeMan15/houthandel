<?php
$br = "<br>";

$class_one = intval($_REQUEST['class_one']);
$class_two = intval($_REQUEST['class_two']);
$class_three = intval($_REQUEST['class_three']);
$total = 0;

if(isset($class_one)){
    $amount_one = $class_one * 300;
    echo "Kosten voor klasse 1 hout " . $amount_one . $br;
    $total += $amount_one;
}

if(isset($class_two)){
    $amount_two = $class_two * 500;
    echo "Kosten voor klasse 2 hout " . $amount_two . $br;
    $total += $amount_one;
}

if(isset($class_three)){
    $amount_three = $class_three * 450;
    echo "Kosten voor klasse 3 hout " . $amount_three . $br;
    $total += $amount_three;
}

$shave = $class_one + $class_two + $class_three;

if($shave >= 200){
    $total += 200;
} else {
    $total += $shave * 0.60;
}

if (isset($_REQUEST['delivery_days'])) {

    $deliveryDays = $_REQUEST['delivery_days'];

    if ($deliveryDays < 21) {
        $total *= 0.99;
        $discount = $total * 0.01;
    }
    if (($deliveryDays >= 21) && ($deliveryDays < 28)) {
        $total *= 0.98;
        $discount = $total * 0.02;
    }
    if ($deliveryDays > 28) {
        $total *= 0.975;
        $discount = $total * 0.025;
    }
}

echo "Uw korting is " . $discount . $br;
echo "Totaal " . $total;


?>