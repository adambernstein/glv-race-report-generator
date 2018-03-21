<?php

namespace AdamB\ReportGenerator;

require 'vendor/autoload.php';

/**
 * A class of Markov-chain reports
 */
class Report {
    static function generate($name) {
		$markov = new \Decidedly\TextGenerators\SimpleMarkovGenerator(2);
        $source = $name . ".txt";
        $text = file_get_contents($source);
		$markov->parseText($text);
        $output = "<p>";
        for ($i = 0; $i<4; $i++) {
            $string = $markov->generateText(rand(140, 300), 2, true);
            $last_dot_at = strripos($string, ".");
            $cleaned_string = substr($string, 0, $last_dot_at);
            if (strlen($cleaned_string)) {
                $output .= ucfirst($cleaned_string) . ".<br>";
            }
            else $output .= "<br>";
        }
        return $output;
    }
}

//$generator = new Report;
//$generator->generate();
$name=isset($_REQUEST["name"]) ? $_REQUEST["name"] : null;
echo Report::generate($name) . "</p>" . "<p>-". ucfirst($_REQUEST["name"]) . "</p>";

?>