<?php
//make a class with properties, we use private because it's safer
class Person {
    private $firstName = '';
    private $lastName = '';

//setfunction inside class
public function setFName($fname){
    this->firstName = '$fname';
}
public function setLName($lname){
    this->lastName = '$lname';
}

//getfunction inside class
public function getFName(){
    return(this->firstName);
}
public function getLName(){
    return(this->lastName);
}

//constructor 
public function Person($fname, $lname) {
    $this->firstName = $fname;
    $this->lastName = $lname;
}
}

$Elise = new Person('Elise','Keppens');
echo $Elise;
?>