<main id="main hidden">
    <div id="container">
        <div id="titre">
            <h1>Notre collection capsule</h1>
            <h2>vous devriez aimez ceci !</h2>
        </div>
        <section id="biere">

            <?php for ($i = 0; $i < $nb_biere; $i++) : ?>
                <div class="biere">
                    <a href="biere_indiv.php">
                        <img src="public/images/bieredex/<?= $bieres[$i]['fruit'] ?>.png" alt="">
                        <h3><?= $bieres[$i]['nom_biere'] ?></h3>
                    </a>

                </div>
            <?php endfor ?>
        </section>
</main>

</div>