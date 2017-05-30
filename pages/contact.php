<!DOCTYPE html>
<html>

  <head>
    <title>Informacije o Mokranjatzz365Bet-u</title>
  </head>

  <?php
      $currentPage = 'contact';
      include_once('../includes/layout.php');
      include_once('../includes/navbar.php');
  ?>

   <body style = "font-family: 'PT Sans', sans-serif;">

     <div class="container" style="margin-top: 6em; margin-bottom: 6em;">

       <h1 style="text-align: center">Kako nas kontaktirati</h1>
       <br>
       <p>Mokranjatzz365Bet je nastao kao institucija, pod senkom mnogobrojne konkurencije. Nama su klijenti, partneri, a i sami
       kladioničari kao pokazatelj poverenja podjednako važni, kako za opstanak, tako i za totalnu dominaciju.<br>
       Napraviti revoluciju u klađenju na prostoru Srbije nije jednostavan posao, ali je uz volju i veru svih nas, a i Vas, moguć.<br>
       Na raspolaganju smo Vam 24 sata dnevno, 7 dana u nedelji (osim 1. januara, 7. januara, i na dan Vaskrsa), jer smatramo da je
       Mokranjatzz365Bet svačija odgovornost.<br>
       Hvala Vam na poverenju!</p>
       <br><hr><br>

      <div class="row">
     		<div class="col-md-offset-1 col-md-4">
         			<h3 style="text-align:center;">Imate nedoumice, pitanja, sugestije? Javite nam se preko forme ispod!</h3>
         			<hr/><br/>

           		<div class="well well-lg">

           			<form name="kontaktForm">
           				<div class="form-group">
           					<label for="exampleInputEmail1">Va&scaron;a e-mail adresa</label>
           					<input type="email" class="form-control" id="email" placeholder="Email" required>
           				</div>
           				<div class="form-group">
           					<label for="exampleInputText">Va&scaron;e pitanje</label>
           					<br/>
           					<textarea class="form-control" rows="5" id="msgText" placeholder="Tekst pitanja" required></textarea>
           				</div>
           				  <button type="submit" class="btn btn-primary btn-block">Po&scaron;alji</button>
           			</form>

           		</div>
     		</div>

     		<div class="col-md-offset-1 col-md-4">

     			<h3 style="text-align:center;">Na&scaron;a lokacija:</h3>
     			<hr/><br/>
     			<div id="map" style="width: 400px; height: 400px; margin:0 auto;text-align:center"></div>
       				<script>
       				  function initMap() {
       					var uluru = {lat: 44.7866, lng: 20.4489};
       					var map = new google.maps.Map(document.getElementById('map'), {
       					  zoom: 12,
       					  center: uluru
       					});
       					var marker = new google.maps.Marker({
       					  position: uluru,
       					  map: map
       					});
       				  }
       				</script>
       				<script async defer
       				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI5-gt7i0uqnu7xoHzeOSa_fJjx-oBEWk&callback=initMap">
       				</script>
     				<br/>

       			<div style="text-align:center;">
       			<p>Broj telefona: 011/555-333</p>
       			<p>Adresa: U&zcaron;i&ccaron;ka 10, 11000, Beograd</p>
       			</div>
          </div>
        </div>
      </div>
     <?php include_once('../includes/footer.php'); ?>
  </body>
</html>
