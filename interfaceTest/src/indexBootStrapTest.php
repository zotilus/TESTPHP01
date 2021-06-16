<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	
	
   

</head>
<!-- PHP MAILER -->
<!-- http://127.0.0.1/TESTPHP/interfaceTest/src/indexBootStrapTest.php -->
<!-- https://www.youtube.com/watch?v=-B1L0O6S-88&ab_channel=learnWebCoding -->


<body>
<div class="container">

<hr>
	<?php 
	// use PHPMailer\PHPMailer\PHPMailer;
	use APP\SMTP;
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require '../vendor/autoload.php';
		   // require 'PHPMailerAutoload.php';
		//    require 'credential.php';
		   require 'PHPMailer.php';
		   require 'SMTP.php';
   
   header("Access-Control-Allow-Origin: *");

	   if(isset($_POST['sendmail'])) {
		  function Sendmail($to, $subject, $message, $filename, $path){

		   $mail = new PHPMailer();
		   $mail->isSMTP();
		   $mail->Host = 'smtp.gmail.com';
		   $mail->SMTPAuth = true;   
		   $mail->Username = 'zotilusstock@gmail.com';
		   $mail->Password = 'CocoStock22';
		   $mail->SMTPSecure = 'tls';
		   $mail->Port = 587;
		   $mail->Body = $message ;
		   $mail->Subject = $subject ;
		   $mail->AltBody  = $_POST['message'];
		//    $mail->setFrom('zotilus@gmail.com');  


			// $mail = new PHPMailer;

			// $mail->SMTPDebug = 4;                               // Enable verbose debug output

			// $mail->isSMTP();                                      // Set mailer to use SMTP
			// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			// $mail->SMTPAuth = true;                               // Enable SMTP authentication
			// $mail->Username = EMAIL;                 // SMTP username
			// $mail->Password = PASS;                           // SMTP password
			// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			// $mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom($mail->Username , 'Zotilus vous envoi');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			// Attachment
			for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
		}
	}
	 ?>
	<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data">
        	<div class="row">
                <div class="col-sm-9 form-group">
                    <label for="email">To Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" maxlength="50">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="Test Mail with attachments" maxlength="50">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4">Test mail 
						
					</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">File:</label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>
                </div>
            </div>
        </form>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
