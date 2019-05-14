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
// password checker
    $username = "random";
    $password = "randomPass";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if ($_POST["username"]==$username && $_POST["password"]==$password) {
            echo "Hello $username";
        } else {
            echo "Wrong password or username";
        }
    } else {
        echo "Wrong page, please log in";
    }
?>      
</body>
</html>
