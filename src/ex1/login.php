
<?php
 require('header.php')
 ?>

<div class='wrapper'>
<?php
// password checker
    $username = "random";
    $password = "randomPass";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if ($_POST["username"]==$username && $_POST["password"]==$password) {
            echo "<h3>Hello $username</h3>";
        } else {
            echo "Wrong password or username";
        }
    } else {
        echo "Wrong page, please log in";
    }
?>
</div>
</body>
</html>
