<section class="main">

  <div id="titre">
    <h1>Grenada</h1>
  </div>

  <div class="swatch">
    <?php for ($i = $nb_biere - 1; $i >= 0; $i--) : ?>
      <div><img alt="<?= $bieres[$i]['fruit'] ?>" src="public/images/mockup/<?= $bieres[$i]['fruit'] ?> "></div>
    <?php endfor ?>
  </div>
  <div id="grid">
    <img src="public/images/grid_biere.svg" alt="grid">
  </div>
  <div id="descr">
    <p>
      Grenada est une bière au concept écologique et de collection capsule.
    </p>
  </div>

</section>