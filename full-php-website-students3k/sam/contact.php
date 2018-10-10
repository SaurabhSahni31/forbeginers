<?php
include("common.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/trellian.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="metatags" -->
<title>Contact Us</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<?php
headersection();
topnavigator();
?>
<div id="contentWrapper">
    <div id="leftColumn1"><!-- InstanceBeginEditable name="leftsidebar" -->
      <div id="leftColumnContent">
<?php			
leftmenuitem();
?>	
      </div>
    <!-- InstanceEndEditable --></div>
<div id="content">
<div class="info">Contact With Us</div>
<p>You can contact us by sending an email to <a href="mailto:webmaster@i-tech-system.com"> webmaster@i-tech-system.com </a><br>
or by submitting your message using the form below:</p><br />

		 <script language="JavaScript" type="text/javascript">
		<!--
		function validate(){
			if ( ( document.emailForm.text.value == "" ) || ( document.emailForm.email.value.search("@") == -1 ) || ( document.emailForm.email.value.search("[.*]" ) == -1 ) ) {
				alert( "Please make sure the form is complete and valid." );
			} else if ( ( document.emailForm.email.value.search(";") != -1 ) || ( document.emailForm.email.value.search(",") != -1 ) || ( document.emailForm.email.value.search(" ") != -1 ) ) {
				alert( "You cannot enter more than one e-mail address." );
			} else {
				document.emailForm.action = "sendmessage.php";
				document.emailForm.submit();
			}
		}
		//-->
		
		</script>
				<form  method="post" name="emailForm" target="_top" id="emailForm" action="">
				<div class="contact_email">
					<label for="contact_name">
						 Enter your name:					</label>
					<br>
					<input value="" id="inputtext1" name="name" class="inputbox" type="text" />
					<br>
					<label for="contact_email">
						 E-mail address:					</label>
					<br>
					<input name="email" id="inputtext2" class="inputbox" value="" type="text">
					<br>
					<label for="contact_subject">
						 Message subject:					</label>
					<br>
					<input name="subject" id="inputtext2" class="inputbox" value="" type="text">
					<br><br>
					<label for="contact_text">
						 Enter your message:					</label>
					<br>
					<textarea cols="50" rows="10" name="text" id="contact1" class="inputbox"></textarea>
										<br>
					<br>
					<input id="inputsubmit1" name="send" value="Send" class="button" onclick="validate()" type="button">
					<input id="inputsubmit1" type="reset" value="Reset" name="reset">
				</div>
				</form>
<?php
footernavigator();
?>
</html>