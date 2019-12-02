<?php session_start(); ?>

<!DOCTYPE html>
<html id='content'>
	<head>
		<meta charset="utf-8">
		<title>Cheapo Mail</title>
		<script type="text/javascript" src="login.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="login.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Spectral+SC" rel="stylesheet"> 
	</head>
	
	<body>
		<h1>Cheapo Mail</h1>
		<h3>Connect with your world</h3>
		
		<div class="signin">
			<label for="username"> Username:</label>
			<input id="username" type="text" name="username"/>
			<br><br>
	
			<label for="password">Password:</label>
			<input id="password" type="password" name="password" />
			<br><br>
				
			<div id="errorMessage">
				Message
			</div>s
		</div>
		
		<button id="login">Login</button>
		
	</body>
</html>