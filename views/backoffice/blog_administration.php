<?php
require_once('../src/controllers/UserController.php');
require_once('../src/controllers/CarController.php');
require_once('../src/controllers/AgencyController.php');
require_once('../src/controllers/CommandController.php');


if(!empty($_POST['member']) && !empty($_POST['car']) && !empty($_POST['agency']) && !empty($_POST['start_date']) && !empty($_POST['start_hour']) && !empty($_POST['end_date']) && !empty($_POST['end_hour'])){
    $command = new CommandController($_POST);

    $command->addCommand();
}

$command = new CommandController(NULL);
$commands = $command->listCommands();


$member = new UserController(NULL, NULL, NULL, NULL, NULL, NULL, NULL,);
$members = $member->listUsers();

$car = new CarController(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$cars = $car->listCars();

$agency = new AgencyController(NULL, NULL, NULL, NULL, NULL, NULL);
$agencies = $agency->listAgencies();

require_once('./templates/header.php');

?>

<main>      
    <section>
        <table>
                <tr class="td_head">
                    <td>Commande</td>
                    <td>Membre</td>
                    <td>Véhicule</td>
                    <td>Agence</td>
                    <td>Date et heure de départ</td>
                    <td>Date et heure de fin</td>
                    <td>Prix total</td>
                    <td>Date et heure d'enregistrement</td>
                    <td>Action</td>
                </tr>
                <?php foreach($commands as $values): ?>
                <tr>
                    <td><?= $values['id_commande']; ?></td>
                    <td><?= $values['id_membre'] . ' - ' . $values['prenom'] . ' ' . $values['nom']  . ' - ' . $values['email'] ; ?></td>
                    <td><?= $values['id_vehicule'] . ' - ' . $values['marque'] . ' ' . $values['modele']; ?></td>
                    <td><?= $values['id_agence'] . ' - ' . $values['titre'];  ?></td>
                    <td><?= $values['date_heure_depart']; ?></td>
                    <td><?= $values['date_heure_fin']; ?></td>
                    <td><?= $values['prix_total']; ?> €</td>
                    <td><?= $values['date_enregistrement']; ?></td>
                    <td>Action</td>
                </tr>
                <?php endforeach; ?>
            </table>
    </section>
    <form action="command_administration.php" method="POST">
        <select name="member" id="">
            <option value="">-- Membres --</option>
            <?php foreach($members as $values): ?>
            <option value="<?= $values['id_membre'] ?>"><?= $values['email'] ?></option>
            <?php endforeach; ?>
        </select>
        <select name="car" id="">
            <option value="">-- Véhicules --</option>
            <?php foreach($cars as $values): ?>
            <option value="<?= $values['id_vehicule'] ?>"><?= $values['titre'] ?></option>
            <?php endforeach; ?>
        </select>
        <select name="agency" id="">
            <option value="">-- Agences --</option>
            <?php foreach($agencies as $values): ?>
            <option value="<?= $values['id_agence'] ?>"><?= $values['titre'] ?></option>
            <?php endforeach; ?>
        </select>

        <label for="">Date départ</label>
        <input type="date" name="start_date" id="">

        <label for="">Heure départ</label>
        <input type="time" name="start_hour" id="">

        <label for="">Date fin</label>
        <input type="date" name="end_date" id="">

        <label for="">Heure fin</label>
        <input type="time" name="end_hour" id="">

        <button>Envoyer</button>
    </form>

</main>
