<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Lora:400,700|Roboto:300,400,500,700|Spartan:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Own CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/modal.css">
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
    border-bottom: 4px solid #ffffff;">Application</h1>
</div>
    
    <iframe src="http://historique.simplon-charleville.fr/" frameborder="0" style="width: 100%; height:calc(100% - 60px);"></iframe>
        
    <?php include 'php/footer.php' ?>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="js/nav.js"></script>
</body>
</html>