<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Kantoorruimtes zellik.biz" />
<meta name="keywords" content="kantoor,kantoorruimte,Zellik,zellik.biz,buisness center,brussels,brusel,bureau,office,bureaux," />
<meta name="author" content="skinn.be" />
<title>Zellik.biz - contact</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
<script type="text/javascript" src="../fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../fancybox/jquery.easing-1.4.pack.js"></script>
<script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="../fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>


<?php
if(isset($_POST['email'])) {
	
	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "info@zellik.biz";
	$email_subject = "Contact Zellik.biz";
	
	
	function died($error) {
		// your error code can go here
		echo "Er zijn fouten gevonden in het ingevulde formulier. ";
		echo "De fouten kan u hieronder bekijken.<br /><br />";
		echo $error."<br /><br />";
		echo "gelieve terug te gaan om deze fouten op te lossen.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['first_name']) ||
		!isset($_POST['last_name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['comments'])) {
		died('Er zijn fouten gevonden op het ingevulde formulier');		
	}
	
	$first_name = $_POST['first_name']; // required
	$last_name = $_POST['last_name']; // required
	$email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";
  if(!eregi($email_exp,$email_from)) {
  	$error_message .= 'Het ingegeven emailadress is niet correct.<br />';
  }
	$string_exp = "^[a-z .'-]+$";
  if(!eregi($string_exp,$first_name)) {
  	$error_message .= 'De ingegeven naam is niet correct.<br />';
  }
  if(!eregi($string_exp,$last_name)) {
  	$error_message .= 'Het ingegeven adres is niet correct.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'De ingegeven boodschap is niet correct.<br />';
  }
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Contact informatie.\n\n";
	
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

</head>

<body><body onload="setupZoom();">
<div id="container">

	<div id="header"><a href='http://www.zellik.biz/'><img src="/images/logo_zellikbiz_pos.png" alt="logo zellik.biz" align="left"/></a>
	  <div class="nav">
      		<div align="center" class="menu">
	    	<a href="http://www.zellik.biz">Home</a>
            <a href="/pages/formules.html">Kantoren</a>
            <a href="/pages/vergaderzalen.html">Vergaderzalen</a>
	         <a href="/pages/gallerij.html">Galerij</a>
	         <a href="/pages/partners.html">Partners</a>
             <a href="/pages/Contact.aspx" class='active'>Contact</a>
            </div>
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
 			<td valign="top" width="70px" colspan="2"><label for="first_name">Voornaam</label></td>
            </tr>
			<tr>
            <td valign="top" width="50px" colspan="2"><input  type="text" name="first_name" maxlength="50"   width="300px"class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="last_name">Naam</label></td>
            </tr>
            <tr>
            <td valign="top" width="30px" colspan="2"><input  type="text" name="last_name" maxlength="100" class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="email">Email</label></td>
            </tr>
 			<tr>
            <td valign="top" width="30px" colspan="2"><input  type="text" name="email" maxlength="80" class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top"width="70px" colspan="2"><label for="telephone">Telefoon</label></td>
            </tr>
            <tr>
            <td valign="top" colspan="2"><input  type="text" name="telephone" maxlength="30" class="textvak"></td>
            </tr>
			
			<tr>
 			<td valign="top" width="100px" colspan="2"><label for="comments">Bericht</label></td>
            </tr>
            <tr>
 			<td valign="top" colspan="2"><textarea  name="comments" maxlength="1000"  id="msg"></textarea></td>
    		</tr>
			<tr>
            
 			<td  style="text-align:center" colspan="2"><input type="submit" value="contacteer mij"  align="left" id="btn"></td>
			</tr>
			</table>
			</form>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <h2 class="NeoSansStdRegular" >Info</h2>
            <p class="adres">Zuiderlaan 14<br/>1731 Zellik<br/>
        <a href="mailto:info@zellik.biz">info@zellik.biz</a><br/> Tel. +32 (0) 498 870 740</p>
		</div>
        <!-- col_right -->
      <div id="col_contact_right">
         	<h2 class="NeoSansStdRegular">Ligging      </h2>
	     <p><a style="color:#999999;text-decoration: none;font-size:12px; font-family:'NeoSansStdRegular', sans-serif;" href="http://maps.google.be/maps?f=q&source=s_q&hl=nl&geocode=&q=zellik.biz&sll=50.805935,4.432983&sspn=6.478879,16.281738&ie=UTF8&hq=zellik.biz&hnear=&z=13&iwloc=A">routebeschrijving</a></p>
           <br/>
        <img src="../images/plan_zellik.png"  border="0" alt="grondplan zellik.biz" /></div>
    </div>
    <!-- end inhoud -->
    
    
     <div id="footer">
      <p align="left" class="footer_adres">Zuiderlaan 14, Zellik - Tel. +32 (0) 498 870 740 - <a href="mailto:info@zellik.biz"> info@zellik.biz</a><p><a href="http://www.skinn.be" id="skinn">skinn</a> </p>
  </div>
        
</div>
<script type="text/javascript" charset="utf-8">
		jQuery(document).ready(function($){
$("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'dark_rounded'});

});
	</script>
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
