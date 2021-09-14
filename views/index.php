<?php
    session_start();
    require_once('../src/controllers/CarController.php');


    $car = new CarController(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    $cars = $car->listCars();
    require_once('./templates/header.php');
?>
    <section class="s_cars">
        <?php if(count($cars) > 0 ): ?>
            <?php foreach($cars as $values): ?>
                <article class="tr_index">
                    <img width="100" height="100" src="<?= $values['photo']; ?>" alt="">
                    <div class="tr_div">
                        <h2><?= $values['mark'] . ' ' . $values['model']; ?></h2>
                        <p><?= $values['desc']; ?></p>
                        <p><?= $values['id_agence'] . ' - ' . $values['price']; ?></p>
                        <button>Réserver et payer</button>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php else: echo "Aucun véhicule de disponible.";endif; ?>
    </section>

    
    </body>
</html>