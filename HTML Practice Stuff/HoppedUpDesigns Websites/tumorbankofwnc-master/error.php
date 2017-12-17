<?php ob_start();
try {
  require_once('./includes/title.inc.php');
  require_once('./includes/header.inc.php');
?>

<!--
	###  Author: Jason McCoy
	###  File: error.php
	###  Date: August 3, 2013
	###  Description: Error page for Tumor Bank of WNC, Inc. website
-->

<div id="header">
    <h1 class="hideHeading">Error page for Tumor Bank of WNC, Inc</h1>

        <h2 class="warningHeader clearfix"><i class="icon-warning-sign"></i> Error</h2>
        <p class="warningPara clearfix">Something went wrong.  Please go <a href="index.php">back</a> and try again.</p>
</div>
    <?php 
        require_once('includes/footer.inc.php');
    ?>

<?php } catch (Exception $e) {
  ob_end_clean();
  header('Location: error.php');
}
ob_end_flush();
?>