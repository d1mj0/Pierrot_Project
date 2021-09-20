<?php
$title = "Admin";

require_once('../src/controllers/ArticleController.php');



if(!empty($_POST['title']) && !empty($_POST['desc']) && !empty($_POST['text']) && !empty($_POST['photo'])){
    $article = new ArticleController($_POST['title'], $_POST['desc'], $_POST['text'], $_POST['photo']);
    $article->addArticle();
}

$article = new ArticleController(NULL,NULL,NULL,NULL);
$article = $article->listArticle();




require_once('./templates/header.php');

?>

<main>      
    <section>
        <table>
                <tr class="td_head">
                    <td>Photo</td>
                    <td>Titre</td>
                    <td>Description</td>
                    <td>Texte</td>
                    <td>Date et heure de publication</td>
                    <td>Action</td>
                </tr>
                <?php foreach($article as $values): ?>
                <tr>
                    <td><?= $values['photo']; ?></td>
                    <td><?= $values['title'];?></td>
                    <td><?= $values['desc']; ?></td>
                    <td><?= $values['text'];  ?></td>
                    <td><?= $values['date_heure_publi']; ?></td>
                    <td>Action</td>
                </tr>
                <?php endforeach; ?>
            </table>
    </section>
    <form action="blog_administration.php" method="POST">

        <label for="title">Titre</label>
        <textarea type="Title" name="title" id="title">

        <label for="desc">Description</label>
        <textarea id="desc" name="desc" cols="20" rows="6"></textarea>

        <label for="">Text</label>
        <textarea id="text" name="text" cols="20" rows="10"></textarea>

        <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo">

        <button>Envoyer</button>
    </form>

</main>
