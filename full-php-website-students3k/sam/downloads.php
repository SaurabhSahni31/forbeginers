<?php
include("common.php");
include("wrini.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/trellian.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="metatags" -->
<title>Download Section</title>
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
<CENTER>
	  <br /><script type="text/javascript"><!--
google_ad_client = "pub-7526690253327491";
/* 200x200, created 11/28/08 */
google_ad_slot = "6539975244";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</CENTER>	  
<?php			
leftmenuitem();
?>	
      </div>
    <!-- InstanceEndEditable --></div>
	<div id="rightColumn1">
      <div align="center">
       <script type="text/javascript"><!--
google_ad_client = "pub-7526690253327491";
/* 160x600, created 11/28/08 */
google_ad_slot = "2084401685";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
 </div><!-- InstanceEndEditable --> </div>
    <div id="content"><!-- InstanceBeginEditable name="maincontent" -->
	<p><img src="images/vidconv2.gif" alt="iTech Video Converter 2.0.0" class="fltrt" /><h3>iTech Video Converter</h3></p>
    <p>Version : 2.0.0</p>
    <p>Size : 4.99 MB</p>
	<p>Price : FREE</p>
	<h3>Total Downloads : <?php echo readini ("downloadcount.ini","downloads","video_converter"); ?></h3>
	<p><a href="#">System Requirments</a></p>
	<p><a href="#">Download</a></p>

	<br /><h2></h2><br />
	<p><img src="images/Windows-Shutdown-fast_1.gif" alt="Shutdown fast!" width="200" height="86" class="fltrt" /><h3>Windows Shutdown Fast!</h3></p>
    <p>Version : 1.0.0</p>
    <p>Size : 73 KB</p>
	<h3>Total Downloads : <?php echo readini ("downloadcount.ini","downloads","shutdown_fast"); ?></h3>
	<p><a href="#">System Requirments</a></p>
	<p><a href="#">Download</a></p>
<br />   
	<br /><h2></h2><br />
    <p><img src="images/iTech-ActiveX-Registerer_1.png" alt="Activex Registerer" width="200" height="86" class="fltrt" /><h3>ActiveX Registerer</h3></p>
    <p>Version : 1.0.0</p>
    <p>Size : 206 KB</p>
	<h3>Total Downloads : <?php echo readini ("downloadcount.ini","downloads","activex_registerer"); ?></h3>
    <p><a href="#">System Requirments</a></p>
	<p><a href="#">Download</a></p>
</div>
    <?php
footernavigator();
?>
<!-- InstanceEnd --></html>