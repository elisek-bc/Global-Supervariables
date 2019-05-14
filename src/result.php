
<?php
    require('header.php');
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    // making arrays to store movies / shows
        echo "<h2>My favourite Disney movies are: </h2>";
        $movieArray = [];
        $showArray = [];

        for($i=1; $i < 6; $i++) {
            array_push($movieArray,htmlspecialchars($_POST["movie$i"]));
        };

        echo "<ol>";
        foreach($movieArray as $value){
            echo "<li>$value</li>";       
        }
        echo "</ol>";

        echo "<h2>My favourite shows are: </h2>";
        for($i=1; $i < 6; $i++) {
            array_push($showArray,htmlspecialchars($_POST["show$i"]));
        };

        echo "<ol>";
        foreach($showArray as $value){
            echo "<li>$value</li>";       
        }
        echo "</ol>";

    }

    else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h2>My favourite country is:</h2>";
        $country = htmlspecialchars($_GET['country']);
        echo "<p>$country</p>";

        echo "<h2>The worst movie I ever saw is: </h2>";
        $movie = htmlspecialchars($_GET['worst']);
        echo "<p>$movie</p>";
    }  
?>
</body>
</html>