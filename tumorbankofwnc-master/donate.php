<?php ob_start();
try {
  require_once('./includes/title.inc.php');
  require_once('./includes/donate_header.inc.php');

?>

<!--
  * File: index.php
  * Author: Jason McCoy
  * Description: home page for Tumor Bank of WNC, Inc.
-->

<div class="row">
  <h1 class="small-12 large-centered columns soonHeading">COMING SOON!</h1>
</div>

<!-- FOOTER -->
  <div class="row">
    <div class="large-12">
        <div id="footer">
  <?php 
      require_once('./includes/footer.inc.php'); 
  ?>
  
  </div>
    </div>
  </div>
</div>


<?php } catch (Exception $e) {
  ob_end_clean();
  header('Location: error.php');
}
ob_end_flush();
?>