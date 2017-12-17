<?php ob_start(); // start the output buffer

    // Error Reporting:
    // DEVELOPMENT
    ini_set('error_reporting', version_compare(PHP_VERSION,5,'>=') && version_compare(PHP_VERSION,6,'<') ?E_ALL^E_STRICT:E_ALL); 
   
   // Error Reporting:
    // PRODUCTION (UNCOMMENT CODE BELOW)
    // error_reporting(0);