<?php
    require('header.php')
?>

<div class="wrapper">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <h1>Pick your cheat meal</h1>
            <h3>...and click on submit to see if it's your lucky day</h3>
            <form method="post" action="lottery.php">
                <input type="radio" name="food" value="pizza" id="pizza" class="input-hidden">
                    <label for="pizza">🍕</label>
                <input type="radio" name="food" value="burger" id="burger" class="input-hidden">
                    <label for="burger">🍔</label>
                <input type="radio" name="food" value="fries" id="fries" class="input-hidden ">
                    <label for="fries">🍟</label>
                <input type="submit" value="Submit" class="d-block m-auto">
        </div>
    </div>
</div>
</body>
</html>
    