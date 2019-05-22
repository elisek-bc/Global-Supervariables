<?php
session_start();
setcookie("TestCookie",(time()+60*60*24*30));
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation PHP</title>

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
		$candyObj->price = '1.56 euro';
    }

// 4. create if statement to change something in array items 20 % chance
    $randomNum = rand(1,5);
    echo $randomNum;
    
    
    if($randomNum == 5) {
        $randomFunc = rand(1,3);
        switch ($randomFunc){

        // change in array
        case 1:
        $fruits[rand(0,2)] = "Banana";
        //var_dump ($fruits);
        break;
        //or
        
        case 2:
        // change in associative array
        $customveg = array_rand($amountveggies,1);
        $amountveggies[$customveg] = "5";
        //var_dump ($amountveggies);
        break;
        //or

        //change in object
        case 3:
        $candy = (array)$candyObj;
        $candyProp = array_rand($candy,1);
        $candyObj->$candyProp = "random";
        //var_dump ($candyObj);
        break;

        default:
        return;
        }

    } else {
        echo "Try again";
    }

//5.?
//6. divide the array in half
    $fruits1 = array_slice($fruits, 0, 2);
    $fruits2 = array_slice($fruits, 2, 3);
    //var_dump($fruits1);
    //var_dump($fruits2);

//7. Remove the last item of the associative array
    unset($amountveggies["Lettuce"]);
    //var_dump($amountveggies);

//8. Add the arrays to the object as arr1 and arr2
//9. Loop through the associative array adding all items to the object as key => value
    foreach ($amountveggies as $key => $value){
        $candyObj->$key = $value;
    }
    //var_dump($candyObj);

//10. Save the object in the $_COOKIE superglobal
    $candyObjNew = JSON_ENCODE($candyObj);//explanation needed: I think this encodes the object for security reasons, because it can't be in a cookie otherwise cause it's visible to hackers
    $_COOKIE["TestCookie"] = $candyObjNew;
    ?>
    <pre>
    <?php
    //11. Find a way to print this final object on the homepage, in an easily readable way
        print_r($fruits);
        print_r($amountveggies);
        print_r($candyObj);
        print_r($fruits1);
        print_r($fruits2);
        echo "<h2>My Cookie:</h2>";
        var_dump(JSON_DECODE($_COOKIE["TestCookie"]));//decodes the cookie
    ?>
    </pre>
</body>
</html>
