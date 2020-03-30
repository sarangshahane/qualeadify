<?php 
		
	// include_once("db_config.php");

		extract($_POST);
		// print_r($_POST);
		
			include_once('PHPMailer_5.2.2-beta2/class.phpmailer.php');
	
// $secretKey = "6LeHKGAUAAAAANCt5vXQfn161Zo_mUv565gtr-Wx";
// $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
// $googleobj = json_decode($response);
// $verified = $googleobj->success;
// if ($verified === true)
// {
            // insert into databse
            // $qry_contact = "INSERT INTO `contact_enquiries`(`ce_id`, `ce_fname`, `ce_lname`, `ce_email`, `ce_contact`, `ce_msg`, `status`, `updated_time`) VALUES ( null, '$name', null, '$email', '$contact_no', '$message', 1, now() )";

            // mysql_query( $qry_contact) or die(mysql_error() );

			$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
	
			//$mail->IsSendmail(); // telling the class to use SendMail transport
	       
            if( isset( $full_name ) ){
                $name = $full_name;

            }else{

                $name = $f_name." ".$l_name;
            }
			
            if( 'header' == $form_loc ){
                $message = 'Quick Enquiry';
            }

			try {
			
			
			 		//$mail->AddAddress($name, $email);
					
			 		$mail->AddAddress('info@qualeadify.com ', 'Qualeadify');
					
					//$mail->AddAddress('sarangshahane@roccketmail.com', 'Qualeadify');
										
			 		$mail->SetFrom('noreply@qualeadify.com', 'Qualeadify');
					
					$mail->Subject = 'Enquiry from Qualeadify website';
					
					$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
			
					 $mess=createHtml($name, $email, $contact_no, $message);
					  
					  //print_r($mail);
			
					  $mail->MsgHTML($mess);
			
					 // $mail->AddAttachment('images/phpmailer.gif');      // attachment
			
					  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
			
					  $mail->Send();
                        if( 'header' == $form_loc ){
                            echo "Message Sent Successfully!";
                        }else{

					       header("location:index.php?enq=yes");			  
                        }
	
			} catch (phpmailerException $e) {
	
			  echo $e->errorMessage(); //Pretty error messages from PHPMailer
	
			} catch (Exception $e) {
	
			  echo $e->getMessage(); //Boring error messages from anything else!
	
			}
			
// }
			//header("Location: thank-you.php?enq=y");


function createHtml($name, $email, $contact_no, $message)
{
	$html="<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='backgroundTable' style='background:#f4f4f4;'>
    <tr>
        <td align='center' valign='top'>
            <br />
            <table border='0' cellpadding='10' cellspacing='0' width='600' id='templatePreheader' style='background-color:#FFF;border-radius: 5px;margin-bottom:5px;box-shadow:0px 2px 2px 0px #ccc;'>
                <tr>
                    <td valign='top' class='preheaderContent'>
                        <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                            <tr>
                                <td valign='top'>
                                    <div mc:edit='std_preheader_content'> <h4 style='margin:0;text-transform:uppercase;'>Qualeadify Website Enquiry</h4></div>
                                </td>
                                <td valign='top' width='180' style='vertical-align: middle;text-align:center;'>
                                    <div mc:edit='std_preheader_links'> <a href='http://qualeadify.com/' target='_blank' style='text-decoration:none;text-transform:none;color:#FFF;border:1px #EC483C solid;padding:8px 15px;border-radius:50px;background-color:#EC483C;'>Visit Website</a> </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer' style='margin-bottom:5px;'>
    <tr>
        <td align='center' valign='top'>
            <table border='0' cellpadding='10' cellspacing='0' width='600' id='templateBody'>
                <tr>
                    <td valign='top' class='bodyContent' style='background-color:#FFF;border-radius: 5px;box-shadow:0px 2px 2px 0px #ccc;'>
                        <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                            <tr>
                                <td valign='top'>
                                    <div mc:edit='std_content00'>
                                        <div style='width:100%;'>
                                            <table width='100%'>
                                                <tbody>
                                                    <tr>
                                                        <td colspan='4' style='border-bottom:1px black solid;padding-bottom: 20px;padding-top: 10px;'>
                                                            <center> <span style='color:#EC483C'> <span style='font-size:18px; text-transform:uppercase;'> <strong>Enquiry Details</strong> </span> </span>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Name:</td>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>" .$name. "</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Email :</td>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>".$email. "</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Contact no :</td>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>".$contact_no. "</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>Message:</td>
                                                        <td valign='top' style='border-bottom:1px black solid;padding-bottom: 10px;'>".$message. " </td>
                                                    </tr>
                                                </tbody>
                                            </table> &nbsp;&nbsp; 
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<br></td></tr></table>";

return $html;

}
?>

