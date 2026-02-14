<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>

<body>
    <h1>Basic Syntax of Php</h1>

    <?php echo "Hello PHP"; ?>
    <br>
    <?php
    $food = "Pizza";
    echo "I love food: " . $food;
    ?>


    <br>
    <!-- Variables in PHP -->

    <?php
    $age = 20;
    echo "I am " . $age . " years old" . "<br>";
    $x = 10;
    $y = 20;
    echo $x + $y . "<br>";
    print  $x + $y . "<br>";

    $name = "amit";
    $name1 = 'Amit Sen Gupta';
    $age = 20 . "<br>";
    $age1 = 20.5 . "<br>";

    var_dump($age1) . "<br>";


    class phone
    {
        var $model;
        function phoneModel($number)
        {
            global $model;
            $model = $number . "<br>";
            echo " This is $model  <br>";
        }
        
    } 
    "<br>";

    $model = new phone();
    "<br>";
    $model->phoneModel(123);

    ?>
</body>

</html>