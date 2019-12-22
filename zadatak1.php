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

        $poc=1;
        $kraj=25;
        $i=1;

        for($poc;$i<$kraj;$i++){
            echo($i) . '<br />';
        }
        ?>
        
        <hr />
        
        <?php

        $sum=0;
        for($i=$poc;$i<$kraj;$i++){
            $sum += $i;
        }

        echo "Zbroj je" . ' ' . $sum;

?>

<hr />




          </div>
        </div>
      </div>
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
