<?php
  use PHPMailer\PHPMailer\PHPMailer;

  if (isset($_POST['name']) && isset( $_POST['email'])) {
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$subject = $_POST['subject'];
  	$body = $_POST['body'];

  	require_once "phpmailer/phpmailer.php";
  	require_once "phpmailer/SMTP.php";
  	require_once "phpmailer/Exception.php";

  	$mail  = new PHPMailer(true);

    $alert = '';

  	// stmp settings
  	$mail->isSMTP();
  	$mail->Host = "smtp-gmail.com";
  	$mail->SMTPAuth = true;
  	$mail->Username = "gloriachidinma123@gmail.com";
  	$mail->Password = "iloveyou1998-";
  	$mail->port = 587;
  	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

  	// email settings
  	$mail->isHTML(true);
  	$mail->setFrom('gloriachidinma123@gmail.com');
  	$mail->addAddress("gloriachidinma123@gmail.com");
  	$mail->subject = ("$email ($subject)");
  	$mail->Body = $body;

  	// if ($mail->send()) {
  	// 	$status = "success";
  	// 	$response = "Email is sent!";
  		
  	// }
  	// else {
  	// 	$status = "failed";
  	// 	$response = "something is wrong: <br>" . $mail->Errorinfo;
  	// }
  	// exit(json_encode(array("status" => $status, "response" => $response)));

    if ($mail->send()){
    $alert = '<div class="alert-success">
                    <span>Message Sent! Thank you for contacting us.</span>
                  </div>';
  }
   else (Exception) {
    $alert = '<div class="alert-error">
                    <span>Something went wrong please try again.</span>
                  </div>';
                 }

  }

?>