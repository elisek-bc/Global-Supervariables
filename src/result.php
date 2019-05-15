<!--NAVIGATION-->
<div class="row navigation m-auto d-inline-block text-center">
    <ul class="nav nav-tabs">
        <li><a class="nav-item nav-link" data-toggle="tab" role="tab" href="#movies">movies</a></li>
        <li><a class="nav-item nav-link" data-toggle="tab" role="tab" href="#shows">shows</a></li>
        <li><a class="nav-item nav-link" data-toggle="tab" role="tab" href="#country">country</a></li>
        <li><a class="nav-item nav-link" data-toggle="tab" role="tab" href="#worst">worst movie</a></li>
    </ul>
    
</div>
<!-------------------------------------------------------->
<!--MAKING ARRAYS WITH PHP-->
<?php
    require('header.php');
?>

<div class='wrapper'>
<div class="tab-content" id="myTabContent">
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
    <div id="movies" class="tab-content tab-pane">
        <?php
            echo "<h2>My favourite Disney movies are: </h2>";
            echo "<table>";
            foreach($movieArray as $value){
                echo "<tr><td>$value</td></tr>";       
            }
            echo "</table>";
        ?> 
    </div>
<!-------------------------------------------------------->
    <!--SHOWS PART-->
    <div id="shows" class="tab-content tab-pane">
        <?php 
            echo "<h2>My favourite shows are: </h2>";
            echo "<table>";
            foreach($showArray as $value){
                echo "<tr><td>$value</td></tr>";       
            }
            echo "</table>";
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

    <div id="country" class="tab-content tab-pane">
    <h2>My favourite country is:</h2>

    <?php 
        echo "<p>$country</p>";
    ?>
    </div>
<!-------------------------------------------------------->

    <!--WORST MOVIE PART-->
    <div id="worst" class="tab-content tab-pane">  
    <h2>The worst movie I ever saw is: </h2>
    
    <?php    
        echo "<p>$worst</p>";  
    ?>
    </div>

<!-------------------------------------------------------->
<!-- MAKE OBJECT OF ARRAYS & STORE IT IN SESSION-->

<?php 
    $movieObject = new stdClass();
        foreach ($movieArray as $key => $value){
        $movieObject->$key = $value;
        }
    $showObject = new stdClass();
        foreach ($showArray as $key => $value){
        $showObject->$key = $value;
        }


    $countryObject = (object) $country;
    echo $obj->country; //country is just a random name

    $worstObject = (object) $worst;
    echo $obj->worstMovie; //worstMovie is just a random name
    
    //put all objects into array
    $allData = [
        $movieObject,
        $showObject,
        $countryObject,
        $worstObject
        ];


    //make new general object of array of objects
    $data_object = new stdClass();
        foreach ($allData as $key => $value){
            $data_object->$key = $value;
        }

    //store object in session
    $_SESSION["data"]= $data_object;
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>
</body>
</html>