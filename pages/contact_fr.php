<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Kantoorruimtes zellik.biz" />
<meta name="keywords" content="kantoor,kantoorruimte,Zellik,zellik.biz,buisness center,brussels,brusel,bureau,office" />
<meta name="author" content="skinn.be" />
<titleZellik.biz contact formulier</title>

<?php
if(isset($_POST['email'])) {
	
	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "info@zellik.biz";
	$email_subject = "Contact Zellik.biz";
	
	
	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['first_name']) ||
		!isset($_POST['last_name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['comments'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$first_name = $_POST['first_name']; // required
	$last_name = $_POST['last_name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";
  if(!eregi($email_exp,$email_from)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
	$string_exp = "^[a-z .'-]+$";
  if(!eregi($string_exp,$first_name)) {
  	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  $string_exp = "^[a-z .'-]+$";
  if(!eregi($string_exp,$last_name)) {
  	$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Form details below.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Naam: ".clean_string($first_name)."\n";
	$email_message .= "Adres: ".clean_string($last_name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telefoon: ".clean_string($telephone)."\n";
	$email_message .= "bericht: ".clean_string($comments)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- include your own success html here -->



<?
}
?>

<link href="../style.css" rel="stylesheet" type="text/css" />


<!-- jquery slideshow -->
<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/easySlider1.5.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				controlsBefore:	'<p id="controls">',
				controlsAfter:	'</p>',
				auto: true, 
				continuous: true
			});
			$("#slider2").easySlider({
				controlsBefore:	'<p id="controls2">',
				controlsAfter:	'</p>',		
				prevId: 'prevBtn2',
				nextId: 'nextBtn2'	
			});			
		});	
	</script>

<title>Zellik.biz - contact</title></head>

<body>
<div id="container">

	
    <div id="header">	  <img src="../images/logo_zellikbiz_pos.png" alt="logo zellik.biz" align="left"/>
	  <div class="nav">
      		<div align="center" class="menu">
	    	<a href="../index_fr.html">Home</a>
            <a href="formules_fr.html">Bureaux</a>
	         <a href="gallerij_fr.html">Galerie</a>
	         <a href="#">Partenaires</a>
             <a href="contact_fr.php">Contact</a>             </div>
    <!-- taal -->
	        <div align="right" class="taal">
            <a href="contact.php" >NL</a>
            <a href="contact_fr.php" >FR</a>
            </div>
          
          
	  </div>
      
  </div>
	<!-- end header -->

	<div id="inhoud">
    	<!-- col_left -->
		<div id="col_contact_left">
			<h2 class="NeoSansStdRegular">Contact      </h2>
        	<form name="contactform" method="post" action="contact.php">
         	<table width="380px;"  align="left" cellpadding="0" cellspacing="4px" border="0"   class="table"  >
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="first_name">Prénom</label></td>
            </tr>
			<tr>
            <td valign="top" width="50px" colspan="2"><input  type="text" name="first_name" maxlength="50"   width="300px"class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="last_name">Nom de famille</label></td>
            </tr>
            <tr>
            <td valign="top" width="30px" colspan="2"><input  type="text" name="last_name" maxlength="100" class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="email">Adresse email</label></td>
            </tr>
 			<tr>
            <td valign="top" width="30px" colspan="2"><input  type="text" name="email" maxlength="80" class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top"width="70px" colspan="2"><label for="telephone">Numéro de téléphone</label></td>
            </tr>
            <tr>
            <td valign="top" colspan="2"><input  type="text" name="telephone" maxlength="30" class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top" width="100px" colspan="2"><label for="comments">le Message</label></td>
            </tr>
            <tr>
 			<td valign="top" colspan="2"><textarea  name="comments" maxlength="1000"  id="msg"></textarea></td>
    		</tr>
			<tr>
            
 			<td  style="text-align:center" colspan="2"><input type="submit" value="contactez- moi" style="color:#FFF;" align="left" id="btn"></td>
			</tr>
			</table>
			</form>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <h2 class="NeoSansStdRegular" >Info</h2>
            <p class="adres">Zuiderlaan 14<br/>1731 Zellik<br/>
        <a href="mailto:info@zellik.biz">info@zellik.biz</a><br/> Tél. +32 (0) 498 870 740</p>
		</div>
        <!-- col_right -->
         <div id="col_contact_right">
         	<h2 class="NeoSansStdRegular">Emplacement      </h2>
		   <p><a style="color:#999999;text-decoration: none;font-size:12px; font-family:'NeoSansStdRegular', sans-serif;" href="http://maps.google.be/maps?f=q&source=s_q&hl=nl&geocode=&q=zellik.biz&sll=50.805935,4.432983&sspn=6.478879,16.281738&ie=UTF8&hq=zellik.biz&hnear=&z=13&iwloc=A">la description d'itinéraire</a></p>
           <br/>
        <img style="float:left;"src="../images/plan_zellik_fr.png"  alt="grondplan zellik.biz" />
        </div>
    </div>
    <!-- end inhoud -->
    
    
     <div id="footer">
      <p align="left" class="footer_adres">Zuiderlaan 14, Zellik - Tél. +32 (0) 498 870 740 - <a href="mailto:info@zellik.biz"> info@zellik.biz</a><p><a href="http://www.skinn.be" id="skinn">skinn</a> </p>
  </div>
        
</div>
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20789374-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
</body>
</html>
