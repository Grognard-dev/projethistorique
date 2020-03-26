<nav class="topnav start" id="myTopnav">
    <a href="index.php" class="underline active">Accueil</a>
    <a href="tuto.php" class="underline">Mode d'emploi</a>
    <a href="application.php" class="underline">Application</a>
    <a href="actualite.php" class="underline">Actualité</a>
    <a href="#contact" class="underline">Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        &#9776;
    </a>
</nav>


<div id="contact" class="modal" style="opacity:0">
        <a href="#"><div class="exit"></div></a>
        <div class="content-modal">

            <h2>Contactez-nous :</h2>

            <form action="">

    
                <div id="mystere"><div id="bouge"><img src="./ressources/img/simplon.gif" alt=""></div></div>

                <div>
                    <label for="name">Nom: </label>
                    <input type="text" name="name" id="name" class="form-item" required value="<?php echo $name;?>">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" class="form-item" required value="<?php echo $email;?>">
                </div>
                <div>
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" class="form-item" required><?php echo $message;?></textarea>
                </div>
                <div>
                    <input type="submit" value="Envoyer" class="form-item form-submit">
                </div>
            </form>

            <a href="#close" title="Fermer" class="close-modal"></a>
        </div>
    </div>



