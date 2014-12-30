<?php 
// Facebook Page Events 2 ical Script
?>

<html>
	<head>
		<title>Facebook Page Events to iCal</title>
	</head>
	<body>
		<form method='get' action='fb2ical.php'>
			FB Page (z.B. 
			<span style="color: #ccc">https://www.facebook.com/</span><span style="color: f00;">AStA.Uni.Luebeck</span><span style="color: #ccc">/</span>) oder ID: 
			<input type="text" name="fbpage" />
			<button type='submit'>Flowerpower Go!</button>
		</form> 

		Quicklinks:
		<ul>
			<li>AStA Fachhochschule: <a href="https://www.facebook.com/AStAFHL" target="_blank">FB</a> | <a href="fb2ical.php?fbpage=AStAFHL">iCal</a> (derzeit keine Events)</li>
			<li>AStA Uni: <a href="https://www.facebook.com/AStA.Uni.Luebeck" target="_blank">FB</a> | <a href="fb2ical.php?fbpage=AStA.Uni.Luebeck">iCal</a></li>
			<li>Blauer Engel: <a href="https://www.facebook.com/Clemensstrasse8/" target="_blank">FB</a> | <a href="fb2ical.php?fbpage=Clemensstrasse8">iCal</a> (aus Gründen stimmt die Uhrzeit nicht)</li>
			<li>Fachschaft Medizin: <a href="https://www.facebook.com/pages/Fachschaft-Medizin-L%C3%BCbeck/213705418696341" target="_blank">FB</a> | <a href="fb2ical.php?fbpage=213705418696341">iCal</a> (Funktioniert nur mit ID, derzeit keine Events)</li>
			<li>FS MLS|CS: <a href="https://www.facebook.com/pages/FS-MLSCS/276026735775211" target="_blank">FB</a> | <a href="fb2ical.php?fbpage=276026735775211">iCal</a> (Funktioniert nur mit ID, derzeit keine Events)</li>
			<li>Operation Popcornkino: <a href="https://www.facebook.com/popcornkino" target="_blank">FB</a> | <a href="fb2ical.php?fbpage=popcornkino">iCal</a></li>
		</ul>

		Problemfälle:
		<ul>
			<li>P++: <a href="https://www.facebook.com/partyplusplus" target="_blank">FB</a> ist aus Gründen nicht identifizierbar (siehe: <a href="http://graph.facebook.com/partyplusplus" target="_blank">FB Graph API</a>)</li>
		</ul>

		Kudos:
		<ul>
			<li><a href="https://gist.github.com/997980" target="_blank">fb2ical.php</li>
			<li><a href="http://kigkonsult.se/iCalcreator/" target="_blank">iCalcreator</a></li>
			<li><a href="https://github.com/facebook/facebook-php-sdk" target="_blank">facebook-php-sdk</a></li>
			<li><a href="https://twitter.com/TVLuke/status/203105276835020802" target="_blank">Flowerpower Go</a></li>
		</ul>
	</body>