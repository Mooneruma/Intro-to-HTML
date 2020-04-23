
<!doctype html>
<html>

	<head>
	<meta charset="utf-8">
		<title>home</title>
		<meta name = "Home page of zanzibars" content = "Zanzibars home page where
		you can learn a little about our cafe.">
	</head>
	
	<style>
	
	*{	
		margin: auto;
		padding: 0;
	}
	
	header{
		padding-top: 1em;
		background-color: black;
		color: white;
		font-weight: bold;
		font-family: cursive;
	}
	
	body{
		background-image: url("images/seananners-woodcut.png");
		background-repeat: repeat;
		text-align: center;
	}

	#sidebar{
		border-style: solid;
		border-color: brown;
		text-align: center;
		background-color: white;
		float: left;
		width: 250px;
		height: 250px

	}
	
		#sidebarOpen{
		text-align: left;
		float: left;
		width: 200px;
	}
	
	main{
		background-color: #C2AD75;
	}

	#main{
		border-style: solid;
		border-color: black;
		margin: 0.5em;
		text-align: center;
		width: 70%;
		float: right;
		padding-top: 2em;
		background-color: #C2AD75;

	}
	
	#headText{
		text-align: center;
		color: green;
	}
	
	#wrapper{
		margin: auto;
		background-color:  #ffffe0;
		width: 1000px;
		padding-bottom: 1200px;
	}
	
	footer{
		width: 1000px;
		background-color: black;
		color: white;
		padding-top: 25px;
		text-align: left;
		text-indent: 50px;
		padding-bottom: 10px;
		
	}
	
	#clearfloat{
		clear:both;	
	}
	
	Big{
		font-size: 2em;
	}
	
	#sign{
		float: right;
		background-color: black;
	}
	
	#labelR{
		float: left;
		background-color: black;
	}
	
	nav{
		width: 1000px;
		word-spacing: 30px;
	}
	
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	}

	li {
    float: left;
	}

	li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	}


	li a:hover {
    background-color: #111;
	}

	.active {
    background-color: #4CAF50;
	}
	
	</style>
	
<div id = "wrapper">
	<body>
	
	<header>
		<h1>Zanzibars</h1>	
		<a name="#top">&nbsp;</a>

	</header>

	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="Menu.html">Menu</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="Music.html">Live_Music</a></li>
			<li><a href="about.html">Location</a></li>
		</ul>
		<br>
	</nav>
	
	<content id = "sidebar">
		<img src="images/coffee_logo.jpg" alt="Coffee Logo" style="width:250px;height:250px;">
	</content>
		
	<content id = "main">

	<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser. </p>";

	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

	$toEmail = "zvzz@hotmail.com";		
 	$subject = "WDV101 Email Example";	
	$fromEmail = "moonsurv@kmoonpage.com";	




	$emailBody = "Form Data\n\n ";			
	foreach($_POST as $key => $value)									
	{
		$emailBody.= $key."=".$value."\n";	
	} 
	
	$headers = "From: $from" . "\r\n";			
 	if (mail($to,$subject,$emailBody,$headers)) 	
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}

?>
		<a href="#top">Back to top</a>
	</content>
		
	
	<content id = "sidebarOpen">
		
		<b>
		<address>
			Zanzibars Coffee House<br>
			604 24th Street<br>
			St. Paul, Minnesota<br>
			702-971-1154<br>
			<a href ="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fkmoonpage.com%2Fhomework%2FProject%2Findex.html&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">Validator Link</a>
		</address>
		</b>
		
		<img src="images/Minneapolis.jpg" alt="Minneapolis" style="width:250px;height:750px;">
	</content>
		
	<div class = "clearfloat"></div>	
	
	</body>
	
</div>

	<footer>
		
		<content id = "sign">
			<b>Designed and Coded By Kyle Moon</b><br>
			<b>Thank you for viewing!</b>
		</content>
		
		
		<content id = "labelR">
		Zazibars Coffee house<br>
		Designed for edjucational purposes
		</content>
		<div class = "clearfloat"></div>	
	<br>
	<br>
	</footer>

</html>