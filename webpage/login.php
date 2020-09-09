<!DOCTYPE html>
<?php include('server.php') ?>

<html>
<head data-gramm="true" data-gramm_editor="true" data-gramm_id="61a2149c-9a57-49e5-d09b-ccf5f524ca84">
<title>Track High Valued Assets Login Page</title>
<link href="mainstyles.css" rel="stylesheet" />

</head>
<body>
<h1 id="title" align="middle"> Track High Valued Assets Login Page </h1>

<div class="user">
<div class="project-card">
<div id="login">
    
<h3>Member Login</h3>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>
</body>
</div>
</div>
</div>
<footer>
<br> </br>
<br> </br>
<br> </br>
<br> </br>
<h1 id="title" align="middle">This project was innovated by The AUMelettes: Kayla Luther, Adam Rodriquez, Riley Taylor, Rebecca Hogue, and David Whyte at innovateAFITC 2019</h1>
</footer>
</html>
