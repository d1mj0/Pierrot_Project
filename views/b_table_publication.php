<?php
    require_once("../src/controllers/PublicationController.php");
    $publiCtrl = new PublicationController(NULL, NULL, NULL, NULL);
    $publiRqst = $publiCtrl->listPublication();
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau publications</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/views/b_index.php?page=administration">Administration</a></li>
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
                        <?php foreach($publiRqst as $values): ?>
                            <tr>
                                <td>
                                    <?= $values['id_publi']; ?>
                                </td>
                                <td>
                                    <img width="100" height="100" src="<?= $values['img']; ?>" alt="<?= $values['title']; ?>">
                                </td>
                                <td>
                                    <?= $values['title']; ?>
                                </td>
                                <td>
                                    <?= (strlen($values['description']) > 50) ? substr($values['description'], 0, 50)."..." : ($values['description'])?>
                                </td>
                                <td>
                                    <?= (strlen($values['text']) > 50) ? substr($values['text'], 0, 50)."..." : ($values['text'])?>
                                </td>
                                <td>
                                    <?= $values['date_time_publi'];?>
                                </td>
                                <td>
                                    <a href="b_update_publication.php?id=<?= $values['id_publi']; ?>" name="publiUpdate"><i class="fas fa-edit mx-2"></i></a> 
                                    <a href="b_delete_publication.php?id=<?= $values['id_publi']; ?>" name="publiDelete"><i class="fas fa-trash mx-2"></i></a> 
                                    <a href="b_view_publication.php?id=<?= $values['id_publi']; ?>" name="publiView"><i class="far fa-eye mx-2"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

