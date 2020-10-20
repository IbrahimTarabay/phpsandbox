<?php
  // Single line comment
  # Single line comment
  /*
    Multiline comment
  */

  #VARIABLES
  /*
     - Prefix $
     - Start with a letter or an underscore
     - Only letters, numbers and underscores
     - Case sensitive
  */

  #DATA TYPES
  /*
     String
     Integers
     floats
     Booleans
     Arrays
     Objects
     NULL
     Resource
  */
  $output = "hema";
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = 'Hello';
  $string2 = 'Hema<br>';
  $greeting = $string1 .' '.$string2;
  $greeting2 = "$string1 $string2";

  $string3 = "They\"re Here<br>";

  $float1 = 4.4;
  $bool1 = true;
  #CONSTANTS
  define('GREETING', 'Hello Everyone');

  echo $greeting;
  echo $sum;
  echo '<br>';
  echo $greeting2;
  echo $string3;
  echo GREETING;
?>