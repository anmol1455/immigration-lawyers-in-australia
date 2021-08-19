<?php
 

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$which_Country_You_Are_Interested_In = $_POST['current'];
		$text = $_POST['message'];


        $to="purushottam@newvisiondigital.in";
            //$to = "pspankajsingh126@gmail.com";
         //$to = "kaushal@newvisiondigital.co";
          $message .= $name;
		  $message .= $email;
		  $message .= $phone;
		  $message .= $which_Country_You_Are_Interested_In;
          $message .= $text;

$formcontent=" From: $name \n Name: $name \n Email: $email \n Phone: $phone \n Which Country You Are Interested In: $which_Country_You_Are_Interested_In \n Message: $text";
$subject = "Free Assesment From";
$mailheader = "From: $email \r\n";

$retval=mail($to, $subject, $formcontent, $mailheader);
if( $retval == true ) {
	header("Location:https://yashimmiglobal.sg/immigration-lawyers-in-australia/thankyou.php");
}else {
	header("Location:https://yashimmiglobal.sg/immigration-lawyers-in-australia");
}

?>
