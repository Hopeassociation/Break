<!DOCTYPE html>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>La Vidéo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="public/css/landing.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto&display=swap"
      rel="stylesheet"/>
      

    <style>
      @import url('https://fonts.cdnfonts.com/css/roboto');
  </style>


<script>
    $(document).ready(function(){
      $('section').hide(0).delay(1200).show(200);
    });
</script>
</head>

<body>

  <video id="background-video" autoplay loop muted>

<source src="public/images/landing.mp4" type="video/mp4">

</video>

 <section class="scan">
    <div cLass="face"></div>
    <h3 class="age">As-tu plus de 18 ans ?</h3>
    <div class="bouton">
      <a href="accueil.php" id="oui">oui</a>
      <a href="#" id="non">non</a>
    </div>
 </section>
</body>
</html>