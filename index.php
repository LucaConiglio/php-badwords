<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BadWords</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
  
  <h1 class="text-center p-3 text-info">BadWords</h1>
  <div class="row">
    <div class="col-6 m-auto">
      <form class="form-control" action="contact.php" method="POST">
        <div class="my-4">
          <label for="" class="form-label">Inserisci Nome e Cognome</label>
          <input class="form-control" type="text" name="username">
        </div>
        <div class="my-4">
          <label for="" class="form-label">Inserisci una parola da censurare nella textarea</label>
          <input class="form-control" type="text" name="delete">
        </div>
        <div class="my-4">
          <label for="" class="form-label">Inserisci Testo</label>
          <textarea class="form-control" name="message"></textarea>
        </div>

        <button class="btn btn-dark">INVIA</button>

      </form>
    </div>
  </div>

  


</body>
</html>