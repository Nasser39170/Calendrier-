<?php include('function.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Advent Calendar</title>

	  	<!-- Mobile-friendly viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	   	<!-- Style sheet link -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/1.5.2/css/ionicons.min.css">
		<link rel="stylesheet" href="style.css" media="all">

	</head>

	<body>
		<div class="demo-content cf">
			<article>
			<!-- ------------------ BARRE DE DEDICACE --------------------------- -->
			<marquee direction="left" behavior="scroll" scrollamount="7" style="height:65px;position:absolute;margin-top: -52px;width:400px;background-color:#ffffff;font-family:Cursive;font-size:16pt; white-space: 200px;color:#000000;font-weight:bold;border-style:solid;border-color:#000000; " ><p class="indent"> <?php afficher(); ?> </p></marquee>
			<!-- ----------------------- IMAGE BARRE DE DEDICACE ------------------- -->
			<img class="no" src="images/no.png" alt="">	
			<img class="noell" src="images/noell.png" alt="">
			<!-- ------------------------- FOND CALENDRIER -------------------------- -->
			<img src="images/background.gif" alt="Advent Calendar" width="400" height="533" id="adventCal">
            <!-- ----------------------------- CALENDRIER --------------------------- -->
				<ul id="adventDoors"></ul>
			</article>
		</div>

		<script src="scripts/messages.js"></script>
		<script src="scripts/calendar.js"></script>
		
	</body>
</html>
