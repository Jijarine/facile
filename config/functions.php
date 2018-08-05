<?php 
/**
 * 
 * @package Facile
 */

/**
 * 
 * 
 */
function r($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

/**
 * 
 *  
 */
function d($var) {
	$calledFrom = debug_backtrace();
	echo '<strong>' . substr(str_replace(ROOT, '', $calledFrom[0]['file']), 1) . '</strong>';
	echo ' (line <strong>' . $calledFrom[0]['line'] . '</strong>)';
	echo "\n<pre class=\"debug\">\n";
	$var = print_r($var, true);
	echo $var . "\n</pre>\n";
}

?>