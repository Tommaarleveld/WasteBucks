<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
?>

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
      <span class="mdl-layout-title">Dashboard</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
    </div>
  </header>
  <?php include 'includes/header.php';?>

  <!-- Page content -->
  <main class="mdl-layout__content">
    <div class="mdl-grid cyan-bg-element">
    <?php if (isset($_SESSION['success'])) : 
            echo $_SESSION['success']; 
            unset($_SESSION['success']); endif ?>
    <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"><span class="item-title center-text">Balance</span></div>
    <div class="mdl-cell mdl-cell--2-col mdl-cell--1-col-phone mdl-cell--1-offset-phone"><img src="images/WasteBucksLogo.png"></div>
    <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-phone"><p id="wb-ammount">1200</p></div>
    </div>
    <div class="mdl-grid no-bg-element">
      <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"><span class="item-title center-text">Statistics</span></div>
      <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"><p class="graph-title center-text">Waste count: <span class="blue-big" id="wc-number">322</span> items</p></div>
      <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">
        <canvas id="myChart"></canvas>
      </div>
      <div class="mdl-cell mdl-cell--2-col mdl-cell--3-col-phone">
        <ol id="statList">
          <li>WasteBucks verzameld</li>
          <li>Donaties aan goede doelen</li>
          <li>Vuilbelasting voordeel</li>
        </ol>
      </div>
      <div class="mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
        <ul class="nobullet">
          <li><div class="box wb-color" width="15px" height="20px"></div></li>
          <li><div class="box cd-color" width="15px" height="20px"></div></li>
          <li><div class="box tx-color" width="15px" height="20px"></div></li>
        </ul>
      </div>
      </div>
  </main>
</div>

<script src="javascript/material.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="javascript/chart.js"></script>
</body>
</html>