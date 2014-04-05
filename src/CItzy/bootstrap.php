<?php
/**
 * Bootstrapping, setting up and loading the core.
 *
 * @package LydiaCore
 */

session_start();
date_default_timezone_set('Europe/London');

/**
 * Enable auto-load of class declarations.
 */
function autoload($aClassName) {
    $classFile = "/src/{$aClassName}/{$aClassName}.php";
    $file1 = ITZY_SITE_PATH . $classFile;
    $file2 = ITZY_INSTALL_PATH . $classFile;
    if(is_file($file1)) {
        require_once($file1);
    } elseif(is_file($file2)) {
        require_once($file2);
    }
}
spl_autoload_register('autoload');


/**
 * Helper, wrap html_entites with correct character encoding
 */
function htmlent($str, $flags = ENT_COMPAT) {
    return htmlentities($str, $flags, CItzy::Instance()->config['character_encoding']);
}