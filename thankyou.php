<?php
if (isset($_POST['submit_contact'])) 
{
$name1 = $_POST['name'];
$email1 = $_POST['email'];
$phone1 = $_POST['phone'];
$course = $_POST['select'];
$formvar = $_POST['textarea'];
$to = "enqodle.social@gmail.com";
$subject = "YashImmiglobal - Singapore ";

$message = "
<html>
<body>
<table>
<tr>
<th>Name</th>
<td>$name1</td>
</tr>
<tr>
<th>Phone</th>
<td>$phone1</td>
</tr>
<tr>
<th>Email</th>
<td>$email1</td>
</tr>
<tr>
<th>Country</th>
<td>$course</td>
</tr>
<tr>
<th>Message</th>
<td>$formvar</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@yashimmiglobal.com>' . "\r\n";
$headers .= 'Bcc: ' . "\r\n";

$mail = mail($to,$subject,$message,$headers);

$to1 = $email1;
$subject1 = "Acknowledgement";

$message1 = '
<table width="700" cellpadding="0" cellspacing="0" align="center" style="background:#ffffff; border:solid 2px #0391f3; border-top:8px solid #0391f3; font:normal 15px arial; text-align:justify; color:#333333;">
	
	<tr>
		<td align="center">
			<table width="690" border="0" hspace="0" vspace="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="2px solid #15416e">
				<tr>
					<td align="center">
						<table width="650" border="0" hspace="0" vspace="0" cellpadding="0" cellspacing="0">
							<tr>
								<td height="30"></td>
							</tr>
							<tr>
								<td align="center" style="line-height:22px;">
									<img width="250px" src="https://yashimmiglobal.com/wp-content/uploads/2019/09/yash-logo.png" alt="NG Networks Logo"><br><br>
								
									<strong style="color:#000000; font-weight:bolder;"><b style="color:#0e0350; font-size:30px; line-height:40px;">THANK YOU</b></strong><br/>
									We appreciate your interest in Yashimmiglobal.com . Our Career Councelor will connect with you shortly.<br/>
									You will receive a confirmation email or phone shortly.<br/><br/>
									
									
                                    Best Regards<br/>
                                    Yashimmiglobal
								</td>
							</tr>
							<tr>
								<td height="45"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
';

// Always set content-type when sending HTML email
$headers1 = "MIME-Version: 1.0" . "\r\n";
$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers1 .= 'From: <noreply@yashimmiglobal.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$mail1 = mail($to1,$subject1,$message1,$headers1);
if($mail1)
{
	$msg ="Thanks for filling out our form";
	//header("Location: thanku.html?status=success");
	//exit();
} else {
	//header("Location: contact.php?status=error");
	//exit();
	$msg ="Not Submit";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thank You | Yash Immiglobal</title>
<style>
html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
}
::-webkit-scrollbar { 
    display: none;
}
section, article, aside, header, footer, nav, dialog, figure {
	display: block;
	clear:both;
}
ul, ol {
	list-style: none;
}
img { width:100%; }

.banner {width: 100%;
    height: 100vh;
    display: block;
    padding-top: 10%;
    text-align: center;
    background: #068ec0;}

</style>


<!-- Global site tag (gtag.js) - Google Ads: 663096124 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-663096124"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-663096124');
</script>


<!-- Event snippet for Submit lead form conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-663096124/Z0H9CJP_n8kBELyWmLwC'});
</script>
  </head>
  <body>
  
  <div class="banner"><a href="http://www.yashimmiglobal.com/"><img src="img/thanks.png" alt="Yash Immiglobal" style="width:auto;"></a></div>

  </body>
</html>