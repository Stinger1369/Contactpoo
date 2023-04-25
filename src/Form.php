<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Form
{
  public $name;
  public $email;
  public $subject;
  public $message;

  public function __construct($name, $email, $subject, $message)
  {
    $this->name = $name;
    $this->email = $email;
    $this->subject = $subject;
    $this->message = $message;
  }

  public function validate()
  {
    // Vérifiez que le nom est valide (au moins 2 caractères).
    if (empty($this->name) || strlen($this->name) < 2) {
      throw new Exception('Le nom est invalide. Veuillez entrer un nom valide.');
    }

    // Vérifiez que l'adresse email est valide.
    if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception('L\'adresse email est invalide. Veuillez entrer une adresse email valide.');
    }

    // Vérifiez que le sujet est valide (au moins 2 caractères).
    if (empty($this->subject) || strlen($this->subject) < 2) {
      throw new Exception('Le sujet est invalide. Veuillez entrer un sujet valide.');
    }

    // Vérifiez que le message est valide (au moins 10 caractères).
    if (empty($this->message) || strlen($this->message) < 10) {
      throw new Exception('Le message est invalide. Veuillez entrer un message valide.');
    }
  }

  public function sendEmail()
  {
    $mail = new PHPMailer(true);

    try {
      // Configurez les paramètres du serveur SMTP.
      $mail->isSMTP();
      $mail->Host = 'sandbox.smtp.mailtrap.io';
      $mail->SMTPAuth = true;
      $mail->Port = 2525;
      $mail->Username = '9951a662b7c941';
      $mail->Password = '8e7b8ba43ef8e1';

      // Configurez les détails de l'email.
      $mail->setFrom($this->email, $this->name);
      $mail->addAddress('bilelzara@gmail.com', 'Bil');
      $mail->isHTML(true);
      $mail->Subject = $this->subject;
      $mail->Body = $this->message;

      // Envoyer l'email.
      $mail->send();

      // Afficher une alerte de succès avec Sweetalert2.
      echo "<script>
            Swal.fire({
              title: 'Succès !',
              text: 'Le message a été envoyé avec succès.',
              icon: 'success',
              confirmButtonText: 'OK'
            });
          </script>";
    } catch (Exception $e) {
      // Afficher une alerte d'erreur avec Sweetalert2.
      echo "<script>
            Swal.fire({
              title: 'Erreur !',
              text: 'L\'email n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          </script>";
    }
  }
}
