<?php
 # FUNCTION - Block of code that can be repeatedly called

 /*
   Camel Case - myFunction()-->used in js and php
   Lower Case - my_function()-->codeigniter
   Pascal Case - MyFunction()-->for classes
 */
 
 function simpleFunction(){
    echo 'Hello Hema';
 }
 //simpleFunction();

 //Function With Param
 function sayHello($name = 'hema'){
    echo "Hello $name<br>";
 }
 
 //sayHello('joe');
 //sayHello('hema');
 
 // Return value so we use echo when we call
 function addNumbers($num1,$num2){
   return $num1+$num2;
 }
  //echo addNumbers(2,3);

  //pass arguments by reference
  $myNum = 10;

  function addFive($num){
    $num += 5;
  }

  function addTen(&$num){
    $num += 10;
  }
  addFive($myNum);
  echo "Value: $myNum<br>";
  addTen($myNum);
  echo "Value: $myNum<br>";
?>