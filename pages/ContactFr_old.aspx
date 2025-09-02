<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="ContactFr.aspx.cs" Inherits="Cedexsa.Zellikbiz.Site.pages.ContactFr" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Kantoorruimtes zellik.biz" />
<meta name="keywords" content="kantoor,kantoorruimte,Zellik,zellik.biz,buisness center,brussels,brusel,bureau,office" />
<meta name="author" content="skinn.be" />
<title>Zellik.biz - contact</title>
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

	
	<div id="header"><a href='http://www.zellik.biz/index_fr.html'><img src="../images/logo_zellikbiz_pos.png" alt="logo zellik.biz" align="left"/></a>
	  <div class="nav">
      		<div align="center" class="menu">
	    	<a href="../index_fr.html">Home</a>
            <a href="/pages/formules_fr.html">Bureaux</a>
            <a href="/pages/vergaderzalen_fr.html">Salles de réunion</a>
	         <a href="/pages/gallerij_fr.html">Galerie</a>
	         <a href="/pages/partners_fr.html">Partenaires</a>
             <a href="/pages/ContactFr.aspx" class="active">Contact</a></div>
    <!-- taal -->
	        <div align="right" class="taal">
            <a href="Contact.aspx" >NL</a>
            <a href="ContactFr.aspx" >FR</a>
            </div>
          
          
	  </div>
      
  </div>
	<!-- end header -->

	<div id="inhoud">
    	<!-- col_left -->
		<div id="col_contact_left">
			<h2 class="NeoSansStdRegular">Contact      </h2>
        	<form id="MainForm" runat="server">
        	<asp:PlaceHolder ID="SentPlaceHolder" runat="server" Visible="false">
        	<table width="380px;"  align="left" cellpadding="0" cellspacing="4px" border="0"   class="table"  >
					<tr>
 					<td valign="top" width="70px" colspan="2">Formulaire est envoyé</td>
								</tr></table>
        	</asp:PlaceHolder>
        	<asp:PlaceHolder ID="FormPlaceHolder" runat="server">
        	<asp:ValidationSummary ID="ValidationSummary1" runat="server" />
         	<table width="380px;"  align="left" cellpadding="0" cellspacing="4px" border="0"   class="table"  >
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="VoornaamTextBox">Prénom</label><asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="VoornaamTextBox" Text="*" ErrorMessage="Prénom est obligatoire" Display="Dynamic" /></td>
            </tr>
			<tr>
            <td valign="top" width="50px" colspan="2"><asp:TextBox ID="VoornaamTextBox" runat="server" MaxLength="50" Width="300px" CssClass="textvak" /></td>
            </tr>
			
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="NaamTextBox">Nom de famille</label><asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="NaamTextBox" Text="*" ErrorMessage="Nom de famille est obligatoire" Display="Dynamic" /></td>
            </tr>
            <tr>
            <td valign="top" width="30px" colspan="2"><asp:TextBox ID="NaamTextBox" runat="server" MaxLength="100" CssClass="textvak" /></td>
            </tr>
			
			<tr>
 			<td valign="top" width="70px" colspan="2"><label for="EmailTextBox">Adresse email</label><asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="EmailTextBox" Text="*" ErrorMessage="Adresse email est obligatoire" Display="Dynamic" /><asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="EmailTextBox" Text="*" ErrorMessage="Adresse email est invalide" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" Display="Dynamic" /></td>
            </tr>
 			<tr>
            <td valign="top" width="30px" colspan="2"><asp:TextBox id="EmailTextBox" runat="server" MaxLength="80" CssClass="textvak" /></td>
            </tr>
			
			<tr>
 			<td valign="top"width="70px" colspan="2"><label for="TelefoonTextBox">Numéro de téléphone</label></td>
            </tr>
            <tr>
            <td valign="top" colspan="2"><asp:TextBox ID="TelefoonTextBox" runat="server" MaxLength="30" CssClass="textvak" /></td>
            </tr>
			
			<tr>
 			<td valign="top" width="100px" colspan="2"><label for="BerichtTextBox">le Message</label></td>
            </tr>
            <tr>
 			<td valign="top" colspan="2"><asp:TextBox ID="BerichtTextBox" runat="server" TextMode="MultiLine" MaxLength="1000" CssClass="msg" /></td>
    		</tr>
			<tr>
            
 			<td  style="text-align:center" colspan="2"><asp:Button ID="SubmitButton" runat="server" Text="contactez- moi" CssClass="btn" OnClick="SubmitButton_Click" /></td>
			</tr>
			</table>
			</asp:PlaceHolder>
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
