<?php 

$mailto = 'director@tumorbankofwnc.org' ;
$subject = "Feedback From Tumor Bank of WNC Website" ;
$formurl = "contact.php" ;
$thankyouurl = "thankYou.php" ;
$errorurl = "error.php" ;

$email_is_required = 1;
$firstName_is_required = 1;
$lasstName_is_required = 1;
$comments_is_required = 1;
$uself = 0;
$forcelf = 0;
$use_envsender = 0;
$use_sendmailfrom = 0;
$smtp_server_win = '' ;
$use_webmaster_email_for_from = 0;
$use_utf8 = 1;
$my_recaptcha_private_key = '6LfKAeUSAAAAAKI-wLKV3ZxgbRR3lg4KTI4lR586' ;

require_once( 'recaptchalib.php' );

// -------------------- END OF CONFIGURABLE SECTION ---------------

define( 'MAX_LINE_LENGTH', 998 );
$headersep = $uself ? "\n" : "\r\n" ;
$content_nl = $forcelf ? "\n" : (defined('PHP_EOL') ? PHP_EOL : "\n") ;
$content_type = $use_utf8 ? 'Content-Type: text/plain; charset="utf-8"' : 'Content-Type: text/plain; charset="iso-8859-1"' ;
if ($use_sendmailfrom) {
	ini_set( 'sendmail_from', $mailto );
}
if (strlen($smtp_server_win)) {
	ini_set( 'SMTP', $smtp_server_win );
}
$envsender = "-f$mailto" ;
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : $_POST['firstName'] ;
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : $_POST['lastName'] ;
$email = $_POST['email'] ;
$comments = $_POST['comments'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
	header( "Location: $formurl" );
	exit ;
}
if (($email_is_required && (empty($email) || !preg_match('/@/', $email))) || ($firstName_is_required && empty($firstName)) || ($lastName_is_required && empty($lastName)) || ($comments_is_required && empty($comments))) {
	header( "Location: $errorurl" );
	exit ;
}
if ( preg_match( "/[\r\n]/", $firstName ) || preg_match( "/[\r\n]/", $lastName ) || preg_match( "/[\r\n]/", $email ) ) {
	header( "Location: $errorurl" );
	exit ;
}
if (strlen( $my_recaptcha_private_key )) {
	$resp = recaptcha_check_answer ( $my_recaptcha_private_key, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field'] );
	if (!$resp->is_valid) {
		header( "Location: $errorurl" );
		exit ;
	}
}
if (empty($email)) {
	$email = $mailto ;
}
$fromemail = $use_webmaster_email_for_from ? $mailto : $email ;

if (function_exists( 'get_magic_quotes_gpc' ) && get_magic_quotes_gpc()) {
	$comments = stripslashes( $comments );
}

$messageproper =
	"This message was sent from:" . $content_nl .
	"$http_referrer" . $content_nl .
	"------------------------------------------------------------" . $content_nl .
	"Name of sender: $firstName $lastName" . $content_nl .
	"Email of sender: $email" . $content_nl .
	"------------------------- COMMENTS -------------------------" . $content_nl . $content_nl .
	wordwrap( $comments, MAX_LINE_LENGTH, $content_nl, true ) . $content_nl . $content_nl .
	"------------------------------------------------------------" . $content_nl ;

$headers =
	"From: \"$lastName\" <$fromemail>" . $headersep . "Reply-To: \"$lastName\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.16.8" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

if ($use_envsender) {
	mail($mailto, $subject, $messageproper, $headers, $envsender );
}
else {
	mail($mailto, $subject, $messageproper, $headers );
}
header( "Location: $thankyouurl" );
exit ;

?>