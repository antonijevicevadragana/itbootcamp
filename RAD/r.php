<?php




// $myfile = @fopen("motivacija.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("motivacija.txt"));
// fclose($myfile);

$fp = @fopen("motivacija.txt", 'r'); 

// Add each line to an array
if ($fp) {
   $array = explode("\n", fread($fp, filesize($filename)));
}

var_dump($fp);
?>


