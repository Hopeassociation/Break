<form method="post" class="panier" id="formulaire_panier" action="connexion.php">

  <div class="article">
    <h1 class="ts">Panier</h1>
    <?php for ($i = 0; $i < $len; $i++) : ?>
      <div class="produits">
      <input name="ref" type="int" value="<?=$all_biere[$i]['ref_biere']?> " class="num" for="custom-input-number" disabled="disabled">
        <img src="public/images/mockup/<?=$all_biere[$i]['fruit']?>.png" class="biere">
        <div class="num_biere">
          <p class="nom_biere"><?=$all_biere[$i]['nom']?></p>
          <p id="prix"><?=$all_biere[$i]['prix']?> €</p>
          <div class="champs">
            <!-- <button class="but" data-action="decrement" name="custom-input-number">-</button> -->
            <input type="text" value="0" class="num" for="custom-input-number" name="quantite">
            <!-- <button class="but" data-action="increment" name="custom-input-number">+</button> -->
          </div>
        </div>
      </div>
      <hr>
    <?php endfor ?>
  </div>

  <style>
    input[type='but']::-webkit-inner-spin-button,
    input[type='but']::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .custom-number-input input:focus {
      outline: none !important;
    }

    .custom-number-input button:focus {
      outline: none !important;
    }
  </style>
  <script>
    function decrement(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      value--;
      target.value = value;
    }

    function increment(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      value++;
      target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
      `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
      `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
      btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
      btn.addEventListener("click", increment);
    });
  </script>
  </div>
  <div class="article" id="deux">
    <h2 id="resume">RÉSUMÉ DE LA COMMANDE</h2>
    <div id="grille">
      <div class="total">
        <p>Sous Total</p>
        <p>Livraison</p>
        <p>T.V.A</p>
        <p>Total</p>
      </div>
      <div class="total">
        <p>18€</p>
        <p>4€</p>
        <p>2€</p>
        <p>24€</p>
      </div>
    </div>
    <button action="addpanier.php" class="button" type="submit">
      <span class="button-content">Paiement</span>
    </button>

  </div>

</form>