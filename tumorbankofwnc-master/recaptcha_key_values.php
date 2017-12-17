require_once('./includes/recaptchalib.php');
$public_key = '6Le_IN4SAAAAALIjEeR5yovxZs_ZMQ5pS_HcGnl0';
$private_key = '6Le_IN4SAAAAAEwGkS7M7uEqNAX4V_S9w5dCWZM1';


// create additional headers
		$headers = "From: Tumor Bank of WNC, Inc.<labdir@tumorbankofwnc.org>\r\n";
		$headers .= 'Content-Type: text/plain; charset=utf-8';
		$headers .= 'Cc: Dr. Don Russell <dwrussellmd@gmail.com>\r\n';
		$headers .= 'Bcc: Jason McCoy<hoppedupdesigns@gmail.com';
		$response = recaptcha_check_answer($private_key, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'],    $_POST['recaptcha_response_field']);
  if (!$response->is_valid) {
	$errors['recaptcha'] = true;
  }