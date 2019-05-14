<!DOCTYPE html>
<html>
<head>
    <title>Basics for Ajax </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Rasa:300,400,700|Stylish" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
        echo "<h2>My favourite movies are: </h2>";
        $name = htmlspecialchars($_REQUEST['movie1']);
        echo "<p>$name</p>";
        $name2 = htmlspecialchars($_REQUEST['movie2']);
        echo "<p>$name2</p>";
        $name3 = htmlspecialchars($_REQUEST['movie3']);
        echo "<p>$name3</p>";
        $name4 = htmlspecialchars($_REQUEST['movie4']);
        echo "<p>$name4</p>";
        $name5 = htmlspecialchars($_REQUEST['movie5']);
        echo "<p>$name5</p>";

        echo "<h2>My favourite shows are: </h2>";
        $show = htmlspecialchars($_REQUEST['show1']);
        echo "<p>$show</p>";
        $show2 = htmlspecialchars($_REQUEST['show2']);
        echo "<p>$show2</p>";
        $show3 = htmlspecialchars($_REQUEST['show3']);
        echo "<p>$show3</p>";
        $show4 = htmlspecialchars($_REQUEST['show4']);
        echo "<p>$show4</p>";
        $show5 = htmlspecialchars($_REQUEST['show5']);
        echo "<p>$show5</p>";
    }

    else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h2>My favourite country is:</h2>";
        $country = htmlspecialchars($_REQUEST['country']);
        echo "<p>$country</p>";

        echo "<h2>The worst movie I ever saw is: </h2>";
        $movie = htmlspecialchars($_REQUEST['worst']);
        echo "<p>$movie</p>";
    }

    
?>
</body>
</html>