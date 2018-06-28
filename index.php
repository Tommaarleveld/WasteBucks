<?php ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WasteBucks</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-red.min.css" />
<link rel="stylesheet" href="build/stylesheets/index.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
</head>

<body>
<!-- Header -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">WasteBucks</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">WasteBucks</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Over WasteBucks</a>
    </nav>
  </div>

  <!-- Page content -->
  <main class="mdl-layout__content">
    <div class="page-content center-card">
	<div class="demo-card-square mdl-card mdl-shadow--2dp card-padding">
	<form action="#">
		<h4 class="center-text">Login</h4>
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="text">
		    <label class="mdl-textfield__label" for="sample1">Gebruikersnaam</label>
		  </div>
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" type="password">
		    <label class="mdl-textfield__label" for="sample1">Wachtwoord</label>
		  </div>
	</form>
	<a href="dashboard.php"<button class="btn-width mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
	  Inloggen
	</button></a>
	<a href="register.php"><p>Nog geen account? Registreer hier!</p></a>	
	</div>
    </div>
  </main>
</div>
<script src="javascript/material.min.js"></script>
</body>
</html>