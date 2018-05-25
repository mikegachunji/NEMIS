<?php
session_start();
session_unset();
session_destroy();
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'MainIndex.php';
header('Refresh: 0.1; URL=' . $redirect);	
?>