<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
        echo "<h2><font color=black font face='arial' size='8pt'>My favourite movies are: </h2>";
        $name = htmlspecialchars($_REQUEST['movie1']);
        echo "<p><font color=blue font face='arial' size='5pt'>$name</p>";
        $name2 = htmlspecialchars($_REQUEST['movie2']);
        echo "<p><font color=green font face='arial' size='5pt'>$name2</p>";
        $name3 = htmlspecialchars($_REQUEST['movie3']);
        echo "<p><font color=orange font face='arial' size='5pt'>$name3</p>";
        $name4 = htmlspecialchars($_REQUEST['movie4']);
        echo "<p><font color=red font face='arial' size='5pt'>$name4</p>";
        $name5 = htmlspecialchars($_REQUEST['movie5']);
        echo "<p><font color=grey font face='arial' size='5pt'>$name5</p>";

        echo "<h2><font color=black font face='arial' size='8pt'>My favourite shows are: </h2>";
        $show = htmlspecialchars($_REQUEST['show1']);
        echo "<p><font color=blue font face='arial' size='5pt'>$show</p>";
        $show2 = htmlspecialchars($_REQUEST['show2']);
        echo "<p><font color=green font face='arial' size='5pt'>$show2</p>";
        $show3 = htmlspecialchars($_REQUEST['show3']);
        echo "<p><font color=orange font face='arial' size='5pt'>$show3</p>";
        $show4 = htmlspecialchars($_REQUEST['show4']);
        echo "<p><font color=red font face='arial' size='5pt'>$show4</p>";
        $show5 = htmlspecialchars($_REQUEST['show5']);
        echo "<font color=grey font face='arial' size='5pt'>$show5</p>";
    }

    else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h2> <font color=black font face='arial' size='8pt'>My favourite country is:</h2>";
        $country = htmlspecialchars($_REQUEST['country']);
        echo "<p><font color=blue font face='arial' size='5pt'>$country</p>";

        echo "<h2><font color=black font face='arial' size='8pt'>The worst movie I ever saw is: </h2>";
        $movie = htmlspecialchars($_REQUEST['worst']);
        echo "<p><font color=red font face='arial' size='5pt'>$movie</p>";
    }

    
?>