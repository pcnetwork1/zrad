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
$number = $_REQUEST['prvi'] ;
while ($number < $_REQUEST['drugi'] )
{
$div_count=0;
for ( $i=1;$i<=$number;$i++)
{
if (($number%$i)==0)
{
$div_count++;
}
}
if ($div_count<3)
{
echo $number." , ";
}
$number=$number+1;
}
?>



          </div>
        </div>
      </div>
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
