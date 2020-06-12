<?php


class person {
    public $firstname ; //Create property
    public $lastname ;  // Variable tied to object
    public $age;

    # Assigning value to the properties variable

    public function __construct($firstname,$lastname,$age){
        $this -> firstname = $firstname;
        $this -> lastname  = $lastname ;
        $this -> age       = $age;

    }

    public function hello(){
        return "I am " . $this -> firstname . " " . $this -> lastname ." , My Age is  ". $this -> age;
     
    }


}

$person1 = new person("Ashok", "Verma" , "23");

echo $person1->hello();

?>