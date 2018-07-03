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
  <div class="page-content center-card">
  <div class="demo-card-square mdl-card mdl-shadow--2dp card-padding">
    <h4 class="center-text">Beloning opeisen</h4>
  <a href="upgrade.php"><button class="height-button mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    Verzamel <img id="button-logo" src="images/WasteBucksWhite.png">
  </button></a>
  <a href="donation.php"><button class="height-button mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    Doneer aan goed doel
  </button></a>
  <a href="taxlevel.php"><button class="height-button mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    Voordeel op vuilbelasting
  </button></a>
  <div id="logo-reward" class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--1-col-phone"><img src="images/WasteBucksLogo.png"></div>
  </div>
  </div>
  </div>
  </main>

</div>
<script src="javascript/material.min.js"></script>
</body>
</html>