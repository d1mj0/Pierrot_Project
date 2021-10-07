<?php
    ini_set("display_errors", 1);   // Delete after
    error_reporting(E_ALL);         // Delete after

     
    require_once("../src/controllers/NewsletterController.php");

    $newsletter = new NewsletterController(NULL, NULL, NULL);
    $newsSelect = $newsletter->listEmails();
    $newsUpdate = $newsletter->updateEmail();
    $newsDelete = $newsletter->deleteEmail();

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
                                <td><a href="#"><i class="fas fa-edit"><?= $newsUpdate; ?></i></a>  <a href="#"><i class="fas fa-trash-alt"><?= $newsDelete; ?></i></a></td>
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
