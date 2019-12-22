<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>

      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 


          <form action="" method="post">
          <p>Prvi broj: <input type="number" name="prvi" /></p>
          <p>Drugi broj: <input type="number" name="drugi" /></p>
          <p><input type="submit" /></p>
          </form>

        
          <?php



$k=$_REQUEST['prvi'];
$kk=$_REQUEST['drugi'];

echo '<table id="tablica">';
for($i=0;$i<$k;$i++){ 
echo '<tr>';
for($j=0;$j<$kk;$j++){
echo '<td>' . ($i+1) + ($j+1) .'</td>';
}
echo '</tr>';
}
echo '</table>';

?>



          </div>
        </div>
      </div>
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
