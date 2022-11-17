<?php
$br = "<br>";

$class_one = $_REQUEST['class_one'];
$class_two = $_REQUEST['class_two'];
$class_three = $_REQUEST['class_three'];
$total = 0;

if (isset($class_one)) {
    if(is_numeric($class_one)){
        $amount_one = $class_one * 300;
        $total += $amount_one;
    } else {
        $amount_one = 'Ongeldige waarde';
    }

}

if (isset($class_two)) {
    if(is_numeric($class_two)){
        $amount_two = $class_two * 500;
        $total += $amount_two;
    } else {
        $amount_two = 'Ongeldige waarde';
    }
}

if (isset($class_three)) {
    if(is_numeric($class_three)){
        $amount_three = $class_three * 900;
        $total += $amount_three;
    } else {
        $amount_three = 'Ongeldige waarde';
    }
}

if($total <= 200){
    $total += $total * 0.60;
    $shave_costs = $total * 0.60;
} else {
    $shave_costs = 0;
}

if (isset($_REQUEST['delivery_date'])) {

    $beginDate = strtotime(date('y-m-d'));
    $endDate = strtotime($_REQUEST['delivery_date']);
    $dateDiff = $endDate - $beginDate;

    if ($dateDiff < 21) {
        $discount = $total * 0.01;
        $total *= 0.99;
    }
    if (($dateDiff >= 21) && ($dateDiff < 28)) {
        $discount = $total * 0.02;
        $total *= 0.98;

    }
    if ($dateDiff > 28) {
        $discount = $total * 0.025;
        $total *= 0.975;
    }
    $amount_one = str_replace('.',',',$amount_one);
    $amount_two = str_replace('.',',',$amount_two);
    $amount_three = str_replace('.',',',$amount_three);
    $shave_costs = str_replace('.',',',$shave_costs);
    $discount = str_replace('.',',',$discount);
    $total = str_replace('.',',',$total);
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
            <p class="card-text">Kosten voor klasse 1: € <?= $amount_one ?></p>
            <p class="card-text">Kosten voor klasse 2: € <?= $amount_two ?></p>
            <p class="card-text">Kosten voor klasse 3: € <?= $amount_three ?></p>
            <p class="card-text">Kosten voor schaven: € <?= $shave_costs ?></p>
            <p class="card-text">Uw korting is : € <?= $discount ?></p>
            <p class="card-text">Totaal: € <?= $total ?></p>
        </div>
    </div>

</body>

</html>