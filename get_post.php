<?php
if(isset($_GET['name'])){
   //print_r($_GET);
   $name = htmlentities($_GET['name']);
   //echo $name;
   //to prevent xss we use htmlentities
   //echo $_GET['email'];
  }

 /* if(isset($_POST['name'])){
    print_r($_GET);
    $name = htmlentities($_POST['name']);
    echo $name;
    //to prevent xss we use htmlentities
    echo $_GET['email'];
   }

   if(isset($_REQUEST['name'])){
    print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
   }//work with GET and POST
   */

   echo $_SERVER['QUERY_STRING'];
   //to show query string you should use GET
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
  <form method="POST" action="get_post.php">
   <div>
    <label>Name</label><br>
    <input type="text" name="name">
   </div>
   <div>
    <label>Email</label><br>
    <input type="text" name="email">
   </div>
   <input type="submit" value="Submit">
  </form>

  <ul>
    <li>
      <a href="get_post.php?name=Hema">Hema</a>
    </li>
    <li>
      <a href="get_post.php?name=Salah">Salah</a>
    </li>
  </ul>
  <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>