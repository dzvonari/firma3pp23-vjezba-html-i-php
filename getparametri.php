
<!doctype html>
<html class="no-js" lang="en">
  <head>
   <?php include_once 'head.php';
   ?>
<body>

    <div class="grid-container">
      <?php 
      require_once 'izbornik.php';
      ?>
      <div class="grid-x grid-padding-x">
        <div class="large-8 cell" >
        <h1>GET parametri</h1>
          <pre>
          print_r($_GET);
          </pre>
        </div>
        <div class="large-4 cell">
        <?php
           //print_r($_GET);
           $ime = $_GET['ime'];
           
           echo gettype($ime),':',$ime, '<br>';

           $godina= $_GET['godina'];
           echo gettype($godina),':',$godina, '<br>';

        ?>
          
        </div>
      </div>
    </div>


<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
