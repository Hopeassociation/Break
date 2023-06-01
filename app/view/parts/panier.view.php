<section class="panier">
    <div class="article">
      <h1 class="ts">Panier</h1>
      <div class="produits">
        <img src="grenada.png" class="biere">
        <div class="num_biere">
          <p class="nom_biere">GRENADA</p>
          <p id="prix">6€</p>
          <div class="champs">
            <button class="but" data-action="decrement" name="custom-input-number">
              -
            </button>
            <input type="text" value="0" class="num" for="custom-input-number">
            <button class="but" data-action="increment" name="custom-input-number">
              +
            </button>
          </div>
        </div>
      </div>
      <hr>
      <div class="produits">
        <img src="coco.png" class="biere">
        <div class="num_biere">
          <p class="nom_biere">COCO VORTEX</p>
          <p id="prix">8€</p>
          <div class="champs">
            <button class="but" data-action="decrement" name="custom-input-number">
              -
            </button>
            <input type="text" value="0" class="num" for="custom-input-number">
            <button class="but" data-action="increment" name="custom-input-number">
              +
            </button>
          </div>
        </div>
      </div>
      <hr>
      <div class="produits">
        <img src="hibis.png" class="biere">
        <div class="num_biere">
          <p class="nom_biere">HIBISCUS GALACTIC</p>
          <p id="prix">8€</p>
          <div class="champs">
            <button class="but" data-action="decrement" name="custom-input-number">
              -
            </button>
            <input type="text" value="0" class="num" for="custom-input-number">
            <button class="but" data-action="increment" name="custom-input-number">
              +
            </button>
          </div>
        </div>
      </div>
      <hr>
      <div class="produits">
        <img src="ananas.png" class="biere">
        <div class="num_biere">
          <p class="nom_biere">ELECTRO ANANAS</p>
          <p id="prix">9€</p>
          <div class="champs">
            <button class="but" data-action="decrement" name="custom-input-number">
              -
            </button>
            <input type="text" value="0" class="num" for="custom-input-number">
            <button class="but" data-action="increment" name="custom-input-number">
              +
            </button>
          </div>
        </div>
      </div>
      <hr>
      <div class="produits">
        <img src="passi.png" class="biere">
        <div class="num_biere">
          <p class="nom_biere">ATOMIC PASSION</p>
          <p id="prix">10€</p>
          <div class="champs">
            <button class="but" data-action="decrement" name="custom-input-number">
              -
            </button>
            <input type="text" value="0" class="num" for="custom-input-number">
            <button class="but" data-action="increment" name="custom-input-number">
              +
            </button>
          </div>
        </div>
      </div>
      <hr>
      <div class="produits">
        <img src="litch.png" class="biere">
        <div class="num_biere">
          <p class="nom_biere">SPACE LITCHI</p>
          <p id="prix">10€</p>
          <div class="champs">
            <button class="but" data-action="decrement" name="custom-input-number">
              -
            </button>
            <input type="text" value="0" class="num" for="custom-input-number">
            <button class="but" data-action="increment" name="custom-input-number">
              +
            </button>
          </div>
        </div>
      </div>


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
      <button class="button">
        <span class="button-content">Paiement</span>
      </button>
    </div>

  </section>