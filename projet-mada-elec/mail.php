<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('fontainetsin@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr'. "\r\n" . $_POST['civilite'] .' '. $_POST['nom'] . ' ' . $_POST['prenom'] . "\r\n" . $_POST['email']);
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>