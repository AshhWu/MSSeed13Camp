<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['ID']);
unset($_SESSION['authority']);
session_unset();
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=../../index.php>';
?>