<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "vojta.just@seznam.cz";
    $subject = "Nová zpráva z kontaktního formuláře";
    $body = "Jméno: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Zpráva:\n$message\n";

    $headers = "From: Kontaktní formulář\r\n";
    $headers .= "Reply-To: \r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Zpráva byla úspěšně odeslána.";
    } else {
        echo "Nastala chyba při odesílání zprávy.";
    }
} else {
    echo "Neplatná žádost.";
}
?>
