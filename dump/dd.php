<?php
/** PHP-Programmierung by Andrey Shtarev © www.shtarev.com
* Drop array, objects, variable or scripting code.
* Visual:this script in part used a theme code-prettify.
*/
require (__DIR__.'/config.php');

function dd($var, $die = false, $file = __FILE__, $line = __LINE__){
	if(is_array($var) || is_object($var)){
		if($die==false){
			echo ("<pre class=\"prettyprint\" id=\"quine\">".print_r($var, true)."<hr>Файл — ".$file."<br>Строка — ".$line."</pre>");
		} 
		else {
			die ("<pre class=\"prettyprint\" id=\"quine\">".print_r($var, true)."<hr>Файл — ".$file."<br>Строка — ".$line."</pre>");
		}
	}
	else{
		$var = htmlspecialchars($var);
		if($die==false){
			echo ("<pre class=\"prettyprint\" id=\"quine\">".$var."<hr>Файл — ".$file."<br>Строка — ".$line."</pre>");
		}
		else{
			die ("<pre class=\"prettyprint\" id=\"quine\">".$var."<hr>Файл — ".$file."<br>Строка — ".$line."</pre>");
		}
	}
}
?>
