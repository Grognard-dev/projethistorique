<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualité</title>
    
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Lora:400,700|Roboto:300,400,500,700|Spartan:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Own CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/actualite.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>

<body>

    <?php include ('php/nav.php'); ?>


    <div style="display : flex; justify-content: center; align-items:center;
background: linear-gradient(rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0.25),  rgba(0, 0, 0, 0.25)), 
                    url(../ressources/img/cm003.jpg) no-repeat center center;
        background-size: cover, cover;backdrop-filter: blur(5px); width: 100vw; 
    height: 45vw; color: whitesmoke;
    text-shadow: 0 0 5px #00000082;
    max-height: 200px; box-shadow: 0 -4px 5px 4.5px rgba(0,0,0,0.3), inset 0 0 16px -5px rgba(0,0,0,0.3); ">
    <h1 style="margin-top:2em;font-size: 4vw;
    background: radial-gradient(#FFFFFF40,#FFFFFF20,#FFFFFF00, #FFFFFF00);
    width: 100vw;
    text-align: center;
    padding: 0.08em 0;
    width: fit-content;
    border-bottom: 4px solid #ffffff;">Actualité</h1>
</div>


  <section class="bloc bg-white">
    <h2 class="actual-titres"></h2>
    <div class="actual-container">
        <div class="actual-container-gauche">
        <div class="actual-img">
            <img src="ressources/img/photo1.jpg" alt="">
        </div>
        <h3 class="actual-titre">Je suis une perruche</h3>
        <div class="actual-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ducimus quae, consectetur reiciendis aliquid voluptatibus laborum id nulla, mollitia harum odit illum, corrupti aperiam. Voluptatibus magni ea et itaque rerum!</p>
        </div>
        <div class="actual-img">
            <img src="ressourcesimg/photo1.jpg" alt="">
        </div>
        <h3 class="actual-titre">Je suis une perruche</h3>
        <div class="actual-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ducimus quae, consectetur reiciendis aliquid voluptatibus laborum id nulla, mollitia harum odit illum, corrupti aperiam. Voluptatibus magni ea et itaque rerum!</p>
        </div>
        </div>
        <div class="actual-container-droite">
        <div class="actual-img">
            <img src="ressourcesimg/photo1.jpg" alt="">
        </div>
        <div>
        <h3 class="actual-titre">Je suis une perruche</h3>
        <div class="actual-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ducimus quae, consectetur reiciendis aliquid voluptatibus laborum id nulla, mollitia harum odit illum, corrupti aperiam. Voluptatibus magni ea et itaque rerum!</p>
        </div>
        </div>
          <div class="actual-img">
            <img src="ressourcesimg/photo1.jpg" alt="">
        </div>
        <div>
        <h3 class="actual-titre">Je suis une perruche</h3>
        <div class="actual-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ducimus quae, consectetur reiciendis aliquid voluptatibus laborum id nulla, mollitia harum odit illum, corrupti aperiam. Voluptatibus magni ea et itaque rerum!</p>
        </div>
        </div>
           <div class="actual-img">
            <img src="ressourcesimg/photo1.jpg" alt="">
        </div>
        <div>
        <h3 class="actual-titre">Je suis une perruche</h3>
        <div class="actual-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ducimus quae, consectetur reiciendis aliquid voluptatibus laborum id nulla, mollitia harum odit illum, corrupti aperiam. Voluptatibus magni ea et itaque rerum!</p>
        </div>
        </div>
           <div class="actual-img">
            <img src="ressourcesimg/photo1.jpg" alt="">
        </div>
        <div>
        <h3 class="actual-titre">Je suis une perruche</h3>
        <div class="actual-text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ducimus quae, consectetur reiciendis aliquid voluptatibus laborum id nulla, mollitia harum odit illum, corrupti aperiam. Voluptatibus magni ea et itaque rerum!</p>
        </div>
        </div>
    </div>
    </div>
  </section>

  <?php include ('php/footer.php'); ?>

</body>

</html>