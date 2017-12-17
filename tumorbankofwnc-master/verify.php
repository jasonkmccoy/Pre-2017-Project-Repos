<?php
	require_once('includes/title.inc.php');
	require_once('includes/header.inc.php');
	
?>

<?php
  
  require_once('recaptchalib.php');
  $privatekey = "6LfKAeUSAAAAAKI-wLKV3ZxgbRR3lg4KTI4lR586";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]); ?>


<?php
  if (!$resp->is_valid) { 

?>
<div class="row">
<div class="large-12">
<h1 id="verifyFailHeader"><i class="icon-warning-sign"></i> The verification code wasn't entered correctly.<br>Please go <a href="contact.php">back</a> and try it again.</h1>
<!-- FOOTER -->
  <div class="row">
    <div class="large-12">
        <div id="footer">
  <?php require('./includes/footer.inc.php'); ?>  
  </div>
    </div>
  </div>
</div>
<?php
exit(); 
?>




 <?php } else {
    // Your code here to handle a successful verification
	require_once('includes/title.inc.php');
	require_once('includes/header.inc.php');
// connect to the database
      require_once('./includes/db_connect.inc.php');

      // insert the Email into the database
      $query = "INSERT INTO contact_us (ID,Date_Sent,First_Name, Last_Name, Email, Comments)
                     VALUES(null,'$date','$First', '$Last','$Email','$Comments')";
}
?>

<!--
	###  Author: Jason McCoy
	###  File: thank_you.php
	###  Date: March 10, 2013
	###  Description: Thank You/Email sent confirmation page for Tumor Bank of WNC, Inc. website
-->

<div id="header">
    <h1 class="hideHeading">Thank you/E-mail sent confirmation page for Tumor Bank of WNC, Inc</h1>

        <h2 class="thanksHeading clearfix">Thank You</h2>
        <p class="thanksPara clearfix">Your message has been sent.<br>We appreciate your feedback and will contact you as soon as we can.</p>
</div>

<?php require_once('includes/footer.inc.php'); ?>
