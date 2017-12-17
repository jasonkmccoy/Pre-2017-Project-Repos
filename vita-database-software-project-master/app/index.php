<?php ob_start(); ?>

<?php
    $pageTitle = "Home";
    include 'assets/includes/header.php';
?>

<?php
/** 
  * Uncomment the line below to connect to the database.
  * Be sure to change the database connection parameters
  * in the database.php file 
**/
    // include 'includes/database.php';
?>

<?php include 'assets/includes/top-logo-bar.php'; ?>

    <!-- START OF PAGE CONTENT -->
    <p class="start">Your page content will start here.</p>
    <!-- END OF PAGE CONTENT -->

<?php include 'assets/includes/footer.php'; ?>

<?php ob_flush(); ?>
