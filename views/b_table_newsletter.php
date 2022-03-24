<?php
    require_once("../src/controllers/NewsletterController.php");
    $newsletter = new NewsletterController(NULL, NULL, NULL);
    $newsSelect = $newsletter->listEmails();    
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tableau Newsletter</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="tables.php">Administration</a></li>
            <li class="breadcrumb-item active">Tableau Newsletter</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tableau Newsletter
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="container-fluid">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($newsSelect as $values): ?>
                            <tr>
                                <td><?= $values['id_request']; ?></td>
                                <td><?= $values['name']; ?></td>
                                <td><?= $values['lastname'];?></td>
                                <td><?= $values['email'];?></td>
                                <td>
                                    <a href="b_update_newsletter.php?id=<?= $values['id_request']; ?>" name="newsUpdate"><i class="fas fa-edit mx-2"></i></a> 
                                    <a href="b_delete_newsletter.php?id=<?= $values['id_request']; ?>" name="newsDelete"><i class="fas fa-trash mx-2"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
