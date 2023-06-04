<body>

    <div class="container hidden">
        <div class="blocHorizontal">
            <div class="slide intro">
                <p>Break vous présente les différentes étapes de brassage de nos bières ! Nos bières sont crées de façon
                    artisanale et éthique. Nous vous invitons à découvrir comment vos délicieuses bières sont
                    fabriquées.</p>

                <div class="swipe">
                    <a href="#" class="link">
                        <svg viewBox='0 0 200 200' width='200' height='200' xmlns='http://www.w3.org/2000/svg' class="link__svg" aria-labelledby="link1-title link1-desc">
                            <title id="link1-title">Je scroll pour découvrir</title>
                            <desc id="link1-desc">lien en rotation</desc>

                            <path id="link-circle" class="link__path" d="M 20, 100 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0" stroke="none" fill="none" />

                            <path class="link__arrow" d="M 75 100 L 125 100 L 110 85 M 125 100 L 110 115" stroke=2px fill="none" />

                            <text class="link__text">
                                <textPath href="#link-circle" stroke="none">
                                    Je scroll pour decouvrir -------
                                </textPath>
                            </text>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="slide etape">
                <h3>Le concassage</h3>
                <div class="etape_plus">
                    <div class="anim_conc">
                        <img src="public/images/fabrication/concassage_rouage.svg" alt="schema concassage">
                        <img src="public/images/fabrication/concassage_rouage.svg" alt="schema concassage">
                    </div>
                    <p>Le début du brassage de la bière commence par le concassage du malt. Moudre les grains de malts
                        et les céréales permet d’obtenir un meilleur accès à l’amidon.</p>
                </div>
            </div>
            <div class="slide etape">
                <h3>L'empatage</h3>
                <div class="etape_plus">
                    <div class="gif">
                        <img src="public/images/fabrication/empatage.gif" alt="schema empatage">
                    </div>
                    <p>Une fois le concassage effectué, les grains sont ajoutés à 30 litres d’eau chauffés à 68°C
                        dans une cuve de brassage pour activer les enzymes présentes dans le malt. Il faut brasser la bière à intervalle régulier afin que
                        l’amidon soit extrait à son maximum.
                    </p>
                </div>
            </div>
            <div class="slide etape">
                <h3>Filtration et rincage</h3>
                <div class="etape_plus">
                    <div class="gif">
                        <img src="public/images/fabrication/filtration.gif" alt="schema filtration">
                    </div>
                    <p>Une fois le concassage effectué, les grains sont ajoutés à 30 litres d’eau chauffés à 68°C
                        dans une cuve de brassage pour activer les enzymes présentes dans le malt. Il faut brasser la bière à intervalle régulier afin que
                        l’amidon soit extrait à son maximum.
                    </p>
                </div>
            </div>
            <div class="slide etape">
                <h3>Ebullition et houblonnage</h3>
                <div class="etape_plus">
                    <div class="gif">
                        <img src="public/images/fabrication/ebullition.gif" alt="schema ebullition">
                    </div>
                    <p>Une fois le moût obtenu, nous le portons à ébullition pendant 1 heure.
                    </p>
                </div>
            </div>
            <div class="slide etape">
                <h3>Refroidissement</h3>
                <div class="etape_plus">
                    <div class="gif refroidissement">
                        <img src="public/images/fabrication/refroidissement.gif" alt="schema refroidissement">
                    </div>
                    <p>Pour refroidir notre moût, nous faisons circuler de l’eau dans un serpentin plongé dans la
                        cuve de brassage jusqu’à ce que la température du moût soit redescendu suffisamment.

                    </p>
                </div>
            </div>
            <div class="slide etape">
                <h3>Fermentation</h3>
                <div class="etape_plus">
                    <div class="gif fermentation">
                        <img src="public/images/fabrication/fermentation.svg" alt="schema refroidissement">
                    </div>
                    <p>Lorsque le moût est bien refroidit, nous ajoutons les levures puis nous mettons notre
                        production dans une cuve de fermentation. Après 3 à 4 semaines de patience, les levures
                        auront transformé le moût en bière.</p>
                </div>
            </div>
            <div class="slide fin">
                <p>Et hop, on passe à la mise en bouteille !</p>
                <a href="nosbieres.php">
                <h6>Les acheter !</h6>
                </a>
                <div class="swatch">   
                    <?php for ($i = $nb_biere-1; $i >= 0; $i--) : ?>                
                        <div><img alt="<?=$bieres[$i]['fruit']?>" src="public/images/mockup/<?=$bieres[$i]['fruit']?>.png"></div>
                   <?php endfor ?>
                </div>
            </div>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="public/js/app.js"></script>


</body>

</html>