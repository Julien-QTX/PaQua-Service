<?php
include 'Includes/header.php';

// Inclure manuellement les fichiers nécessaires de PHPMailer
require 'lib/PHPMailer/PHPMailer.php';
require 'lib/PHPMailer/SMTP.php';
require 'lib/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die('Please fill in all fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address.');
    }

    $mail = new PHPMailer(true);
    try {
        // Set up SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'julienquatravaux01@gmail.com'; // Replace with your Gmail address
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Destinataire et expéditeur
        $mail->setFrom($email, $name);
        $mail->addAddress('julienquatravaux01@gmail.com', 'Destinataire');
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->isHTML(false);

        // Send email
        $mail->send();
        echo 'Email envoyé avec succès.';
    } catch (\Exception $e) {
        echo "Erreur lors de l'envoi : ", $e->getMessage();
    }
}
?>


<!-- Template Stylesheet -->
<link href="../css/style.css" rel="stylesheet" />
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<title>Page de Contact</title>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Me Contacter</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Acceuil</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Besoin d'aide ?</h6>
                <h1 class="mb-4">Prenez rendez-vous</h1>
                <iframe title="Maps"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86016.85963256568!2d-2.0547845166561616!3d47.645044805969434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f765e976692b3%3A0x40d37521e0df380!2s44460%20Avessac!5e0!3m2!1sfr!2sfr!4v1732182132616!5m2!1sfr!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light p-5 h-100 d-flex align-items-center">

                    <?php if (!empty($message)) { ?>
                        <div class="message"><?php echo $message; ?></div>
                    <?php } ?>
                    <form action="contact.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Votre Nom" required>
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Votre Email" required>
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Sujet" required>
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Laissez un message" id="message" style="height: 150px"
                                        required></textarea>
                                    <label for="message">Votre Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php

include './Includes/footer.php';

?>