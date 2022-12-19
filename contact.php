
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

  <?php 
  $name = $_POST["username"];
  $delete = $_POST["delete"];
  $message = $_POST["message"];

  echo '<h1 class="text-center p-3 text-info">Hai inserito</h1>';
  echo '<div class="text-center">';
  echo $name . "<br>" . $delete . "<br>" . $message . "<br>";
  echo "il paragrafo ha una lunghezza di" . strlen($message);
  echo "<br>";
  echo $newparagraph = str_replace($delete, "xxx", $message);
  echo "<br>";
  echo "il nuovo paragrafo ha lunghezza ";
  echo strlen($newparagraph);
  echo '</div>';

  