<?php
    session_start();
    require('header.php');
    require('security.php');
    require('functions.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <div class="white">
    </div>
    
    <div class="wrapper">
        <div class="text-center">
            <h1>Functions</h1>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="box text-center d-flex align-items-center justify-content-center">
                    <p class="corner">&#65</p>
                    <button type="button">Generate object</button>
                    <p class="cornerbottom">&#65</p>
                </div>
            </div>
            <div class="col-4">
                <div class="box text-center d-flex align-items-center justify-content-center">
                    <p class="corner">&#65</p>
                    <button type="button">Revert object</button>
                    <p class="cornerbottom">&#65</p>
                </div>
            </div>
            <div class="col-4">
                <div class="box text-center d-flex align-items-center justify-content-center flex-column">
                    <p class="corner">&#65</p>
                    <form method="post">
                    <input type="text" name="name">
                    <button type="submit" class="submit">Get a nickname</button>
                    <div id="result">
                        <?php
                            if (isset($_POST['name'])){
                                echo nickname_generate($_POST['name']);
                            }
                        ?>
                    </div>
                    </form>
                    <p class="cornerbottom">&#65</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php

?>