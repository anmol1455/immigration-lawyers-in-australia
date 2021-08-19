 <?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("purushottam@newvisiondigital.in","My subject",$msg)){
	echo "send";
}else{
	echo "failed";
}
?> 