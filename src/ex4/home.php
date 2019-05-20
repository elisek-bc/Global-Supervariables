<!DOCTYPE html>
<html>
<head>
    <title>Array & Object Manipulation PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Oswald:400,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <?php
    //1. create array, associative array and object
    $fruits = array("Apple", "Pear", "Peach");
    $amountveggies = array("Avocado"=>"3", "Carrot"=>"6", "Asparagus"=>"10");

    $candyObj = new stdClass();
    $candyObj->type = "Lollipop";
    $candyObj->taste = "Sweet";
    $candyObj->color = "Pink";

    function array_push_assoc($array, $key, $value){
        $array[$key] = $value;
        return $array;
    }

    // 3. add something to each array with a for loop (why a for loop?...it's not necessary no?)
    for($x = 0; $x < 1 ; $x++){
        array_push($fruits, 'Blueberries');
        $amountveggies['Lettuce'] = '1';
		$candyObj->price = '1.56';
    }
    ?>
</body>
</html>