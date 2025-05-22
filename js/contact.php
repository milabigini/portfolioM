<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal het bericht op van het formulier
    $messageContent = htmlspecialchars($_POST['message']);

    // Ontvanger van de e-mail
    $to = "mabbigini@gmail.com"; // Jouw e-mailadres
    $subject = "Nieuw bericht van de website";

    // E-mail headers
    $headers = "From: no-reply@yourdomain.com\r\n"; // Vervang met jouw domein
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Verzend de e-mail
    if (mail($to, $subject, $messageContent, $headers)) {
        echo "Bericht is verzonden!";
    } else {
        echo "Bericht kon niet worden verzonden.";
    }
}
?>
