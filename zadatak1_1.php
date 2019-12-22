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

<?php
$r = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
for ($i=1;$i<1000000;$i++) {
  $n = rand(0,100000);
  if ($n<=23) {
    $r[$n]++;
  }
}
            echo '<pre>';
              print_r($r);
              echo '</pre>';

              echo "Zbroj = " . array_sum($r) . "\n";
              echo '<pre>';
              echo "Najveći broj je " . max($r) . "\n" ;
              echo '</pre>';
              echo '<pre>';
              echo "Najmanji broj je " . min($r) . "\n" ;
              echo '</pre>';
?>
          </div>
        </div>
      </div>
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
