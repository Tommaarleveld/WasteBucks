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
<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Header -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Voordeel op vuilbelasting</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
    </div>
  </header>
  <?php include 'includes/header.php';?>

  <!-- Page content -->
  <main class="mdl-layout__content">
    <div class="mdl-grid">
      <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <h5 class="center-text">LEVEL <span class="primary-color">1</span></h5>
          </div>

          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <div id="container"></div>
          </div>
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <p class="mt-16">Bij het bereiken van LEVEL <span class="primary-color">1</span> ontvangt u 2,5% korting op uw afvalstoffenheffing.</p>
          </div>
        </div>
      </div>
      </div>

      <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <h5 class="center-text">LEVEL <span class="primary-color">2</span></h5>
          </div>

          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <div id="container2"></div>
          </div>
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <p class="mt-16 center-text"><span class="bold primary-color">5%</span> Korting</p>
          </div>
        </div>
        </div>
      </div>

      <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <h5 class="center-text">LEVEL <span class="primary-color">3</span></h5>
          </div>

          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <div id="container3"></div>
          </div>
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <p class="mt-16 center-text"><span class="bold primary-color">7,5%</span> Korting</p>
          </div>
        </div>
        </div>
      </div>

    </div>
  </main>
</div>

<script src="javascript/material.min.js"></script>
<script src="javascript/progressbar.min.js"></script>
<script src="javascript/progress.js"></script>
</body>
</html>