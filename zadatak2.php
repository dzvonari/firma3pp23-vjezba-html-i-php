<?php
$boja = $_GET['boja'];
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
  <?php include_once 'head.php';
   ?>
  </head>
<body style="background-color: <?php echo $boja ?>">

    <div class="grid-container">
      <?php 
      // proučiti include, include_once i require
      require_once 'izbornik.php';
      ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell" >
       Zadataka2
       
        </div>
      </div>
    </div>



<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
