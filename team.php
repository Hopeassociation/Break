<?php

ob_start();
require_once 'app/view/parts/team.view.php';
$content = ob_get_clean();
$css = "public/css/team.css";
require_once 'app/view/common/layout.php';