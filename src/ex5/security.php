<?php require('header.php');
?>
<div class="wrap py-5 d-flex flex-column align-items-between">
<div class="m-3 d-flex justify-content-center align-items-center">
    <img src="Ufo.png" id="ufo">
</div>
<div class="message d-flex justify-content-center align-items-center">
<h3> Are you a bot from the future coming to exterminate the human race and always wanted a cool nickname?
<form method="post" action="home.php">
    <input type="radio" name="botcheck" value="Yes">Yes</input>
    <input type="radio" name="botcheck" value="No">No</input>
    <input type="submit" name="submit" value="submit" id="security"></input>
</form>
<?php
    if (isset($_POST["submit"])) {
        if($_POST["botcheck"]=="Yes") {

        } else {

        };
    };
?>
</div>
</div>
</body>
</html>