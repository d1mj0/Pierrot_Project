<?php

$title =  "Suppression d'article";

require_once('../views/templates/b_header.php'); 
require_once('../src/models/ArticleModel.php'); 





if(isset($_POST['deleteArticle'])){
$id = $_POST['idArticle'];

$articleDelete = new ArticleModel;
$articleD = $articleDelete->delete($id);

if($articleD){
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