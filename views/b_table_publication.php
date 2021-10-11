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
                                <td><?= $values['description'];?></td>
                                <td><?= $values['date_time_publi'];?></td>
                                <td><a href="#"><i class="fas fa-edit"><?= $publicUpdate; ?></i></a>  <a href="#"><i class="fas fa-trash-alt"><?= $publicDelete; ?></i></a></td>
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