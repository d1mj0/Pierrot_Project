<?php
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
                <?php foreach($commands as $values): ?>
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

        <label for="">Titre</label>
        <textarea type="Title" name="title" id="">

        <label for="">Description</label>
        <textarea type="Desc" name="Desc" id="">

        <label for="">Text</label>
        <textarea type="Text" name="Text" id="">

        <label for="">Photo</label>
        <input type="time" name="end_hour" id="">

        <button>Envoyer</button>
    </form>

</main>
