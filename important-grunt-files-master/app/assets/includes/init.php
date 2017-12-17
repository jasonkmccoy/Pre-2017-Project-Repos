<?php ob_start('ob_gzhandler'); /*Added to avoid a common error of 'header already sent' error */ ?>
<?php session_start(); 
/* Initialize the session. 
If you are using session_name("something"),
don't forget it now! */ 
?>

<!--
    * File: init.php
    * Author: Jason McCoy
    * Date of last revision: Oct. 24, 2014
    * Description:  Start the session/buffer and include the header.php file 
-->

<!-- Include the header.php file from the includes folder -->
<?php include 'includes/header.php'; ?>

<!-- Turn on/off error reporting for the project -->
<?php // error_reporting(0); ?>

<!--  Put any required classes for all pages here (users, general, functions, etc.) -->
<?php // class declarations go here ?>

<!-- Include an array to hold any errors -->
<?php $errors = array(); ?>

<!-- Check to see if the user is logged in (if necessary) -->
<?php
    // if ($general->logged_in() === true)  {
    //     $user_id    = $_SESSION['id'];
    //     $user       = $users->userdata($user_id);
    // }
?>

