<?php
session_start();

require ('../private/libs/Smarty.class.php');
require ('../private/model.php');
require ('../private/controler.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

//=======================POSTLISTENERES

if(isset($_POST['submit_add_emp'])) {
    add_emp();
}

//=======================PAGES
    switch ($page) {
        case 'home' : home_action(); break;
        case 'add_emp' : add_emp_action(); break;
        case 'show_emp' : show_emp_action(); break;
    }