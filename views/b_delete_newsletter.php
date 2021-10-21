<?php

$title =  "Suppression d'article";

require_once('../views/templates/b_header.php'); 
require_once('../src/models/NewsletterModel.php'); 





if(isset($_POST['deleteNewsletter'])){
$id = $_POST['idNewsletter'];

$newsletterDelete = new NewsletterModel;
$NewsD = $newsletterDelete->delete($id);

if($NewsD){
echo '<div class="alert alert-success>
<button type="button" class="close" data-dismiss="alert-success">
<strong>"L article a été supprimé"</strong>
</div>';
}
else{
echo '<div class="alert alert-danger>
<button type="button" class="close" data-dismiss="alert-danger">
<strong>"L article n a pas été supprimé"</strong>
</div>';
}
}

?>
<?php
    require_once('../views/templates/b_footer.php');
?>