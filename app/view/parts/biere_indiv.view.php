<main>
    <section class="all">
    <section class="gauche">
        <img src="public/images/mockup/grenada.png" alt="biere">
        <img src="public/images/grid_biere.svg" alt="filet">
    </section>
    <section class="droite">
        <div class="droite_descr">
            <p></p>
            <p><?= $bieres[$i]['degre']?></p>
            <p>Biere <?= $bieres[$i]['type']?></p>
            <p> Grenada est une bière au gout fruité, qui séduira les plus nostalgique d’entre vous !</p>
            <p id="counter"><?=$quantite?></p>
            <p><?= $bieres[$i]['prix']?></p>
        </div>
    </section>

        <section class="bouton">
        <div>
            <button id="moins">
                <span> - </span>
                <div class="border full-rounded"></div></button>
        </div>
        <button id="plus">
            <span> + </span>
            <div class="border full-rounded"></div></button>
    </section>
    <button id="add">
            <span> Ajouter au panier </span>
        </button>
</main>