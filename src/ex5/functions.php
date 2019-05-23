<?php
    
    function nickname_generate($nickname){

            //name backwards
            $nickname = strrev($nickname);

            //name in uppercase
            $nickname = strtoupper($nickname);

            //name backwards again
            $nickname = strrev($nickname);

            //name with stripes before and after
            $nickname = "--".$nickname."--";

            //name without stripes and with x in front
            $nickname = trim($nickname,"--");
            $nickname = "x".$nickname;

            //name without x and with 2-4 random characters in front
            $nickname = trim($nickname,"x");
            $randomWord = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, rand(2,4));
            $nickname = $randomWord.$nickname;

            //wrap characters in brackets
            $nickname = trim($nickname,$randomWord);
            $nickname = "[".$randomWord."]".$nickname;
            $randomNumber = rand(1, strlen($nickname))-1;

            //select random character of $nickname and check if upper or lowercase, change the case, print the string like that
            if(ctype_upper($nickname[$randomNumber])){
                $nickname[$randomNumber]=strtolower($nickname[$randomNumber]);
            } else {
                $nickname[$randomNumber]=strtoupper($nickname[$randomNumber]);
            };

            return $nickname;
    };

    function returnObject(){
        $fruits = array("Apple", "Pear", "Peach");
        $amountveggies = array("Avocado"=>"3", "Carrot"=>"6", "Asparagus"=>"10");

        $candyObj = new stdClass();
        $candyObj->type = "Lollipop";
        $candyObj->taste = "Sweet";
        $candyObj->color = "Pink";

        function array_push_assoc($array, $key, $value){
            $array[$key] = $value;
            return $array;
        }

        for($x = 0; $x < 1 ; $x++){
            array_push($fruits, 'Blueberries');
            $amountveggies['Lettuce'] = '1';
            $candyObj->price = '1.56 euro';
        }
            
            $fruits1 = array_slice($fruits, 0, 2);
            $fruits2 = array_slice($fruits, 2, 3);
        
            unset($amountveggies["Lettuce"]);
            $candyObj->arr1 = $fruits1;
            $candyObj->arr2 = $fruits2;

            foreach ($amountveggies as $key => $value){
                $candyObj->$key = $value;
            }

            $candyObjNew = JSON_ENCODE($candyObj);
            $_COOKIE["TestCookie"] = $candyObjNew;
            var_dump(JSON_DECODE($_COOKIE["TestCookie"]));
    }

    function revertObject(){
        $fruits = array("Apple", "Pear", "Peach");
        $amountveggies = array("Avocado"=>"3", "Carrot"=>"6", "Asparagus"=>"10");

        $candyObj = new stdClass();
        $candyObj->type = "Lollipop";
        $candyObj->taste = "Sweet";
        $candyObj->color = "Pink";

        function array_push_assoc($array, $key, $value){
            $array[$key] = $value;
            return $array;
        }

        for($x = 0; $x < 1 ; $x++){
            array_push($fruits, 'Blueberries');
            $amountveggies['Lettuce'] = '1';
            $candyObj->price = '1.56 euro';
        }
            
            $fruits1 = array_slice($fruits, 0, 2);
            $fruits2 = array_slice($fruits, 2, 3);
        
            unset($amountveggies["Lettuce"]);
            $candyObj->arr1 = $fruits1;
            $candyObj->arr2 = $fruits2;

            foreach ($amountveggies as $key => $value){
                $candyObj->$key = $value;
            }

            $candyObjNew = JSON_ENCODE($candyObj);
            $_COOKIE["TestCookie"] = $candyObjNew;
            
            // REVERTING STARTS HERE
            $candyObjNew = JSON_DECODE($candyObj);



    }


    //     

    //                                


    //                 if(isset($_POST['revert'])){
    //                     print_r(revertObject());
    //                 }                  
?>