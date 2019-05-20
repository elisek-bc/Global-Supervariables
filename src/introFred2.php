<?php
    class Person {
        private $fname = '';
        private $lname = '';
        public $mail = '';

        public function __construct($firstname,$lastname){
            $this->fname = $firstname;
            $this->lname = $lastname;
        }

        //nothing between () because it's declared per individual person later on
        public function getFullName(){
            return("$this->fname $this->lname");
        }
    }

    //make new person
    $elise = new Person('Elise','Keppens');

    //call and print new person
    echo $elise->getFullName();

    // after -> never type $sign, just immediatly the name
    $elise->mail='elisekppns@gmail.com';
    echo $elise->mail;
    var_dump($elise);
?>