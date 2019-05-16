<?php
 require('header.php')
?>

<div class="wrapper">
    <div class="row">
        <div class="col-lg-6 m-auto">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pickedFood = $_POST ['food'];
    $foods = [
        'pizza',
        'burger',
        'fries'
    ];

    $winner = array_rand($foods,1);

    if ($pickedFood == $foods[$winner]){
        switch ($pickedFood){
            case 'pizza':
                echo "<h1>You win a $pickedFood !</h1>";
                echo '<p>🍕</p>';
                break;
            case 'burger':
                echo "<h1>You win a $pickedFood !</h1>";
                echo '<p>🍔</p>';
                break;
            case 'fries':
                echo "<h1>You win a bowl of $pickedFood !</h1>";
                echo '<p>🍟</p>';
                break;
            default:
                echo "You haven't chosen a cheat meal";
                return;
        };
    } else {
        echo "<h1>Hmmm...no $pickedFood for you today...</h1>";
    };
};
?>
            <a href="index.php" class="btn btn-warning">Try again?</a>
        </div>
    </div>
</div>

    
