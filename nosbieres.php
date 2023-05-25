<?php

require_once 'database.php';

//Génération de la page
$page_title = 'Nos bières';

ob_start();
require_once 'app/view/parts/nosbieres.view.php';
$content = ob_get_clean();
$css = "public/css/nosbieres.css";
require_once 'app/view/common/layout.php';