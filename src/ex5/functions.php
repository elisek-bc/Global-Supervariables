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
?>