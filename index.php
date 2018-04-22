<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>VPW 2017 @ Leuven</title>		
		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="offcanvas.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="timer.css">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="assets/js/ie-emulation-modes-warning.js"></script>
		<script src="vpw.js"></script>
		<script src="http://www.w3schools.com/lib/w3data.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->    
	</head>

	<body onload="initializeClock()">
    
	<!-- Top navigation of this page
    ================================================== -->
    <nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">          
				<a class="navbar-brand" href="#home" onclick="include('thuis_inhoud.php')"><img src="images/VPW2017breedmini.png" style="margin-top:-10px"/></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#home" onclick="include('thuis_inhoud.php')">VPW 2017</a></li>
					<li><a href="#programma" onclick="include('programma_inhoud.php')">Programma</a></li>
					<li><a href="#concept" onclick="include('concept.php')">Concept</a></li>
					<li><a href="#talen" onclick="include('talen.php')">Talen</a></li>
					<li id="inschrijflink"><a href="#inschrijven" onclick="include('inschrijven.php')">Inschrijven Wachtlijst</a></li>
					<!--<li><a href="#inschrijvenwachtlijst" onclick="include('inschrijven.php')">Wachtlijst</a></li>-->
					<li><a href="#dank" onclick="include('dank.php')">Dank aan</a></li>
					<li><a href="#contact" onclick="include('contact.php')">Contact</a></li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
    </nav><!-- /.navbar -->
	
	
    <div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
	
	<!-- Mainpage: carousel + content
    ================================================== -->
    <div class="col-xs-12 col-sm-9">
          
    <!-- Carousel hidden_xs
    ================================================== -->
    <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<!--<li data-target="#myCarousel" data-slide-to="3"></li>-->
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">          
				<img class="first-slide" src="images/ucllpink.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption" style="text-align: center;">
						<img src="images/VPW2017groot.png" style="height:100px;float:left;" />
						<p>Bewijs je programmeerkunst<br><strong>op de 9<sup>e</sup> Vlaamse Programmeerwedstrijd</strong></p>
						<h1 style="margin-top:0px;">op woe 15 maart 2017</h1>
					</div>
				</div>
			</div><!-- end first item -->
			<div class="item">
				<img class="second-slide" src="images/proximus.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h3>Destination Leuven</h3>
						<p><a class="btn btn-primary" href="#programma" onclick="include('programma_inhoud.php')" role="button">Waar ligt dat?</a></p>
					</div>
				</div>
			</div><!-- end second item -->
			<!--<div class="item">
				<img class="third-slide" src="images/ucllpink.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<div class="timer">                
							<div id="timerclockdiv" style="height:100px;float:left;">
								<p id="timerp"> nog even geduld: </p>
								<div><span class="days">1</span><div class="smalltext">Days</div></div>
								<div><span class="hours">2</span><div class="smalltext">Hours</div></div>
								<div><span class="minutes">3</span><div class="smalltext">Minutes</div></div>
								<div><span class="seconds">4</span><div class="smalltext">Seconds</div></div>
							</div>
							<div id="timerinschrijfknop" style="height:100px;float:left;">
								<div><button type="button" onclick="include('inschrijven.php')">Schrijf je team in!</button></div>	
							</div>
							<p id="timerh1"><strong>Start inschrijvingen VPW</strong></p>
							<p id="timerdeadline">vanaf 20 januari 2017 - 12:00</p>
						</div>
					</div>
				</div>
			</div><!-- end third item -->
			<div class="item">
				<img class="fouth-slide" src="images/ucllpink.jpg" alt="Fourth slide">
				<div class="container">
					<div class="carousel-caption">
						<div>
							<a href="https://www.sioux.eu/" target="_blank">
								<img src="images/sponsors/SIOUX_LOGO_rgb.jpg" class="sponsorTopGroot" alt="Sioux"/></a>
							<a href="http://www.ibm.com/be-en/" target="_blank">
								<img src="images/sponsors/LogoIBM.png" class="sponsorTopGroot" alt="IBM"/></a>
							<a href="http://www.cronos.be/" target="_blank">
								<img src="images/sponsors/LogoCronos.png" class="sponsorTopGroot" alt="Cronos"/></a>
							<a href="https://unleashed.be/" target="_blank">
								<img src="images/sponsors/LogoUnleashed.png" class="sponsorTopGroot" alt="VikingCo"/></a>
						</div>
					</div>
				</div>
			</div><!-- end fourth item -->
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div><!-- /.carousel hidden_xs -->
	
    <!-- CarouselXS (for phones)
    ================================================== -->
    <div id="myCarouselXS" class="carousel carouselXS slide visible-xs-block" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators" style="display:none;">
			<li data-target="#myCarouselXS" data-slide-to="0" class="active"></li>
			<li data-target="#myCarouselXS" data-slide-to="1"></li>
			<li data-target="#myCarouselXS" data-slide-to="2"></li>
			<!--<li data-target="#myCarouselXS" data-slide-to="3"></li>-->
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide" src="images/ucllpink.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption carouselXS" style="text-align: center;margin-bottom: -15px;">
						<h1 style="margin-top:0px;">Woe 15 maart 2017</h1>
						<p><strong>9<sup>e</sup> Vlaamse Programmeerwedstrijd</strong></p>
					</div>
				</div>
			</div><!-- end first item -->
			<div class="item">
				<img class="second-slide" src="images/proximus.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption carouselXS">
						<h3>Destination Leuven</h3>
						<p><a class="btn btn-primary" href="#programma" onclick="include('programma_inhoud.php')" role="button">Waar ligt dat?</a></p>
					</div>
				</div>
			</div><!-- end second item -->
			<!--<div class="item">
				<img class="third-slide" src="images/ucllpink.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption carouselXS" style="margin-bottom: -15px;">
						<div class="timer">                
							<div id="timerclockdiv" style="height:100px">
								<p id="timerp"> start inschrijvingen over: </p>
								<div><span class="days">1</span><div class="smalltext">Days</div></div>
								<div><span class="hours">2</span><div class="smalltext">Hours</div></div>
								<div><span class="minutes">3</span><div class="smalltext">Minutes</div></div>
								<div><span class="seconds">4</span><div class="smalltext">Seconds</div></div>
							</div>
							<div id="timerinschrijfknop" style="height:100px;float:left;">
								<div><button type="button" onclick="include('inschrijven.php')">Schrijf je team in!</button></div>	
							</div>							
						</div>
					</div>
				</div>
			</div><!-- end third item -->
			<div class="item">
				<img class="fouth-slide" src="images/ucllpink.jpg" alt="Fourth slide">
				<div class="container">
					<div class="carousel-caption carouselXS" style="margin-bottom: -15px;">
						<div>
							<a href="https://www.sioux.eu/" target="_blank">
								<img src="images/sponsors/SIOUX_LOGO_rgb.jpg" class="sponsorTopKlein" alt="Sioux"/></a>
							<a href="http://www.ibm.com/be-en/" target="_blank">
								<img src="images/sponsors/LogoIBM.png" class="sponsorTopKlein" alt="IBM"/></a>
							<a href="http://www.cronos.be/" target="_blank">
								<img src="images/sponsors/LogoCronos.png" class="sponsorTopKlein" alt="Cronos"/></a>
							<a href="https://unleashed.be/" target="_blank">
								<img src="images/sponsors/LogoUnleashed.png" class="sponsorTopKlein" alt="VikingCo"/></a>
						</div>
					</div>
				</div>
			</div><!-- end fourth item -->
		</div>
		<p class="pull-right" style="margin-top:-120px;">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toon navigatie</button>
		</p>
		<a class="left carousel-control" href="#myCarouselXS" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarouselXS" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div><!-- /.carousel xs -->

    <!-- Content (changing) of this page
    ================================================== -->
	<div class="row" id="inhoud"></div>
	
	</div><!--/.col-xs-12.col-sm-9-->
	
	<!-- Right side navigation of this page
    ================================================== -->
	<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" style="z-index:10;">
		<div class="list-group" style="float:left;"> <!-- float left? strange, it is a right side navigation -->
			<a href="#home" onclick="include('thuis_inhoud.php')" class="list-group-item"><img src="images/VPW2017grootP.png" style="width:150px" alt="" /></a>
            <a href="#reglement" onclick="include('reglement.php')" class="list-group-item">Reglement</a>
            <a href="#toelatingsproef" onclick="include('toelatingsproef.php')" class="list-group-item">Toelatingsproef</a>
            <a href="#oefenvragen" onclick="include('oefenvragen.php')" class="list-group-item">Oefenvragen</a>
            <a href="#io" onclick="include('io.php')" class="list-group-item">In- en uitvoer</a>
            <a href="#pers" onclick="include('pers_inhoud.php')" class="list-group-item">Pers</a>
            <a href="#fotos" onclick="include('fotos.php')" class="list-group-item">Foto's en meer</a>
			<!-- <a href="stats.php"  class="list-group-item">Stats inschrijvingen</a> -->
            <a href="#opgaven2016" onclick="include('opgaven2016.php')" class="list-group-item"><strong>Opgaven 2016</strong></a>
			<span id="vorigeEditiesContainer">
				<a href="#" class="list-group-item" id="vorige">Vorige edities</a>
				<span id="vorigeEdities">
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2016/" class="list-group-item subitem" id="vorige">2016</a>
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2015/" class="list-group-item subitem" id="vorige">2015</a>
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2014/" class="list-group-item subitem" id="vorige">2014</a>
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2013/" class="list-group-item subitem" id="vorige">2013</a>
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2012/" class="list-group-item subitem" id="vorige">2012</a>
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2011/" class="list-group-item subitem" id="vorige">2011</a>
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2010/" class="list-group-item subitem" id="vorige">2010</a>
					<a href="http://www.vlaamseprogrammeerwedstrijd.be/2009/" class="list-group-item subitem" id="vorige">2009</a>
				</span>
            </span>
            <a href="#" class="list-group-item">
                <img onclick="window.open('http://www.facebook.com/VlaamseProgrammeerwedstrijd');"
                     src="images/facebook_logo.png" alt="De Vlaamse Programmeerwedstrijd zit ook op Facebook" />
                <img onclick="window.open('http://twitter.com/#!/VPWedstrijd');" style='margin-left: 20px;'
                     src="images/twitter_logo.png" alt="De Vlaamse Programmeerwedstrijd zit ook op Twitter" />
            </a>
        </div>
	</div><!--/.sidebar-offcanvas-->      
	</div><!--/row-->
	<br>
	<br>
	
	<!-- Bottom - organisation + sponsors
    ================================================== -->
	<div class="row row-offcanvas row-offcanvas-right"  style="margin-left: 150px; margin-right:150px;">
		<div style="align-items: center;align-content: center; text-align: center; z-index:8;">
		<p>Hartelijk dank aan onze sponsors!</p>
			<a href="https://www.sioux.eu/" target="_blank">
				<img src="images/sponsors/LogoSioux.jpg" class="sponsorK1" alt="Sioux"/></a>
			<a href="http://www.ibm.com/be-en/" target="_blank">
				<img src="images/sponsors/LogoIBM.png" class="sponsorK1" alt="IBM"/></a>
			<a href="http://www.cronos.be/" target="_blank">
				<img src="images/sponsors/LogoCronos.png" class="sponsorK1" alt="Cronos"/></a>
			<a href="https://unleashed.be/" target="_blank">
				<img src="images/sponsors/LogoUnleashed.png" class="sponsorK1" alt="Unleashed"/></a>
			<a href="https://www.accenture.com/be-en/" target="_blank">
				<img src="images/sponsors/LogoAccenture.png" class="sponsorK1" alt="Accenture"/></a>
			<a href="http://www.delaware.be/nl-be/" target="_blank">
				<img src="images/sponsors/logoDLW.png" class="sponsorK2" alt="Delaware"/></a>
			<a href="http://www.spikes.be/" target="_blank">
				<img src="images/sponsors/LogoSpikes.png" class="sponsorK2" alt="Spikes"/></a>
			<a href="http://www.tvh.com/benl/nl" target="_blank">
				<img src="images/sponsors/logoTVH.png" class="sponsorK2" alt="TVH"/></a>
			<a href="http://www.gfi.be/" target="_blank">
				<img src="images/sponsors/logoGFI.jpeg" class="sponsorK2" alt="GFI"/></a>			
			<a href="http://www.easi.net/nl" target="_blank">
				<img src="images/sponsors/LogoEasi.png" class="sponsorK2" alt="EASI"/></a>
			<a href="http://www.realdolmen.com/nl" target="_blank">
				<img src="images/sponsors/logo_realdolmen.png" class="sponsorK2" alt="RealDolmen"/></a>
			<a href="http://www.aca-it.be/" target="_blank">
				<img src="images/sponsors/logoACAITsolutions.png" class="sponsorK2" alt="ACA IT Solutions"/></a>
			<a href="https://www.vscentrum.be/" target="_blank">
				<img src="images/sponsors/logoVSC.png" class="sponsorK2" alt="VSC"/></a>
			<a href="http://jobs.amplidata.be/" target="_blank">
				<img src="images/sponsors/logoAmplidata.png" class="sponsorK2" alt="Amplidata"/></a>
			<a href="http://www.genohm.com/" target="_blank">
				<img src="images/sponsors/logoGenohm.png" class="sponsorK2" alt="Ghenohm"/></a>				
		</div>
		<br>
		<br>				
		<div style="align-items: center;align-content: center; text-align: center; z-index:8;">
		<p>En uiteraard ook dank aan de organisatie!</p>
			<a href="http://www.kuleuven.be" target="_blank">
			  <img src="images/orgs/KULEUVEN-footer.png" alt="KU Leuven" class="orgK1"/></a>
			<a href="http://www.ucll.be" target="_blank">
			  <img src="images/orgs/UCLL_LOGO_RGB_POSI_2016_footer.png" alt="UCLL" class="orgK1"/></a>
			<a href="http://www.uhasselt.be" target="_blank">
			  <img src="images/orgs/UHASSELT-footer.jpg" alt="UHasselt" class="orgK1"/></a>
			<a href="http://www.vives.be" target="_blank">
			  <img src="images/orgs/VIVES-footer.png" alt="Vives" class="orgK1"/></a>
			<a href="http://www.ugent.be" target="_blank">
			  <img src="images/orgs/ugent-footer.jpg" alt="UGent" class="orgK1"/></a>
			<a href="https://fbo.hogent.be/opleidingen/toegepaste-informatica/" target="_blank">
			  <img src="images/orgs/HG-footer.png" alt="HoGent" class="orgK1"/></a>
			<a href="http://www.kdg.be" target="_blank">
			  <img src="images/orgs/KdG-footer.jpg" alt="KdG" class="orgK1"/></a>
			<a href="http://www.pxl.be" target="_blank">
			  <img src="images/orgs/pxl_it-footer.png" alt="PXL IT" class="orgK1"/></a>
			<a href="http://www.vub.be" target="_blank">
			  <img src="images/orgs/VUB-footer.jpg" alt="VUB" class="orgK1"/></a>
			<a href="http://www.ehb.be" target="_blank">
			  <img src="images/orgs/EhB-footer.jpg" alt="EhB" class="orgK1  "/></a>
		</div>  
    </div><!--/.organisatie en sponsors-->

	<!-- Footers - organisation + sponsors
    ================================================== -->
    <footer class="footer-left">
		<div class="container" style="background-color: green;width:100px;">
			<!-- tweede carrousel -->
			<div id="myCarousel-footer-left" class="carousel slide carousel-footer hidden-xs" data-ride="carousel" style="width:175px">
				<!-- Indicators -->
				<div class="carousel-inner carousel-footer" role="listbox">
					<div class="item active carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.kuleuven.be" target="_blank"><img src="images/orgs/KULEUVEN-footer.png" alt="KU Leuven"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.ucll.be" target="_blank"><img src="images/orgs/UCLL_LOGO_RGB_POSI_2016_footer.png" alt="UCLL"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.uhasselt.be" target="_blank"><img src="images/orgs/UHASSELT-footer.jpg" alt="UHasselt"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.vives.be" target="_blank"><img src="images/orgs/VIVES-footer.png" alt="Vives"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.ugent.be" target="_blank"><img src="images/orgs/ugent-footer.jpg" alt="UGent"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="https://fbo.hogent.be/opleidingen/toegepaste-informatica/" target="_blank"><img src="images/orgs/HG-footer.png" alt="HoGent"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.kdg.be" target="_blank"><img src="images/orgs/KdG-footer.jpg" alt="KdG"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.pxl.be" target="_blank"><img src="images/orgs/pxl_it-footer.png" alt="PXL IT"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.vub.be" target="_blank"><img src="images/orgs/VUB-footer.jpg" alt="VUB"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.ehb.be" target="_blank"><img src="images/orgs/EhB-footer.jpg" alt="EhB"/></a>
					</div></div></div>
				</div>
			</div>
		</div>
    </footer>

    <footer class="footer-right">
		<div class="container">
			<!-- derde carrousel -->
			<div id="myCarousel-footer-right" class="carousel slide carousel-footer" data-ride="carousel" data-interval="2222" style="width:175px">
				<!-- Indicators -->
				<div class="carousel-inner carousel-footer" role="listbox">
					<div class="item active carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="https://www.sioux.eu/" target="_blank"><img src="images/sponsors/LogoSioux.jpg" alt="Sioux" width="150px"/></a>
					</div></div></div>
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.ibm.com/be-en/" target="_blank"><img src="images/sponsors/LogoIBM.png" alt="IBM" width="150px"/></a>
					</div></div></div>   
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.cronos.be/" target="_blank"><img src="images/sponsors/LogoCronos.png" alt="Cronos" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="https://unleashed.be/" target="_blank"><img src="images/sponsors/LogoUnleashed.png" alt="Unleashed" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="https://www.accenture.com/be-en/" target="_blank"><img src="images/sponsors/LogoAccenture.png" alt="Accenture" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.delaware.be/nl-be/" target="_blank"><img src="images/sponsors/logoDLW.png" alt="Delaware" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.spikes.be/" target="_blank"><img src="images/sponsors/LogoSpikes.png" alt="Spikes" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.tvh.com/benl/nl" target="_blank"><img src="images/sponsors/logoTVH.png" alt="TVH" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.gfi.be/" target="_blank"><img src="images/sponsors/logoGFI.jpeg" alt="GFI" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.easi.net/nl" target="_blank"><img src="images/sponsors/LogoEasi.png" alt="EASI" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.realdolmen.com/nl" target="_blank"><img src="images/sponsors/logo_realdolmen.png" alt="RealDolmen" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.aca-it.be/" target="_blank"><img src="images/sponsors/logoACAITsolutions.png" alt="ACA IT Solutions" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="https://www.vscentrum.be/" target="_blank"><img src="images/sponsors/logoVSC.png" alt="VSC" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://jobs.amplidata.be/" target="_blank"><img src="images/sponsors/logoAmplidata.png" alt="Amplidata" width="150px"/></a>
					</div></div></div>  
					<div class="item carousel-footer" style="background-color:white"><div class="container carousel-footer"><div class="carousel-caption carousel-footer">
						<a href="http://www.genohm.com/" target="_blank"><img src="images/sponsors/logoGenohm.png" alt="Ghenohm" width="150px"/></a>	
					</div></div></div>  					
				</div>
			</div>
		</div>
	</footer>  
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="offcanvas.js"></script>
	
	</body>
</html>
