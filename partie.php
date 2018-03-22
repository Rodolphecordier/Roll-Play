<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>

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
        <ul>
            <li><a class="buttonnav" href="#">Inscription</a></li>
            <li><a class="buttonnav" href="#">Login</a></li>
        </ul>
    </div>
</nav>
<div class="container-full">
    <div class="row">

        <div class="joueurs col-sm-3">
            <h4>Ajouter joueur</h4>
<form class="ajoutjoueur">
    <input type="text" placeholder="nom">
    <input type="file" placeholder="avatar">
    <input type="text" placeholder="caracteristique">
    <input type="text" placeholder="competence">
    <input type="text" placeholder=" inventaire">
        <textarea placeholder="description"></textarea>
</form>



        </div>
        <div class="plateau col-sm-9">
            <img src="./assets/img/map.PNG" style="max-width: 100%">
        </div>
    </div>
    <div class="row">
        <div class="de col-sm-3">

        </div>
        <div class=" tchat col-sm-9">

        </div>


    </div>
</div>

<footer class="page-footer font-small blue pt-4 mt-4">

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