<?php

require_once('phpmailer.class.php');
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "mail.pccsuk.com";
$mail->Port = 25;
$mail->Username = "outbound@pccsuk.com";
$mail->Password = "pccontrols";
$mail->SMTPDebug = 1;





    // PREPARE THE BODY OF THE MESSAGE
extract($_POST);
if($Discount!='0.00'){
    $discount="<tr><td>Discount Code - $Discount_code </td><td align='right'> - $Discount</td></tr>";
}



			$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta content="telephone=no" name="format-detection" />	
	<title>Email Template</title>
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; -webkit-text-size-adjust:none; background-image:url(/lite/lite-priceing/images/background.jpg); background-position:0 0; background-repeat:no-repeat repeat-y }
		a { color:#93bc45; text-decoration:underline }

		/* Campaign Monitor wraps the text in editor in paragraphs. In order to preserve design spacing we remove the padding/margin */
		p { padding:0 !important; margin:0 !important } 
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; -webkit-text-size-adjust:none; background-image:url(/lite/lite-priceing/images/background.jpg); background-position:0 0; background-repeat:no-repeat repeat-y">

<table width="100%" border="0" cellspacing="0" cellpadding="0" background="/lite/lite-priceing/images/background.jpg" style="background-image: url(/lite/lite-priceing/images/background.jpg); background-position: 0 0; background-repeat: no-repeat repeat-y;">
	<tr>
		<td align="center" valign="top">
			<table width="660" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
				<tr>
					<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
					<td>
			
						<div style="font-size:0pt; line-height:0pt; height:20px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="20" style="height:20px" alt="" /></div>


						<!-- Header -->
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="#" target="_blank">
								<img src="/lite/wp-content/uploads/2018/06/logo-3.png" title="SKYLINE" width="336" height="32" alt="SKYLINE" title="SKYLINE" border="0" /></a></td>					
							</tr>
						</table>
						<!-- END Header -->
						<div style="font-size:0pt; line-height:0pt; height:20px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="20" style="height:20px" alt="" /></div>


                                                <div class="img" style="font-size:0pt; line-height:0pt; text-align:left"><img src="/lite/lite-priceing/images/footer_top.jpg" alt="" border="0" width="620" height="3" /></div>    
                                                <div style="font-size:0pt; line-height:0pt; height:20px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="20" style="height:20px" alt="" /></div>
						<!-- Content -->
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<div>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td valign="top" style="background: #ffffff !important">
													<div class="text" style="color:#797777; font-family:Arial; font-size:12px; line-height:22px; text-align:left">
													
														<div style="font-size:0pt; line-height:0pt; height:5px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>


													
														<div style="font-size:0pt; line-height:0pt; height:5px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="5" style="height:5px" alt="" /></div>


														<div>
                                                                                                                
                                                                                                                Thank you for Requesting Activation of the following: 
                                                                                                                <div style="font-size:0pt; line-height:0pt; height:10px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="25" style="height:25px" alt=""></div>

<table width="50%" border="0" cellspacing="0" cellpadding="0" style="color: #797777;font-size:12px;">
<tbody>
    <tr><td>'.$package.'</td><td align="right">'.$pack_val.'</td></tr>
<tr><td>Number Of Users('.$cntUser.') </td><td align="right"> '.$cnt_val.' </td></tr>
<tr><td>Modules :  </td><td> </td></tr>
<tr><td>Training  </td><td align="right"> '.$training_val.' </td></tr>
<tr><td>Mobile Workforce App  '.$remoteEng.' </td><td align="right"> '.$remoteEng_val.'</td></tr>
<tr><td>Smart Mapping '.$smartMap.' </td><td align="right"> '.$smartMap_val.'</td></tr>
<tr><td>Diary Management '.$diary_val.' </td><td align="right"> '.$setup_val.'</td></tr>
<tr><td>Postcode Lookup '.$PostCodeText.' </td><td align="right"> '.$PostCode.'</td></tr>
<tr><td>Texting  </td><td align="right"> '.$texting_val.' </td></tr>
<tr><td>Stock Control  </td><td align="right"> '.$stock_val.'</td></tr>
<tr><td>Iframe Booking & Tracking  </td><td align="right">'.$iframe_val.'</td></tr>
<tr><td>Client Booking & Tracking  </td><td align="right"> '.$client_val.'</td></tr>
<tr><td>Website Design  </td><td align="right"> '.$website_design.'</td></tr>'.$discount.'        
<tr><td>Total (Ex Vat)  </td><td align="right">'.$Total_val.'</td></tr>
<tr><td>VAT at 20%  </td><td align="right"> '.$VAT_val.'</td></tr>
<tr><td>Total (inc VAT)  </td><td align="right"> <span class="link" style="color:#93bc45;font-size:14px; text-decoration:none"> �  '.$Total_vat_val.'</span></td></tr>
</tbody></table>

<div style="font-size:0pt; line-height:0pt; height:25px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="25" style="height:25px" alt=""></div>
Your Details:<br />
<table width="50%" border="0" cellspacing="0" cellpadding="0" style="color: #797777;font-size:12px;">
<tbody>
<tr><td>Full Name  </td><td> '.$full_name.'</td></tr>
<tr><td>Company  </td><td> '.$company.'</td></tr>
<tr><td>Email Address  </td><td> '.$emailID.'</td></tr>
<tr><td>Landline Telephone Number  </td><td> '.$Telphone.'</td></tr>
<tr><td>Your Reference Number  </td><td> '.$RefNo.'</td></tr>
<tr><td>Address Line 1  </td><td> '.$address_1.'</td></tr>
<tr><td>Address Line 2  </td><td> '.$address_2.'</td></tr>
<tr><td>Town/City  </td><td> '.$town.'</td></tr>
<tr><td>County:  </td><td> '.$county.'</td></tr>
<tr><td>Postcode  </td><td> '.$postcode.'</td></tr>
<tr><td>Country  </td><td> '.$country.'</td></tr>                                                                                    
</tbody></table>
<div style="font-size:0pt; line-height:0pt; height:25px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="25" style="height:25px" alt=""></div>


We are confident you will be happy with your selections, however, a  member of our installation and support team will contact you within 24 hours to discuss your requirements and proceed with the installation.<br /><br />

If you wish to contact the Installation Team directly please email us<br /><br />

Assuring you of our best attention at all times.<br />
Kind regards<br />

Managing Director<br />

                                                                                                                </div>
													
													</div>
												</td>
												
											</tr>
										</table>
										<div style="font-size:0pt; line-height:0pt; height:50px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="50" style="height:50px" alt="" /></div>

										<div style="font-size:0pt; line-height:0pt; height:10px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="10" style="height:10px" alt="" /></div>

									</div>
						
								</td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" style="color: #797777;font-size:12px;text-align:center;">
							<tr><td>(This e-mail was sent from a contact form on SKYLINE )</td></tr>
						</table>
						<!-- END Content -->

						<!-- Footer -->
						<div class="img" style="font-size:0pt; line-height:0pt; text-align:left"><img src="/lite/lite-priceing/images/footer_top.jpg" alt="" border="0" width="620" height="3" /></div>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" >
							<tr>
								<td>
									<div style="font-size:0pt; line-height:0pt; height:12px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="12" style="height:12px" alt="" /></div>

									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
											<td valign="top" class="footer-left" style="color:#877d76; font-family:Arial; font-size:11px; line-height:15px; text-align:left">
												<div class="img" style="font-size:0pt; line-height:0pt; text-align:left">
													<a href="#" target="_blank"><img src="/lite/wp-content/uploads/2018/06/logo-3.png" alt="SKYLINE" title="SKYLINE" border="0" width="336" height="32" /></a>
												</div>
												<div style="font-size:0pt; line-height:0pt; height:45px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="45" style="height:45px" alt="" /></div>

												<div>
													Copyright &copy; 2015 &nbsp; &nbsp; All Rights Reserved 
												</div>
											</td>
											<td valign="top" class="footer-right" style="color:#877d76; font-family:Arial; font-size:11px; line-height:20px; text-align:right">
											
												<div>
													Skyline<br />
													<a href="#" target="_blank" class="link2-u" style="color:#a59990; text-decoration:underline"><span class="link2-u" style="color:#a59990; text-decoration:underline">skyline</span></a> <a href="mailto:installations@skyline.com" target="_blank" class="link2-u" style="color:#a59990; text-decoration:underline"><span class="link2-u" style="color:#a59990; text-decoration:underline">installations@skyline.com</span></a><br />
													Phone: 01604 968938
												</div>
											</td>
											<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
										</tr>
									</table>
									<div style="font-size:0pt; line-height:0pt; height:12px"><img src="/lite/lite-priceing/images/empty.gif" width="1" height="12" style="height:12px" alt="" /></div>

								</td>
							</tr>
						</table>
			
						<!-- END Footer -->
					</td>
					<td class="img" style="font-size:0pt; line-height:0pt; text-align:left" width="20"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
';
			
			
            //  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
		$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
                if (preg_match($pattern, trim(strip_tags($emailID)))) { 
                    $emailID = trim(strip_tags($emailID)); 
                } else { 
                    echo 2; 
                    exit;
                } 	
	
	
            
            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = $emailID;
			$replayFrom='installations@skyline.com';
			$subject = 'Requesting Activation';
			
	/*		$headers = "From: " . $replayFrom . "\r\n";
			$headers .= "Reply-To: ". $replayFrom . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= 'Bcc: installations@skyline.com' . "\r\n";
                        $headers .= 'Cc: xxx@skyline.com' . "\r\n";

            if (mail($to, $subject, $message, $headers)) {
              echo 1;
            } else {
              echo 0;
            }
            */
                        
            $mail->SetFrom($replayFrom, 'Installations Skyline');
            $mail->Subject = $subject;
            $body=$message;
            $mail->MsgHTML($body);
            $mail->AddAddress($to, $full_name);            
            $mail->AddCC($replayFrom, 'Installations Skyline');
			$mail->AddCC('xxxx@skyline.com', 'Joe');
			$mail->AddCC('xxxx@skyline.com', 'Alicia');
			$mail->AddCC('xxxx@skyline.com', 'Aimee');
			$mail->AddCC('xxxx@skyline.com', 'Renate');
			$mail->AddCC('xxxx@skyline.com', 'Reins');
			$mail->AddCC('xxxx@skyline.com', 'Sanita');
			$mail->AddCC('xxxx@skyline.com', 'Kuznecova');
            $mail->AddReplyTo($replayFrom, 'Installations Skyline');

            if($mail->Send()) {
              echo 1;
            } else {
              echo 0;
            }
            
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();

?>
