<?php
require('Color.php');
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
    <div class="wrapper">
        <div class="row m-auto">
            <div class="col m-auto text-center">
                <h1>Cool nickname generator</h1>
                <form method="post">
                    <input type='text' name="nickname" placeholder="Type your name...">
                    <input type='submit' name="submit" value="Generate" id="button">
                </form>
                <div id="results">
                    <!--PHP STARTS HERE-->
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $nickname = $_POST["nickname"];
                            echo "$nickname<br>";

                            //name backwards
                            $nickname = strrev($nickname);
                            echo "$nickname<br>";

                            //name in uppercase
                            $nickname = strtoupper($nickname);
                            echo "$nickname<br>";

                            //name backwards again
                            $nickname = strrev($nickname);
                            echo "$nickname<br>";

                            //name with stripes before and after
                            $nickname = "--".$nickname."--";
                            echo $nickname;

                            //name without stripes and with x in front
                            $nickname = trim($nickname,"--");
                            $nickname = "x".$nickname;
                            echo "<br>$nickname";

                            //name without x and with 2-4 random characters in front
                            $nickname = trim($nickname,"x");
                            $randomWord = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, rand(2,4));
                            $nickname = $randomWord.$nickname;
                            echo "<br>$nickname";

                            //wrap characters in brackets
                            $nickname = trim($nickname,$randomWord);
                            $nickname = "[".$randomWord."]".$nickname;
                            echo "<br>$nickname";
                            $randomNumber = rand(1, strlen($nickname))-1;

                            //select random character of $nickname and check if upper or lowercase, change the case, print the string like that
                            if(ctype_upper($nickname[$randomNumber])){
                                $nickname[$randomNumber]=strtolower($nickname[$randomNumber]);
                                echo "<br>".$nickname;
                            } else {
                                $nickname[$randomNumber]=strtoupper($nickname[$randomNumber]);
                                echo "<br>".$nickname."<br>";
                            };

                            //BONUS: gives every letter a darker color by putting it in a span
                            /*using \Mexitek\PHPColors\Color; 
                            $color = new Color("336699");  //defines a color                   
                            echo $color; //gives the color

                            for ($i=0; $i<strlen($nickname); $i++) { //zo lang de string van nickname lang is; voor elke letter
                                $color = $color->darken(); //darkens the initial color
                                echo "<span style='color: $color'>".$nickname[$i]."</span>"; //prints the letter in a darker color in a span
                                echo $color; //prints the new color*/
                            
                            };

                            

                        
                    ?>
                    <!--PHP ENDS HERE-->
                </div>
            </div>
        </div>
    </div>

<script>
    var results = document.getElementById('results');
    var button = document.getElementById('button');
    var row = document.querySelector('.row');
    
    /*button.addEventListener('click',showResults);
    function showResults(e){
        e.preventDefault(); // prevents reload: submit automatically reloads page
        results.style.display = 'block';
        row.style.top = '30%';
    }*/
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>