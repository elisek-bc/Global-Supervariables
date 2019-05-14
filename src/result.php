<!--NAVIGATION-->
<div class="row navigation m-auto d-inline-block text-center">
    <ul class="nav nav-tabs">
        <li><a href="#movies">movies</a></li>
        <li><a href="#shows">shows</a></li>
        <li><a href="#country">country</a></li>
        <li><a href="#worst">worst movie</a></li>
    </ul>
</div>
<!-------------------------------------------------------->
<!--MAKING ARRAYS WITH PHP-->
<?php
    require('header.php');
?>

<div class='wrapper'>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    // making arrays to store movies / shows
    
            
            $movieArray = [];
            $showArray = [];

            for($i=1; $i < 6; $i++) {
                array_push($movieArray,htmlspecialchars($_POST["movie$i"]));
            };

            
            for($i=1; $i < 6; $i++) {
                array_push($showArray,htmlspecialchars($_POST["show$i"]));
            };
        }
    ?>
<!-------------------------------------------------------->

    <!--What needs to appear when you click the id with post-->
    <!--MOVIES PART-->
    <div id="movies">
        <?php
            echo "<h2>My favourite Disney movies are: </h2>";
            foreach($movieArray as $value){
                echo "<p>$value</p>";       
            }
        ?> 
    </div>
<!-------------------------------------------------------->
    <!--SHOWS PART-->
    <div id="shows">
        <?php 
            echo "<h2>My favourite shows are: </h2>";
            foreach($showArray as $value){
                echo "<p>$value</p>";       
            }
        ?>
    </div>
<!-------------------------------------------------------->

    <!--What needs to appear when you click the id with get-->
    <!-- COUNTRY PART-->
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $country = htmlspecialchars($_GET['country']);
            $worst = htmlspecialchars($_GET['worst']);;
        }
    ?>

    <div id="country">
    <h2>My favourite country is:</h2>

    <?php 
        echo "<p>$country</p>";
    ?>
    </div>
<!-------------------------------------------------------->

    <!--WORST MOVIE PART-->
    <div id="worst">  
    <h2>The worst movie I ever saw is: </h2>
    
    <?php    
        echo "<p>$worst</p>";  
    ?>
    </div>

<!-------------------------------------------------------->
</body>
</html>