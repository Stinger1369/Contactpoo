<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Formulaire de contact</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>

<body>
  <div class="container">
    <h1>Formulaire de contact</h1>
    <form method="post" action="contact.php">
      <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Adresse email :</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label for="subject">Sujet :</label>
        <input type="text" class="form-control" name="subject" required>
      </div>
      <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" name="message" required></textarea>
      </div>
      <div class="form-group">
        <label for="captcha">Captcha :</label>
        <input type="text" class="form-control" name="captcha" required>
      </div>
      <div class="form-group">
        <label for="captcha_image" class="mr-2">Entrez les caractères ci-dessous :</label>
        <div class="d-flex flex-row align-items-center">
          <img src="captcha.php" alt="Captcha" id="captcha_image" class="mr-2">
          <button type="button" class="btn btn-success" id="refresh_captcha">Nouveau Captcha</button>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

  </div>

  <script src="public/js/script.js"></script>

</body>

</html>