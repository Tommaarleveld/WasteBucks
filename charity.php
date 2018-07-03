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
  <?php include 'includes/header.php';?>

  <!-- Page content -->
  <main class="mdl-layout__content">
    <div class="page-content first-card">
    	<div class="demo-card-square mdl-card mdl-shadow--2dp card-padding">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <p class="center-text">Deze maand staat het <span class="primary-color">Wereld Natuur Fonds centraal</span>. Voor ieder gerecycled item ontvangen ze <span class="primary-color">€0,10!</span></p>
          </div>
          <div id="paddingLogo" class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <img id="wwfLogo" src="images/WWFLogo.png">
          </div>
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <p class="center-text mt-16">Zet je samen met andere Nederlanders in voor dit goede doel.</p>
          </div>
        </div>
    	</div>
    </div>

    <div class="page-content second-card">
      <div class="demo-card-square mdl-card mdl-shadow--2dp card-padding">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"><span id="total-title" class="center-text">Totaal bedrag</span>
          </div>
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <p id="total-ammount" class="center-text">€ 16.200,00</p>
          </div>
        </div>
      </div>
    </div>

  </main>
</div>
<script src="javascript/material.min.js"></script>
</body>
</html>