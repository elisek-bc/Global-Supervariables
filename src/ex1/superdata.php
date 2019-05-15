<?php
    session_start();
?>
<?php
    require('header.php');
?>
<div class='wrapper'>
<?php
foreach($_SESSION["data"] as $key => $item){ //goes into array of objects (movies,shows,country,worstmovie)
            echo "<hr>";
            echo "<ul>";
            echo "<li><h2>Top $key </h2></li>";
            foreach($item as $key => $subitem){ //goes into every array
                echo "<li style='list-style:none'>$key:$subitem</li>";
            }
            echo "</ul>";
        }
?>
</div>
</body>
</html>