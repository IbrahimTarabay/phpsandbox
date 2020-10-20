<?php
 # CONDITIONALS

 /*
   ==
   ===
   <
   >
   <=
   >=
   !=
   !==
 
 */

 /*$num = 6;

 if($num == 5){
  echo '5 passed';
 }elseif($num == 6){
  echo '6 passed';
 }else {
    echo 'did not pass';
 }*/

 # NESTING IF
 $num = 6;
 /*if($num > 4){
  if($num < 10){
   echo "$num passed";
  }
 }*/

 /*
  LOGICAL OPERATORS

  AND &&
  OR  ||
  XOR -->exculive or one has to be true but not both
 */

 /*if($num > 4 AND $num < 10){
   echo "$num passed";
 }*/

 # SWITCH
 $favColor = 'red';

 switch($favColor){
   case 'red':
    echo "your favorite color is red";
    break;
   case 'blue':
    echo "your favorite color is blue";
    break;
   case 'green':
    echo "your favorite color is green";
    break;
   default:
     echo 'Your favorite color is something else';

 }

?>