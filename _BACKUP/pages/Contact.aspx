<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Contact.aspx.cs" Inherits="Cedexsa.Zellikbiz.Site.pages.Contact" %>
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
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


<script type="text/javascript">		
	$(document).ready(function(){			
		// RESIZER
		updateScreenSizePage();
		$(window).resize(function() {
			updateScreenSizePage();
		});	
		
		function updateScreenSizePage(){
			var screen_height = $(window).height();
			var screen_width = $(window).width();				
		}
	});
	
	
	var geocoder = new google.maps.Geocoder();
	
	geocoder.geocode({'address':'Zuiderlaan 14, 1731 Zellik, België'}, function(results, status)
	{
		if (status == google.maps.GeocoderStatus.OK)
		{
			showMap(50.87990,4.28344,18, 0);
		}
	});
	
	function showMap(in_lat, in_lng, loc_id)
	{
		var map = new google.maps.Map($('#map')[0], {
		    zoom: 12,
		    center: new google.maps.LatLng(in_lat,in_lng),
		    scrollwheel: true,
		    streetViewControl: false,
		    mapTypeId: google.maps.MapTypeId.ROADMAP,
		    mapTypeControlOptions: {mapTypeIds: []},
		    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	    	styles: [{ stylers: [{ saturation: 0}]}]
		});
		
		var markerIcon = { url: 'map_marker.png' };
		
	    var locations = [[1,'<p>Zellik.biz</p>', in_lat,in_lng]];
	
	    var infowindow = new google.maps.InfoWindow();
	
	    var marker, i;
	
	    for (i = 0; i < locations.length; i++) { 
	      marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][2], locations[i][3]),
			icon: markerIcon,
	        map: map
	      });
	      
	      /*
	      google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
	          infowindow.setContent(locations[i][1]);
	          infowindow.open(map, marker);
	        }
	      })(marker, i));
	      */			
	    }
	}
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
            <a href="Contact.aspx" >NL</a>
            <a href="ContactFr.aspx" >FR</a>
          	</div>
         </div>
     </div>
	<!-- end header -->

	<div id="inhoud">
    	<!-- col_left -->
		<div id="col_contact_left" style="width:270px;">
			<h2 class="NeoSansStdRegular">Contacteer ons</h2>
			<p class="adres" style="font-size:14px; line-height:22px;">Zuiderlaan 14<br/>1731 Zellik<br/>
				<a href="mailto:info@zellik.biz" style="color:#6ea9de;">info@zellik.biz</a><br/> 
        	T +32 2 808 20 20</p>
		</div>
        <!-- col_right -->
      <div id="col_contact_right" style="width:520px;">
         	<h2 class="NeoSansStdRegular">Ligging      </h2>
         	<p style="height:350px;" id='map'>
         		&nbsp;
         	</p>
    </div>
    <!-- end inhoud -->
    
    
     <div id="footer">
      <p align="left" class="footer_adres">Zuiderlaan 14, Zellik - T +32 2 808 20 20 - <a href="mailto:info@zellik.biz"> info@zellik.biz</a><p><a href="http://www.skinn.be" id="skinn">
				 skinn</a> </p>
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