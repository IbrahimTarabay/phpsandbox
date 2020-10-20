<?php
  # substr()
  # Return a portion of a string

  //$output = substr('Hello', 1, 3);
  //$output = substr('Hello', -2);
  //echo $output;

  # strlen()
  # Returns the length of a string

  //$output = strlen('Hello Hema');
  //echo $output;

  # strpos()
  # Finds the position of the first occurence of a sub string
  //$output = strpos('Hello Hema', 'o');
  //echo $output;

  # strrpos()
  # Finds the position of the last occurence of a sub string
  //$output = strrpos('Hello Hema', 'o');
  //echo $output;

  /*
  $text = 'Hello World';
  //var_dump($text);

  $trimmed = trim($text);
  var_dump($trimmed);
  */

  # strtoupper
  # Makes everything uppercase

  //$output = strtoupper('Hello World');
  //echo $output;

  # strtolower
  # Makes everything lowercase

  //$output = strtolower('Hello World');
  //echo $output;

  # ucwords()
  # Capitalize every word

  //$output = ucwords('hello hema');
  //echo $output;

  # str_replace()
  # Replace all occurences of a search string with a replacement

  //$text = 'Hello World';
  //$output = str_replace('World', 'Everyone', $text);
  //echo $output;

  # is_string()
  # Check if string

  //$val = 'Hello';
  //$output = is_string($val);
  //echo $output;

  /*$values = array(true, false, null, 'abc', 33, '33',
  22.4, '22.4', '', ' ', 0, '0');

  foreach($values as $value){
   if(is_string($value)){
     echo "{$value} is a a string<br>";
   }
  }*/

  # gzcompress()
  # Compress a string

  $string = "Contrary to popular belief,
   Lorem Ipsum is not simply random text. 
   It has roots in a piece of classical Latin literature from 45 BC,
    making it over 2000 years old. Richard McClintock,
     a Latin professor at Hampden-Sydney College in Virginia,
      looked up one of the more obscure Latin words, consectetur, 
      from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
       discovered the undoubtable source. Lorem Ipsum comes from sections  
       1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero  
       , written in 45 BC. This book is a treatise on the theory of ethics,
        very popular during the Renaissance. The first line of Lorem Ipsum,
        comes from a line in section 1.10.32.";

  $compressed = gzcompress($string);
  //echo $compressed;
  $original = gzuncompress($compressed);
  echo $original;
?>