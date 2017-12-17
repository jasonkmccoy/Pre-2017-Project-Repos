<?php ob_start();
try {
  require_once('./includes/title.inc.php');
  require_once('./includes/header.inc.php');

?>

<!--
	###  Author: Jason McCoy
	###  File: thank_you.php
	###  Date: August 3, 2013
	###  Description: Thank You/Email sent confirmation page for Tumor Bank of WNC, Inc. website
-->

<div id="header">
    <h1 class="hideHeading">Thank you/E-mail sent confirmation page for Tumor Bank of WNC, Inc</h1>

        <h2 class="thanksHeading clearfix">Thank You</h2>
        <p class="thanksPara clearfix">Your message has been sent.<br>We appreciate your feedback and will contact you as soon as we can.</p>
</div>
    <?php 
      require_once('./includes/footer.inc.php'); 
  ?>

<?php } catch (Exception $e) {
  ob_end_clean();
  header('Location: error.php');
}
ob_end_flush();
?>