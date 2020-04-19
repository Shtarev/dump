<?php
// Initialize $style аny of following values: dreamweaver, sunburst, doxy, desert, sons-of-obsidian
$style = "dreamweaver";
?>
<script src="<?=substr(str_replace('\\','/',__DIR__), strlen($_SERVER['DOCUMENT_ROOT']))?>/src/prettify/run_prettify.js?autoload=true&amp;skin=<?=$style?>&amp;lang=css" defer></script>
<link href="<?=substr(str_replace('\\','/',__DIR__), strlen($_SERVER['DOCUMENT_ROOT']))?>/src/style.css" rel="stylesheet" type="text/css">
