<!DOCTYPE html>
<html>

  <head>
    <title>Fudbal - Samo na Mokranjatzz365Bet!</title>
  </head>

  <?php
      $currentPage = 'fudbal';
      include_once('../includes/layout.php');
      include_once('../includes/navbar.php');
  ?>

<body style = "font-family: 'PT Sans', sans-serif;">

  <div class ="container container-fluid" style="margin-top:6em; margin-bottom:6em">

    <h1 style="text-align: center">Fudbal - Najsvežije kvote na Mokranjatzz Bet sistemu!<br><small>Poslednji put ažurirano: 8.6.2016</small></h1>
    <br>

    <p>Da li će taj Brentford probiti sebi plasman u viši rang takmičenja? Da li će FK Rubibreza doći do pobede u gostima iako im forma van
    kuće nije na strani još od akvizicije čuvenih investitora iz Pecke?<br>Na Vama je da pogodite!</p>
    <p>Ispod ovog bloka teksta nalazi se kompletna lista svih utakmica koje Mokranjatzz365Bet ima u ekskluzivnoj ponudi za Vas!
    Ukoliko ne vidite ništa, reč je o ili neuspešnoj konekciji sa našom centralnom bazom, ili trenutnom ažuriranju liste.</p>
    <br><hr><br>

    <?php include_once('../db/connectDb.php'); ?>

     <form id="form" class="form-inline" style="text-align: center;">
      <div class="form-group">
        <label for="sifra">Šifra utakmice: </label>
        <input type="text" class="form-control" id="sifra" placeholder="1001, 1005,...">
      </div>
      <div class="form-group">
        <label for="tip">Tip: </label>
        <input type="text" class="form-control" id="tip" placeholder="1, X, 2...">
      </div>
      <div class="form-group">
        <label for="iznos">Iznos: </label>
        <input type="text" class="form-control" id="iznos" placeholder="RSD">
      </div>
      <button id="submitbtn" type="button" class="btn btn-default" data-toggle="popover" data-placement="top" data-trigger="focus"
      title="Ups!" data-content="Kao što piše, ova funkcija trenutno nije u mogućnosti.">Nažmnji (ne radi)!</button>
     </form>

     <script type="text/javascript">
      // Select all elements with data-toggle="popover" in the document
      $('[data-toggle="popover"]').popover();
      // Select a specified element
      $('#myPopover').popover();
     </script>

  <br/><hr><br>

       <table class="table table-responsive table-hover">
         <tr>
          <th>Liga</th>
          <th>Šifra</th>
          <th>Utakmica</th>
          <th>1</th>
          <th>X</th>
          <th>2</th>
          <th>Specijal</th>
        </tr>
           <?php
              $sql = "SELECT liga, sifra, utakmica, ki1, kix, ki2, specijal FROM listastara";
              $rezultat = mysqli_query($conn, $sql);

              if(mysqli_num_rows($rezultat) > 0){
                  while($row = mysqli_fetch_assoc($rezultat)){
                      echo "<tr>". "<td>" . $row["liga"] . "</td>" . " <td> " . $row["sifra"]. "</td>" . " <td> " . $row["utakmica"]. "</td>" . "<td>"
                      . number_format((float)$row["ki1"], 2, '.', ''). "</td><td>".
                      number_format((float)$row["kix"], 2, '.', ''). "</td><td>".
                      number_format((float)$row["ki2"], 2, '.', ''). "</td><td>".
                      number_format((float)$row["specijal"], 2, '.', ''). "</td></tr>";
                  }
              }
              mysqli_close($conn);
           ?>

     </table>
   </div>

   <?php include_once('../includes/footer.php'); ?>

  </body>
</html>
