<?php
header('Content-Type: text/html; charset=utf-8');
define("_ROOT", dirname(__FILE__).DIRECTORY_SEPARATOR);


$template_get = (isset($_GET['template'])? $_GET['template']:'index');


if(is_file(_ROOT."templates".DIRECTORY_SEPARATOR.$template_get.".php")) {
    $template = _ROOT."templates".DIRECTORY_SEPARATOR.$template_get.".php";
} else {
    $template = _ROOT."templates".DIRECTORY_SEPARATOR."index.php";
}
