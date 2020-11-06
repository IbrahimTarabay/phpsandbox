<?php 
 $path = '/dir0/dir1/myfile.php';
 $file = 'file1.txt';

 // Return filename
 echo basename($path).'<br>';

 // Return filename without extension
 echo basename($path, '.php').'<br>';

 // Return the dir name from path
 echo dirname($path).'<br>';
 
 // Check if file exists
 echo file_exists($file).'<br>';

 // Get abs path
 echo realpath($file).'<br>';

 // Checks to see if file
 echo is_file($file).'<br>';

 // Check if writable
 echo is_writable($file).'<br>';

  // Check if readable
  echo is_readable($file).'<br>';

  // Get file size by bytes
  echo filesize($file).'<br>';

  // Create a directory
  //mkdir('testing');

  // Remove directory if empty
  //rmdir('testing');

  // Copy file
  //echo copy('file1.txt', 'file2.txt');
  
  // Rename File
  //rename('file2.txt', 'myfile.txt');

  // Delete File
  //unlink('myfile.txt');

  // show text in the file
  //echo file_get_contents($file).'<br>';

  // Replace text in file
  //file_put_contents($file, 'Goodbye World');
 
  // to add text to file
  /*$current = file_get_contents($file);
  $current .= ' Goodbye World';
  file_put_contents($file, $current);*/

  // Open File For Reading
  /*$handle = fopen($file, 'r');
  $data = fread($handle, filesize($file));
  echo $data;
  fclose($handle);*/

  // Create file2.txt, open it for writing
  $handle = fopen('file2.txt', 'w');
  $txt = "Ibrahim Salah\n";
  fwrite($handle, $txt);
  $txt = 'hi awesome';
  fwrite($handle, $txt);
  fclose($handle);
?>