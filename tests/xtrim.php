<?php

require_once __DIR__ . '/../vendor/autoload.php';

$string = "Bananas,    Apples     ,    Coconuts";
?>

<h2>Original string</h2>
<pre><?php print_r( $string ) ?></pre>

<h2>Explode and trim both</h2>
<pre><?php print_r( xtrim(",", $string) ) ?></pre>