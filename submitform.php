<?php

/* Contact Form Submit */
if(isset($_POST['email'])){
	
	$email=$_POST['email'];
	
	$message=$_POST['message'];
	
	$to = "tibordraganmusic@gmail.com";
	
	$admin_message = '<!DOCTYPE html>
						<html>
						<head>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<style>
						@media screen and (max-width:767px){
						table{
							width:100%;	
						}
						}
						</style>
						</head>

						<body style="text-align:center;">

						<table width="560" cellspacing="30" cellpadding="0" style="margin:0 auto;" bgcolor="#ffffff" >
						  <tr>
							<td style="text-align:center; color:#425b76; font-family: Arial, Helvetica, sans-serif; font-weight:bold;">
							<p style="font-size:32px;">Contact Form Details</p>
							</td>
						  </tr>
						  <tr>
							<td style="padding:4% 5%;text-align:left;">
								<p style="color:#556c84; font-size:14px; margin:0 0 30px; padding:0;"><strong>Email:</strong><br/>'.$email.'</p>
								<p style="color:#556c84; font-size:14px; margin:0 0 30px; padding:0;"><strong>Üzenet:</strong><br/>'.$message.'</p>
							</td>
						  </tr>
						</table>
						</body>
						</html>';

	$subject = "Contact Details";
	
	$header = "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$header .= "MIME-Version: 1.0\r\n";
	
	$header .= "From: Airsound Records - <noreply@eelkcorb.com>" . "\r\n";
		
	mail($to, $subject, $admin_message, $header);			
		
}

?>