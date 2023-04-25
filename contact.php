<?php
session_start();

include 'index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Ajoutez cette condition pour vérifier si les champs sont remplis
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['captcha'])) {
    require_once 'src/Form.php';

    // Vérifier le captcha
    $captcha = $_POST['captcha'];

    if (empty($captcha) || $captcha !== $_SESSION['phrase']) {
      // Afficher une alerte d'erreur avec Sweetalert2.
      echo "<script>
            Swal.fire({
              title: 'Erreur !',
              text: 'Le captcha est invalide. Veuillez réessayer.',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          </script>";
      exit; // Arrêter l'exécution du script.
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $form = new Form($name, $email, $subject, $message);

    try {
      $form->validate();
      $form->sendEmail();

      // Afficher une alerte de succès avec Sweetalert2.
      echo "<script>
            Swal.fire({
              title: 'Succès !',
              text: 'Le message a été envoyé avec succès.',
              icon: 'success',
              confirmButtonText: 'OK'
            });
            setTimeout(function() {
              window.location.href = 'index.php';
            }, 3000);
          </script>";
    } catch (Exception $e) {
      // Afficher une alerte d'erreur avec Sweetalert2.
      echo "<script>
            Swal.fire({
              title: 'Erreur !',
              text: 'L\'email n\'a pas pu être envoyé. Erreur : {$e->getMessage()}',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          </script>";
    }
  }
}
