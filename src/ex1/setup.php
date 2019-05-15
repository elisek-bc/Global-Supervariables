<?php
    session_start();
?>
<?php
 require('header.php')
 ?>
    <div class="wrapper">

    <!--LOGIN PART-->
        <div class="row">
            <div class="col">
                <form method="post" action="login.php">
                    <input type="text" placeholder="username" name="username" value="random">
                    <input type="password" placeholder="password" name="password" value="randomPass">
                    <input type="submit" value="Submit">
                </form>
            <div class="col">
        </div>

        <!--POST PART-->
        <div class="row poster m-auto text-center d-inline-block">
            <form method="post" action="result.php"> 
                <div class="col-12 movies text-center mt-5 ">            
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
                <div class="col-12 shows text-center mt-5">              
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
        <div class="row getter m-auto d-inline-block">
            <form method="get" action="result.php"> 
                <div class="col-12 country mt-5 text-center">
                    <h2>Favourite country</h2>
                    <input type="text" name="country" value="Italy">
                </div>
                <div class="col-12 worst mt-5 text-center">
                    <h2>Worst movie ever seen</h2>
                    <input type="text" name="worst" value="In the name of the rose">
                    <br>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
