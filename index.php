<?php
$today_date = date("Y-m-d");
$start_date = new DateTime("2024-10-17");
$today_date = new DateTime($today_date);

$abs_diff = $today_date->diff($start_date)->format("%a");
$abs_diff = $abs_diff + 1;
?>
<!-- Diya CSS - https://codingartistweb.com/2021/11/diya-css-animation-diwali-special/ -->
<!-- Damodara Arati - https://achyuthan.com/damodaraashtakam-and-harati.html -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Damodar Puja</title>
    <meta name="description" content="The festival of offering lamps to Lord Krishna, lasts the entire month of Damodara, (Kartika, usually during Oct-Nov), which glorifies Krishna's pastime of being bound with ropes by Mother Yasoda. Observing vrata (austerities) in the month of Kartika is glorified in the Puranas.">
	<link rel="icon" type="image/x-icon" href="logo.png">
    <!-- Stylesheet -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  
  <!-- Remember to also copy the code in the CSS area! -->
<div class="snowflakes">
  <!-- add your 'snowflake' images below - you can add more or less if needed -->
  <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
  <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
    <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
    <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
   <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
  <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
    <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
    <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
    <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
  <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
    <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
    <div class="snowflake"><img src="https://media.tenor.com/RXTW_pD1pe0AAAAi/white-white-flower.gif" class="flower-size" /></div>
</div>
</div>  

<div class="container">
  <div class="row">
    <div class="col d-md-block d-lg-block d-none">
		<img class="img-fluid karthik mt-5" src="./karthik/day_<?php echo $abs_diff;?>.png" />
	  	<div class="audio_elm">
			<audio controls autoplay="true" loop="true">
			  <source src="Sri_Damodarashtakam.mp3" type="audio/mpeg" />
			</audio>
		</div>	
    </div>
    <div class="col">
		<div class="damodar_container">
		<video width="500" height="500" autoplay muted loop>
		  <source src="damodar_puja.mp4" type="video/mp4">
		  Your browser does not support the video tag.
		</video>
		<div class="d-md-block d-lg-block d-none">
		<div class="diya_container">
		  <div class="shadow"></div>
		  <div class="diya">
			<div class="line-1"></div>
			<div class="line-2"></div>
			<div class="dots"></div>
		  </div>
		  <div class="inside">
			<div class="light"></div>
			<div class="flame"></div>
		  </div>  
		</div>
		</div>
	   </div>
    </div>
    <div class="col d-md-block d-lg-block d-none">
		<div class="fw-bold">
			<div class="overflow-auto p-5 sloka">
								(1)<br />
				namamisvaram sac-cid-ananda-rupam<br />
				lasat-kundalam gokule bhrajamanam<br />
				yasoda-bhiyolukhalad dhavamanam<br />
				paramrishtam atyantato drutya gopya<br /><br />
				
								(2)<br />
				rudantam muhur netra-yugmam mrijantam<br />
				karambhoja-yugmena satanka-netram<br />
				muhuh svasa-kampa-trirekhanka-kanthasthita-<br />
				graivam damodaram bhakti-baddham<br /><br />
				
								(3)<br />
				itidrik sva-lilabhir ananda-kunde<br />
				sva-ghosham nimajjantam akhyapayantam<br />
				tadiyeshita-jneshu bhaktair jitatvam<br />
				punah prematas tam satavritti vande<br /><br />
				
								(4)<br />
				varam deva moksham na mokshavadhim va<br />
				na canyam vrine 'ham vareshad apiha<br />
				idam te vapur natha gopala-balam<br />
				sada me manasy avirastam kim anyaih<br /><br />

								(5)<br />
				idam te mukhambhojam atyanta-nilair<br />
				vritam kuntalaih snigdha-raktais ca gopya<br />
				muhus cumbitam bimba-raktadharam me<br />
				manasy avirastam alam laksha-labhaih<br /><br />

								(6)<br />
				namo deva damodarananta vishno<br />
				prasida prabho duhkha-jalabdhi-magnam<br />
				kripa-drishti-vrishtyati-dinam batanu<br />
				grihanesha mam ajnam edhy akshi-drisyah<br /><br />		

								(7)<br />
				kuveratmajau baddha-murtyaiva yadvat<br />
				tvaya mocitau bhakti-bhajau kritau ca<br />
				tatha prema-bhaktim svakam me prayaccha<br />
				na mokshe graho me 'sti damodareha<br /><br />		

								(8)<br />
				namas te 'stu damne sphurad-dipti-dhamne<br />
				tvadiyodarayatha visvasya dhamne<br />
				namo radhikayai tvadiya-priyayai<br />
				namo 'nanta-lilaya devaya tubhyam<br /><br />		
			</div>
		</div>
    </div>
  </div>
  <div class="row">
  	<div class="col d-block d-sm-none image_mob_dis">
		<img class="img-fluid karthik mt-5" src="./karthik/day_<?php echo $abs_diff;?>.png" />
	  	<div class="audio_elm">
			<audio controls autoplay="true" loop="true">
			  <source src="Sri_Damodarashtakam.mp3" type="audio/mpeg" />
			</audio>
		</div>	
    </div>
  </div>
</div>
   
   <!-- JAVASCRIPT -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>