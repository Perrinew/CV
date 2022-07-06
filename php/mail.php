<?php
    $mail('perrinew62@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], ' ');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
