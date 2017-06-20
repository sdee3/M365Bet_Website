<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Greska 404 - Nepostojeca Strana</title>

    <style media="screen">
    video#bgvid {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    }
    </style>

  </head>

  <?php
      $currentPage = '';
      include_once('../includes/layout.php');
  ?>

   <body style = "font-family: 'PT Sans', sans-serif;">

     <video playsinline autoplay muted loop poster="polina.jpg" id="bgvid">
      <source src="../img/butterfly.webm" type="video/webm">
      <source src="../img/butterfly.mp4" type="video/mp4">
    </video>

    <div class="container">
      <div class="row">
        <h1>Ups!</h1>
        <div class="col-md-4 col-md-offset-2">
          <strong>
          <h5>Došli ste na stranicu ili direktorijum koji trenutno ne postoji na Mokranjatzz Web portalu.</p>
          <h5>U međuvremenu, gledajte kako ovaj leptir beži odavde...zar ne biste i Vi to isto hteli?</p>
          </strong>
        </div>
        <br>
        <div class="col-md-4 col-md-offset-2" style="margin-top: 10em">
          <a href="../index.php"><button class="btn btn-info btn-block">Početna</button></a>
        </div>
      </div>
    </div>

   </body>
</html>
