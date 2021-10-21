<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["mail"]);
session_destroy();
header('Location: index.php');
require_once('./templates/b_header.php'); 
?>
<?php
require_once('./templates/b_footer.php');

?>
