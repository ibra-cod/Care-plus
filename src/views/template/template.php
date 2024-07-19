<?php

use App\App\App;
$app = new App ();
 $app->requireIt('includes/header')
  ?>

<?php echo $content ?>


<?php 
$app->requireIt('includes/footer')
?>
