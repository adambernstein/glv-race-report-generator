<?php

require_once 'vendor/autoload.php';

$report1 = file_get_contents('report1.txt');
$report2 = file_get_contents('report2.txt');
$report3 = file_get_contents('report3.txt');   
$chain = new \MarkovPHP\WordChain($report1);
//$theme = "hate";
$sentence = $chain->generate(20);

//echo "YOUR PIECE OF WISDOM FROM NIETZSCHE, ABOUT: $theme<br><br>";
echo "<p>". $sentence . "</p>";