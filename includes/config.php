<?php 
// In dit bestand vind je alle instellingen, zoals databasegegevens.

// Voor de veiligheid zou dit bestand boven de webroot geplaatst moeten worden. 

// Definieer de status van het project
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// databasegegevens
//define('DB_HOST', '127.0.0.1');
define('DB_HOST','databasehost');
define('DB_NAME','databasenaam');
define('DB_USERNAME','gebruikersnaam');
define('DB_PASSWORD','paswoord');

define('NR_ITEMS_PAGE', 5);//for pagination
define('NR_ITEMS_PAGE2', 20);//for pagination2 tour
define('NR_ITEMS_PAGE3', 3);//for pagination3 music


?>
