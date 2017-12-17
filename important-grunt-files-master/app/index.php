<!--
    * File: index.php
    * Author: Jason McCoy
    * Date of last revision: Oct. 24, 2014
    * Description:  Project home page 
-->

<!-- Include the init.php file from the includes folder
      this file starts a session and includes the database connection, header.php file etc
 -->
 <!-- PAGE TITLE -->
<?php 
  // Put the page title in this variable
  $pageTitle = 'home';
  // This variable capitalizes the first letter of each word in $pageTitle
  // This variable is then used in the header.php file
  $title = ucwords($pageTitle);
  ?>

<!-- Include the header.php file from the includes folder -->
<?php include 'assets/includes/header.php'; ?>

<!-- Include the masthead includes file.
      This file contains the logo/banner/masthead info that goes at the top of the page,
      This file may also include the main/top navigation for the website.
 -->
 <?php include "assets/includes/masthead.php"; ?>

  <!-- START MAIN PAGE CONTENT -->
    <main role="main">
        <p>Main page content goes here.</p>
    </main>

    <aside role="complementary">
      <p>Sidebar/complementary text stuff goes here.</p>
    </aside>

<!-- Include the footer.php file from the includes folder -->
<?php include "assets/includes/footer.php"; ?>

    
