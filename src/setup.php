<!DOCTYPE html>
<html>
<head>
    <title>Global Variables PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Oswald:400,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <div class="container">
        <!--POST PART-->
        <div class="row poster">
            <div class="col-6 movies">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <h2>Top 5 Disney movies</h2>
                    <input type="text" name="movie1" value="Up!">
                    <br>
                    <input type="text" name="movie2" value="The Lion King">
                    <br>
                    <input type="text" name="movie3" value="Wall-e">
                    <br>
                    <input type="text" name="movie4" value="Rapunzel">
                    <br>
                    <input type="text" name="movie5" value="Big Hero 6">
                    <br>
                    <input type="submit" value="Submit">
                </form> 
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
            $name = htmlspecialchars($_REQUEST['movie1']);
            echo $name;
            $name2 = htmlspecialchars($_REQUEST['movie2']);
            echo $name2;
            $name3 = htmlspecialchars($_REQUEST['movie3']);
            echo $name3;
            $name4 = htmlspecialchars($_REQUEST['movie4']);
            echo $name4;
            $name5 = htmlspecialchars($_REQUEST['movie5']);
            echo $name5;
            }
            ?>

            <div class="col-6 shows">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <h2>Top 5 tv shows</h2>
                    <input type="text" name="show1" value="Money Heist">
                    <br>
                    <input type="text" name="show2" value="New girl">
                    <br>
                    <input type="text" name="show3" value="You me her">
                    <br>
                    <input type="text" name="show4" value="Atypical">
                    <br>
                    <input type="text" name="show5" value="Riverdale">
                    <br>
                    <input type="submit" value="Submit">
                </form> 
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
            $show = htmlspecialchars($_REQUEST['show1']);
            echo $show;
            $show2 = htmlspecialchars($_REQUEST['show2']);
            echo $show2;
            $show3 = htmlspecialchars($_REQUEST['show3']);
            echo $show3;
            $show4 = htmlspecialchars($_REQUEST['show4']);
            echo $show4;
            $show5 = htmlspecialchars($_REQUEST['show5']);
            echo $show5;
            }
            ?>
    </div>
        
        <!--GET PART-->
        <div class="row getter">
            <div class="col-6 country">
                <h2>Favourite country</h2>
                <p>Italy</p>
            </div>
            <div class="col-6 worst">
                <h2>Worst movie ever seen</h2>
                <p>Into the wild</p>
            </div>
        </div>
    </div>
</body>
</html>
