<?php include('server.php') ?>

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
	<form method="post" action="register.php">
    <?php include('errors.php'); ?>
		<h4 class="center-text">Registreren</h4>
		  <div class="mdl-textfield mdl-js-textfield">
		    <input name="username" class="mdl-textfield__input" type="text" value="<?php echo $username; ?>">
		    <label class="mdl-textfield__label" for="sample1">Voor- en achternaam</label>
		  </div>
		  <div class="mdl-textfield mdl-js-textfield">
		    <input name="email" class="mdl-textfield__input" type="Email" value="<?php echo $email; ?>">
		    <label class="mdl-textfield__label" for="sample1">Email</label>
		  </div>
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="password" name="password_1">
        <label class="mdl-textfield__label" for="sample1">Vul een wachtwoord in</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="password" name="password_2">
        <label class="mdl-textfield__label" for="sample1">Vul uw wachtwoord opnieuw in</label>
      </div>
      <button type="submit" name="reg_user" class="btn-width mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
	     Registreren
	    </button>
  </form>
	<a href="index.php"><p>Heeft u al een account? Log hier in!</p></a>	
	</div>
    </div>
  </main>
</div>
<script src="javascript/material.min.js"></script>
</body>
</html>