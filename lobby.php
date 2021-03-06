<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Lobby</title>

    <!-- Pour Internet Explorer : S'assurer qu'il utilise la dernière version du moteur de rendu -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Affichage sans zoom pour les mobiles -->
    <meta name="viewport" content="width=device-width, init-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--  Font Awesome | Icons -->

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- HTML5 Shiv & Respond JS -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
    <![endif]-->


</head>
<body>
<nav class="navbar">
    <div class="container">
        <ul class="navbar1">
            <li><a class="white" href="#">Inscription</a></li>
            <li><a class="white" href="#">Login</a></li>
        </ul>
    </div>
</nav>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
<h1 class="lobbytitre">Lobby</h1>
    <div class="row">

    <div class="partie col-sm-3">
    <h6>nom :ctuhllu </h6>
        <h6> categorie : Science-Fiction</h6>
        <h6> déscription :</h6>



    </div>
    <div class=" partie col-sm-3">
    <h6>nom :Agone </h6>
        <h6> categorie :Historique</h6>
        <h6> déscription :</h6>


    </div>
    <div class=" partie col-sm-3">
    <h6>nom :Yggdrasill </h6>
        <h6> categorie :Fantastique</h6>
        <h6> déscription :</h6>


    </div>
    <div class="partie col-sm-3">
    <h6>nom :Mutant - Année Zéro </h6>
    <h6> categorie : post-apocalyptique</h6>
    <h6> déscription :</h6>

    </div>


    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <input type="submit"  id="btn" class="btn" value="Créer" style="font-size: 16px"><br />
        <div class="row">
            <div id="creation">
                <input type="text" placeholder="nom partie">
                <select>
                    <option value="post-apocalyptique">post-apocalyptique</option>
                    <option value="historique">historique</option>
                    <option value="sciences-fiction">sciences-fiction</option>
                    <option value="fantastique">fantastique</option>
                </select>
                <textarea placeholder="description"></textarea>
            </div>
        </div>
        <script>
            $(".btn").click(function(){
                $('#creation').css("visibility", 'visible');
            });
        </script>
        <div class=" creer col-sm-12">
            <p>créez votre propre partie selon vos règles, votre univers.</p>


        </div>
    </div>


</div>

<footer class="page-footer font-small blue pt-4 mt-4" style="width: 100%">

    <!--Footer Links-->
    <div class="container-fluid text-center text-md-left">
        <div class="row">


            <div class="col-sm-12">

                <p>&copy travail effectué par Théo Da Costa, Gauthier Bosson, Hugo Ratel et Rodolphe Cordier.</p>
            </div>

        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script rel="stylesheet" src="assets/js/script.js"></script>
</body>
</html>