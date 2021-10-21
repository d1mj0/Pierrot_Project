<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    $title = "Tableau publications";

    require_once("./templates/b_header.php");
    require_once("../src/controllers/PublicationController.php");

    

    $publicController = new PublicationController(NULL, NULL, NULL, NULL);
    $publicSelect = $publicController->listPublication();
    $publicUpdate = $publicController->updatePublication();
    $publicDelete = $publicController->deletePublication();
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau publications</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="tables.php">Administration</a></li>
            <li class="breadcrumb-item active">Tableau publications</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tableau publications
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="container-fluid">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Illustration</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Texte</th>
                            <th>Date de publication</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($publicSelect as $values): ?>
                            <tr>
                                <td><?= $values['id_publi']; ?></td>
                                <td><?= $values['img']; ?></td>
                                <td><?= $values['title'];?></td>
                                <td><?= substr($values['description'], 0, 100);?></td>
                                <td><?= substr($values['text'], 0, 250);?></td>
                                <td><?= $values['date_time_publi'];?></td>
                                <td><form action="b_update_publication.php"><a href="b_update_publication.php?id=<?= $values['id_publi']; ?>" name="publicUpdate"><i class="fas fa-edit"></i></a></form> <form action="b_delete_publication.php" method="POST"><input type="hidden" name="idPublication" value="<?= $values['id_publi']; ?>"><input type="submit"  name="deletePublic"  value="delete"></form></td>
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