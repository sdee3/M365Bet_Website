<!DOCTYPE html>
<html>

  <head>
    <title>Fudbal - Samo na Mokranjatzz365Bet!</title>
  </head>

  <?php
      $currentPage = 'fudbal';
      include_once('../includes/layout.php');
      include_once('../includes/navbar.php');
      include_once('../db/connectDb.php');
      include_once('../includes/footer.php');
  ?>

   <body style = "font-family: 'PT Sans', sans-serif;">

     <div class ="container container-fluid" style="margin-top:6em; margin-bottom:6em">

   <form class="form-inline" style="text-align: center;">
    <div class="form-group">
      <label for="sifra">Šifra utakmice</label>
      <input type="text" class="form-control" id="sifra" placeholder="1001, 1005,...">
    </div>
    <div class="form-group">
      <label for="tip">Tip</label>
      <input type="text" class="form-control" id="tip" placeholder="1, X, 2...">
    </div>
    <div class="form-group">
      <label for="iznos">Iznos</label>
      <input type="text" class="form-control" id="iznos" placeholder="RSD">
    </div>
    <button type="submit" class="btn btn-default">Nažmnji!</button>
  </form>

  <br/><hr><br>

       <table class="table table-hover">

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

  </body>
</html>
