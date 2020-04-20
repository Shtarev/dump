<?php
// Initialize $style аny of following values: dreamweaver, sunburst, doxy, desert, sons-of-obsidian
$style = "dreamweaver";
?>
<script src="<?=substr(str_replace('\\','/',__DIR__), strlen($_SERVER['DOCUMENT_ROOT']))?>/src/prettify/run_prettify.js" defer></script>
<link href="<?=substr(str_replace('\\','/',__DIR__), strlen($_SERVER['DOCUMENT_ROOT']))?>/src/prettify/<?=$style?>.css" rel="stylesheet" type="text/css">
<link href="<?=substr(str_replace('\\','/',__DIR__), strlen($_SERVER['DOCUMENT_ROOT']))?>/src/style.css" rel="stylesheet" type="text/css">
