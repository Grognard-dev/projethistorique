<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Lora:400,700|Roboto:300,400,500,700|Spartan:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Own CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/tuto.css">


</head>

<body>
    
    <?php include ('php/nav.php'); ?>

    <main>
        <div class="header">

            <div class="menutarget bg-gold">
                <div>
                    <span>01</span> <a href="#b01">Contexte</a>
                </div>
                <div>
                    <span>02</span> <a href="#b02">Les archives</a>
                </div>
                <div>
                    <span>03</span> <a href="#b03">Le travail</a>
                </div>
                <div>
                    <span>04</span> <a href="#b04">Application</a>
                </div>
            </div>
        </div>

        <div class="parts">

            <section id="b01" class="bloc">

                <div class="img">
                    <img src="https://picsum.photos/id/1/500/300/" alt="">
                </div>

                <div class="text-light bignb">01</div>

                <div>
                    <h2 class="titlegold">Contexte</h2>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda!</p>
                </div>

            </section>

            <section id="b02" class="bloc">

                <div class="img">
                    <img src="https://picsum.photos/id/2/500/300" alt="">
                </div>

                <div class="text-light bignb">02</div>

                <div>
                    <h2 class="titlegold">Contexte</h2>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda!</p>
                </div>

            </section>

            <section id="b03" class="bloc">

                <div class="img">
                    <img src="https://picsum.photos/id/3/500/300#1" alt="">
                </div>

                <div class="text-light bignb">03</div>
                <div>
                    <h2 class="titlegold">Contexte</h2>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit a quaerat maxime odit quia aut vitae, fugit tempore ipsa, quod reprehenderit dolore! Sit vitae quam, rerum explicabo vel delectus assumenda!</p>
                </div>
            </section>

        </div>

        <img id="clock" src="../ressources/img/clockbg.png" alt="">

        <section id="b04" class="bloc bg-gold">

            <div class="text-white bignbxl">04</div>

            <div class="btm text-black">
                <a class="bg-white" href="">C'est parti</a>
            </div>

        </section>

    </main>

    <div style="height: 500px"></div>

    <?php include ('php/footer.php'); ?>

</body>

</html>