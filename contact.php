
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

  <?php 
  $name = $_POST["username"];
  $delete = $_POST["delete"];
  $message = $_POST["message"];
  ?>

  <h1 class="text-center p-3 text-info">Hai inserito</h1>
  <div class="text-center">

    <?php
  echo $name . "<br>" . $delete . "<br>" . $message . "<br>";
  echo "il paragrafo ha una lunghezza di" . strlen($message);
  ?>

  <br>

  <?php echo $newparagraph = str_replace($delete, "xxx", $message); ?>
  
  <br>

  il nuovo paragrafo ha lunghezza

   <?php echo strlen($newparagraph); ?>

  </div>

  