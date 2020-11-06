<?php 
 class Person{
    /*
     public $name;
     public $email;
    */
    private $name;
    private $email;

    //public static $ageLimit = 60;

    private static $ageLimit = 60;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        // __CLASS__ will give us the name of class
        echo __CLASS__.' created<br>';
    }

    public function __destruct(){
      echo __CLASS__. ' destroyed<br>';
    }

    /*public function setName($name){
      $this->name = $name;
    }*/

    public function getName(){
        return $this->name.'<br>';
    }
    
    /*public function setEmail($email){
        $this->email = $email;
    }*/
  
    public function getEmail(){
        return $this->email.'<br>';
    }

    public static function getAgeLimit(){
      return self::$ageLimit;
    }
 }

 /*static props and methods */
 // we get the value even if we didn't instantiate the Person 
 //echo Person::$ageLimit;
 //echo Person::getAgeLimit().' ';

 //$person1 = new Person('ibrahim salah', 'ibrahimesalah69@gmail.com');

 //$person1->setName('John Doe');
 
 //echo $person1->getName();

 //$person1->name = 'Hema Salah';
 //echo $person1->name;

 class Customer extends Person{
  private $balance;

  public function __construct($name, $email, $balance){
      parent::__construct($name, $email, $balance);
      $this->balance = $balance;
      echo 'A new '.__CLASS__.' has been created ';
  }

  public function setBalance($balance){
     $this->balance = $balance;
  }

  public function getBalance(){
 
      return $this->balance.'<br>';
  }

 }

 $customer1 = new Customer('hema', 'hema@gmail.com', 300);

  echo $customer1->getBalance();
?>