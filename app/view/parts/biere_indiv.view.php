<main>
    <section class="all">
        <section class="gauche">
            <img src="public/images/mockup/grenada.png" alt="biere">
            <img src="public/images/grid_biere.svg" alt="filet">
        </section>
        <section class="droite">
            <div class="droite_descr">
                <form method="post" action="addPanier">
                    <input type="text" name="nom" disabled="disabled" value="<?= $bieres[$i]['nom'] ?>">
                    <p><?= $bieres[$i]['degre'] ?></p>
                    <p>Biere <?= $bieres[$i]['type'] ?></p>
                    <p> <?= $bieres[$i]['nom'] ?> est une bière au gout fruité, qui séduira les plus nostalgique d’entre vous !</p>
                    <input type="number" name="prix" disabled="disabled" value="<?= $bieres[$i]['prix'] ?>">
                    <!-- <label for="counter">Quantite :</label>
                    <input type="number" name="quantite" id="counter" value="<?= $quantite ?>"> -->
                    <input type="submit" name="add" value="Ajouter au panier">
                    <!-- <p id="counter"><?= $quantite ?></p> -->
                    
                </form>
            </div>
        </section>
        
</main>