<?php

    require_once("../src/controllers/NewsletterController.php");

    $newsletterSelect = new NewsletterController(NULL, NULL, NULL, NULL);
    $newsletterS = $newsletterSelect->listNewsletter();

    $title = "tables_Newsletter";

    require_once('../views/templates/b_header.php');

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="tables.php">Admin</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Articles
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Id Article</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Texte</th>
                            <th>Illustration</th>
                            <th>date de publication</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articles as $values): ?>
                            <tr>
                                <td><?= $values['id_article']; ?></td>
                                <td><img src="<?= $values['img']; ?>" alt=""></td>
                                <td><?= $values['title'];?></td>
                                <td><?= $values['description'];?></td>
                                <td><?= $values['text'];?></td>
                                <td><?= $values['date_time_publi']; ?></td>
                                <td>Action</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php

require_once('../views/templates/b_footer.php');

?>
