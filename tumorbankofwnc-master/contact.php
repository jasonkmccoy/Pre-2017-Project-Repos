<?php ob_start();
try {
  require_once('./includes/title.inc.php');
  require_once('./includes/contact_header.inc.php');
?>


<!--
  ###  Author: Jason McCoy
  ###  File: contact.php
  ###  Date: July 30, 2013
  ###  Description: Contact Us page for Tumor Bank of WNC, Inc. website
-->

<?php
	// create variables for array that hold:
	// errors for invalid content $errors
	// errors for missing content $missing
	$errors = array();
	$missing = array();

	// check if the form has been submitted
	if (isset($_POST['send'])) {
		// Email processing script
                $to = "Dr. Don Russell<director@tumorbankofwnc.org>";
                $subject = "Feedback from Tumor Bank of WNC Web Site";
                // list expected fields
                $expected = array('First', 'Last', 'Email', 'Comments');
                // set required fields
                $required = array('First', 'Last', 'Email', 'Comments');
                // create additional headers
                $headers = "From: Tumor Bank of WNC<director@tumorbankofwnc.org>\r\n";
                $headers .= "Bcc: Dr. Don Russell<dwrussellmd@gmail.com>\r\n";
                $headers .= 'Content-Type: text/plain; charset=utf-8';

                // include the Email processing/error checking file
                require_once('./includes/processmail.inc.php');

                // insert the user's Email into the database
                if ($mailSent && $resp->is_valid) {
                    // create variables for the form fields
                    date_default_timezone_set('America/New_York');
                    $date = date('D m/d/Y h:i:s');
                    $First = $_POST['First'];
                    $Last = $_POST['Last'];
                    $Email = $_POST['Email'];
                    $Comments = $_POST['Comments'];

                    // connect to the database
                    require_once('./includes/db_connect.inc.php');

                    // insert the Email into the database
                    $query = "INSERT INTO contact_us (ID,Date_Sent,First_Name, Last_Name, Email, Comments)
                        VALUES(null,'$date','$First', '$Last','$Email','$Comments')";

                    // Run the query:
                    $result = mysqli_query($dbc, $query);

                   // If it ran OK:
                   if ($result) {
                       header('Location: thank_you.php');
                       // Close the database connection:
                       mysqli_close($dbc);
                       exit();
                   } else {
                       header('Location: error.php');
                       // Close the database connection:
                       mysqli_close($dbc);
                       exit();
                   }
	       }
           }
?>


<div id="contactForm" class="row clearfix">
    <div class="full-width">
        <div class="row"> 
            <div class="large-12">
                <form data-abide id="formID" method="post">
                  <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail'])) && isset($_POST['send'])) { ?>
                        <p class="warningHeader clearfix">Sorry, your mail could not be sent. Please try later.</p>
                      <?php } elseif ($missing || $errors) { ?>
                        <p class="warningHeader clearfix">Please fix the item(s) indicated.</p>
                      <?php } ?>
                      <?php if ($missing && in_array('First', $missing)) { ?>
                        <p class="warning clearfix">- Please enter your First Name</p>
                      <?php } ?>
                      <?php if ($missing && in_array('Last', $missing)) { ?>
                        <p class="warning">- Please enter your Last Name</p>
                      <?php } ?>
                      <?php if ($missing && in_array('Email', $missing)) { ?>
                        <p class="warning clearfix">- Please enter your E-mail address</p>
                      <?php } elseif (isset($errors['Email'])) { ?>
                        <p class="warning clearfix">- Invalid E-mail Address</span>
                      <?php } ?>
                      <?php if ($missing && in_array('Comments', $missing)) { ?>
                        <p class="warning clearfix">- Please enter your Comments</p>
                      <?php } ?>
                    <fieldset id="fieldset">
                        <legend id="legend">Contact Us</legend>
                                <div class="row"> 
                                    <div class="large-6 large-offset-3 columns"><!-- this controls the width of the inputs -->
                                      <div class="name-field">
                                          <label for="First" class="left inline">First Name:</label>
                                              <input required pattern="[a-zA-Z]+" name="First" id="First" class="validate[required] text-input placeholder" type="text" placeholder="first name"
                                                <?php if ($missing || $errors) {
                                                  echo 'value="' . htmlentities($_POST['Email'], ENT_COMPAT, 'UTF-8') . '"';
                                                } ?>>
                                          </div>
                                        <div class="name-field">
                                          <label for="Last" class="left inline">Last Name:</label>
                                              <input required pattern="[a-zA-Z]+" name="Last" id="Last" class="validate[required] text-input placeholder" type="text" placeholder="last name"
                                                <?php if ($missing || $errors) {
                                                  echo 'value="' . htmlentities($_POST['Email'], ENT_COMPAT, 'UTF-8') . '"';
                                                } ?>>
                                          </div>
                                          <div class="email-field">
                                          <label for="Email" class="left inline">Email Address:</label>
                                              <input required name="Email" id="Email" class="validate[required] text-input placeholder" type="email" placeholder="email"
                                                <?php if ($missing || $errors) {
                                                  echo 'value="' . htmlentities($_POST['Email'], ENT_COMPAT, 'UTF-8') . '"';
                                                } ?>>
                                          </div>
                                    </div> <!-- end large-3 columns --> 
                                </div> <!-- end inner row -->
                            <div class="row">
                              <div class="name-field"> 
                                <div class="large-6 large-offset-3 columns centered"><!-- this controls the width of the textarea -->
                                    <label for="Comments" class="left inline">Comments:</label>
                                        <textarea required pattern="^[a-zA-Z0-9]*$" name="Comments" cols="40" rows="5" id="Comments" placeholder="How Can We Help You?"
                                        <?php if ($missing || $errors) {
                                        echo 'value="' . htmlentities($_POST['Comments'], ENT_COMPAT, 'UTF-8') . '"';
                                      } ?>></textarea>
                                    <button type="submit" name="send" class="button round right" id="send">Submit</button>
                                    </div><!-- end large-6 columns centered -->
                                </div> <!-- end name-field --> 
                            </div> <!-- end submit button row -->
                    </fieldset>
                </form>
            </div><!-- large-10 centered -->
        </div> <!-- end outer row -->
    </div><!-- end full width -->
</div><!-- end #contactForm -->

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