<?php ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WasteBucks</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
      <span class="mdl-layout-title">WasteShop</span>
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
          <img src="images/Wasteboard.png">
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
            <img class="wb-price" src="images/WasteBucksLogo.png">
            <span class="price">280</span>
          </div>
          <div id="switch-item" class="mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
           AANBIEDING!
          </div>
        </div>
      </div>
    </div>

    <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <img id="nskaart" src="images/NSKaart.png">
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <img class="wb-price" src="images/WasteBucksLogo.png">
            <span class="price">280</span>
          </div>
        </div>
      </div>
    </div>
  

    <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <img id="jordan" src="images/Jordan.png">
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <img class="wb-price" src="images/WasteBucksLogo.png">
            <span class="price">280</span>
          </div>
        </div>
      </div>
    </div>

    <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <img id="panda" src="images/Panda.png">
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <img class="wb-price" src="images/WasteBucksLogo.png">
            <span class="price">280</span>
          </div>
        </div>
      </div>
    </div>

    <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <img id="perfume" src="images/Perfume.png">
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <img class="wb-price" src="images/WasteBucksLogo.png">
            <span class="price">280</span>
          </div>
        </div>
      </div>
    </div>

<!--     <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <img src="images/Wasteboard.png">
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <img class="wb-price" src="images/WasteBucksLogo.png">
            <span class="price">280</span>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="full-width-card mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <img src="images/Wasteboard.png">
        <div class="mdl-grid mdl-card__actions mdl-card--border">
          <div class="center-cell mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
            <img class="wb-price" src="images/WasteBucksLogo.png">
            <span class="price">280</span>
          </div>
        </div>
      </div>
    </div> -->

  </div>
  </main>

</div>
<script src="javascript/material.min.js"></script>
</body>
</html>