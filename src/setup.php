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
    <div class="wrapper">
        <!--POST PART-->
        <div class="row poster m-auto">
        <form method="post" action="result.php"> 
            <div class="col-12 movies m-auto text-center">            
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
            </div>
            <div class="col-12 shows m-auto text-center">              
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
            </div>
        </form>
    </div>
        
        <!--GET PART-->
        <div class="row getter m-auto">
        <form method="get" action="result.php"> 
            <div class="col-12 country m-auto text-center">
                <h2>Favourite country</h2>
                <input type="text" name="country" value="Italy">
            </div>
            <div class="col-12 worst m-auto text-center">
                <h2>Worst movie ever seen</h2>
                <input type="text" name="worst" value="Into the wild">
                <br>
                <input type="submit" value="Submit">
            </div>
        </form>
        </div>
    </div>
</body>
</html>
