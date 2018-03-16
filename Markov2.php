<?php

require 'vendor/autoload.php';

class Example1 {
	public function run() {
		$markov = new \Decidedly\TextGenerators\SimpleMarkovGenerator(2);
		$text = file_get_contents("datasource.txt");
		$markov->parseText($text);
        $output_array = [];
        for ($i = 0; $i<6; $i++) {
            $string = $markov->generateText(rand(220, 320), 2, true);
            $last_dot_at = strripos($string, ".");
            $cleaned_string = substr($string, 0, $last_dot_at);
            echo "<p>" . ucfirst($cleaned_string) . ".</p>";
            
        }
    }
}
//echo $string . "\n";
$app = new Example1();
$app->run();