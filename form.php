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
    <h1>
        Welkom bij pieters hout handel
    </h1>
    <form style="width: 33%;" action="form_handler.php" method="post">

        <div class="formgroup">
            <label for="capacity">m3 klasse 1</label>
            <input type="text" class="form-control" name="class_one" id="class_one"><br><br>
        </div>

        <div class="formgroup">
            <label for="capacity">m3 klasse 2</label>
            <input type="text" class="form-control" name="class_two" id="class_two"><br><br>
        </div>
        <div class="formgroup">
            <label for="capacity">m3 klasse 3</label>
            <input type="text" class="form-control" name="class_three" id="class_three"><br><br>
        </div>
        <div class="formgroup">
            <label for="delivery_days">LeverDatum</label>
            <input type="date" class="form-control" name="delivery_date" id="delivery_date"><br><br>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>

</html>