<!DOCTYPE html>
<html>
<head>
    <title>Loops PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Oswald:400,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
$tvshows = [
	["tvshow" => "Stranger Things", "rating" => 5],
	["tvshow" => "Orange Is The New Black", "rating" => 4],
	["tvshow" => "Russian Doll", "rating" => 3],
    ["tvshow" => "Unbreakable Kimmy Schmidt", "rating" => 4],
    ["tvshow" => "Glow", "rating" => 5],
    ["tvshow" => "The Umbrella Academy", "rating" => 4],
    ["tvshow" => "Sex Education", "rating" => 3],
    ["tvshow" => "13 Reasons Why", "rating" => 4],
]
?>
    <div class="wrapper">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Series</th>
                            <th scope="col">Rating on 5</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($tvshows as $array): //array here is every array in tvshows
                    ?>
                    <tr>
                        <td><?php echo "<a href='https://www.google.com/search?client=ubuntu&channel=fs&q=$array[tvshow]' target='_blank'>$array[tvshow]</a>";?></td>
                        <td><?php echo $array["rating"];?></td>   
                    </tr>
                    <?php endforeach ?>                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>