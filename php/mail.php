<?php
    $retour = mail('perrinew62@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'from https://porte-folio-perrine-wengel.000webhostapp.com/html/cv_contact.html?');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>