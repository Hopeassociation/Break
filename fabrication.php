<?php


//Génération de la page
$page_title = 'Fabrication';

ob_start();
require_once 'app/view/parts/fabrication.view.php';
$content = ob_get_clean();
$css = "public/css/fabrication.css";
require_once 'app/view/common/layout_fabrication.php';