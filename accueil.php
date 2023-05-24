<?php

require_once 'database.php';

//Génération de la page
$page_title = 'Accueil';

ob_start();
require_once 'app/view/parts/acceuil.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';