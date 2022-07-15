<?php
/** PHP-Programmierung by Andrey Shtarev © https://github.com/Shtarev
* Drop array, objects, variable or scripting code.
* Visual:this script in part used a theme code-prettify.
*/
require (__DIR__.'/config.php');

function dd($var, $die = false) {
	$backtrace = debug_backtrace();
	$file = $backtrace[0]['file'];
	$line = $backtrace[0]['line'];

	if(is_array($var) || is_object($var)) {
		if($die == false) {
			echo ("<pre class=\"prettyprint\" id=\"quine\">".print_r($var, true)."<hr>Файл — ".$file."<br>Строка — ".$line."<center>
			Copyright © 2010<script>new Date().getFullYear()>2010&&document.write('-'+new Date().getFullYear());</script> | Freiheitsgewährende Software | Design & programmierung by <a href='https://github.com/Shtarev'>Andrey Shtarev</a>
			</center></pre>");
		} 
		else {
			die ("<pre class=\"prettyprint\" id=\"quine\">".print_r($var, true)."<hr>Файл — ".$file."<br>Строка — ".$line."<center>
			Copyright © 2010<script>new Date().getFullYear()>2010&&document.write('-'+new Date().getFullYear());</script> | Freiheitsgewährende Software | Design & programmierung by <a href='https://github.com/Shtarev'>Andrey Shtarev</a>
			</center></pre>");
		}
	}
	else {
		$var = htmlspecialchars($var);
		if($die == false) {
			echo ("<pre class=\"prettyprint\" id=\"quine\">".$var."<hr>Файл — ".$file."<br>Строка — ".$line."<center>
			Copyright © 2010<script>new Date().getFullYear()>2010&&document.write('-'+new Date().getFullYear());</script> | Freiheitsgewährende Software | Design & programmierung by <a href='https://github.com/Shtarev'>Andrey Shtarev</a>
			</center></pre>");
		}
		else {
			die ("<pre class=\"prettyprint\" id=\"quine\">".$var."<hr>Файл — ".$file."<br>Строка — ".$line."<center>
			Copyright © 2010<script>new Date().getFullYear()>2010&&document.write('-'+new Date().getFullYear());</script> | Freiheitsgewährende Software | Design & programmierung by <a href='https://github.com/Shtarev'>Andrey Shtarev</a>
			</center></pre>");
		}
	}
}
?>
