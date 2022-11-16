<?php
$br = "<br>";

$class_one = intval($_REQUEST['class_one']);
$class_two = intval($_REQUEST['class_two']);
$class_three = intval($_REQUEST['class_three']);
$total = 0;

if (isset($class_one)) {
    $amount_one = $class_one * 300;
    $total += $amount_one;
}

if (isset($class_two)) {
    $amount_two = $class_two * 500;
    $total += $amount_one;
}

if (isset($class_three)) {
    $amount_three = $class_three * 450;
    $total += $amount_three;
}

echo $total;

$total_amount = $class_one + $class_two + $class_three;

if($total <= 200){
    $total += $total_amount * 0.60;
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Houthandel Pieter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="card" style="width:400px">
        <div class="card-body">
            <p class="card-text">Kosten voor klasse 1: <?= $class_one ?></p>
            <p class="card-text">Kosten voor klasse 2: <?= $class_two ?></p>
            <p class="card-text">Kosten voor klasse 3: <?= $class_three ?></p>
            <p class="card-text">Uw korting is : <?= $discount ?></p>
            <p class="card-text">Totaal: <?= $total ?></p>
        </div>
    </div>

</body>

</html>