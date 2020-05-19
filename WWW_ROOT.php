<?php 
/*
 * File: WWW_ROOT.php
 * Project: BasicPHP
 * File Created: Sunday, 29th March 2020 3:30:34 pm
 * Author: Murali Mutyala (murali@theclue.biz)
 * -----
 * Last Modified: Sunday, 29th March 2020 3:30:39 pm by Murali Mutyala (murali@theclue.biz>)
 * -----
 * Copyright 2020 The Clue Technology Solutions
 */

/**
 * Assign the root URL to a PHP Constant
 * Don't need to include domain name
 * Use same document root as webserver
 * we can set a hardcoded value
 * define('WWW_ROOT', '');
 * Can dynamically find everything in URL upto '/html' 
 * or whatever your webserver end is like '/public'
 * 
 * @var string $doc_root
 */
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public')+ 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define('WWW_ROOT', $doc_root);

/**
 * generate web root links
 *
 * @param string $path
 * @return string
 */
function url_for($path) {
    //add leading '/' if not present
    if($path[0] != '/') {
        $path = '/' . $path;
    }

    return WWW_ROOT . $path;
}
?>
