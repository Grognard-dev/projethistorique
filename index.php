<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Lora:400,700|Roboto:300,400,500,700|Spartan:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Own CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/caroussel.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cheat.css">


</head>

<body>
    
    <?php include ('php/nav.php'); ?>

    <header class="text-white">
        <h1>Charleville-Mézières</h1>
        <hr class="bg-light">
        <p>Plongez dans plus de 200 ans d'histoire et découvrez la vie des habitants de la cité
            carolomacérienne entre 1700 et 1900</p>
    </header>

    <main>

        <div id="ligne1">

            <div class="menutarget">
                <div>
                    <span>01</span> <a class="tMob" href="#b01">Contexte</a>
                                    <a class="tDes" href="#ligne1">Contexte</a>
                </div>
                <div>
                    <span>02</span> <a class="tMob" href="#b02">Les archives départementales</a>
                                    <a class="tDes" href="#ligne2">Les archives départementales</a>
                </div>
                <div>
                    <span>03</span> <a class="tMob" href="#b03">Le travail du CRNS</a>
                                    <a class="tDes" href="#ligne3">Le travail du CRNS</a>
                </div>
                <div>
                    <span>04</span> <a class="tMob" href="#b04">Application</a>
                                    <a class="tDes" href="#ligne3">Application</a>
                </div>
            </div>

            <section id="b01" class="bloc">

                <div class="img">
                    <img src="ressources/img/arcade.png" alt="">
                </div>
                <div class="img gonzague">
                    <img src="ressources/img/gonzague.png" alt="">
                </div>

                <div class="text-light bignb">01</div>

                <h2 class="titlebg">Contexte</h2>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda!</p>

            </section>

        </div>

        <div id="ligne2">
            <section id="b02" class="bloc bg-light">

                <div class="img">
                    <img src="ressources/img/archives08.jpeg" alt="">
                </div>

                <div>
                    <div class="text-white bignb">02</div>

                    <h2 class="titlelw">Archives Départementales des Ardennes</h2>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda! Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda!</p>
                </div>
            </section>
        </div>

        <div id="ligne3">

            <section id="b03" class="bloc">

                <div class="img">
                    <img src="ressources/img/gonzague.png" alt="">
                </div>

                <div class="text-gold bignb">03</div>

                <div>
                    <h2 class="titlelg">Le travail du CNRS</h2>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda! Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda!</p>
                </div>

            </section>

            <section id="b04" class="bloc bg-gold">
                
                <div class="text-white bignb">04</div>

                <h2 class="titlebw">Application</h2>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda!</p>


                <div class="btm text-black">
                    <a class="bg-white" href="tuto.php">Mode d'emploi</a>
                    <a class="bg-white" href="">C'est parti</a>
                </div>

            </section>

        </div>

    </main>

    <?php include ('php/card-actu.php'); ?>

    <?php include ('php/footer.php'); ?>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script type="text/javascript" src="js/carrousel.js"></script>

    <script src="js/konami.js"></script>
    <script>
        var easter_egg = new Konami(function() {
        var conteneur = document.querySelector("#mystere")
        conteneur.style.display="block"
        });
    </script>
</body>

</html>