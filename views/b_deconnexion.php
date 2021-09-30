<?php
session_start();
unset($_SESSION);
session_destroy();
header('Location: index.php');
require_once('./templates/b_header.php'); 
?>



<?php
require_once('./templates/b_footer.php');

?>
