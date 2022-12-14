<?php 
    require_once("include/header.php");
    require_once("include/nav.php");
?>

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>
    <style>
        .test {
            height: 119vh;
            display: flex;
        }

        .test2 {
            width: 30%;
            height: 75vh;
            display: flex;
        }

        .test3 {
            display: none;
        }

        .titrec {
            width: 100%;
            height: 40vh;
        }

        .num {
            margin: 0 7vh;
            width: 75%;
            height: 10vh;
        }

        .traits1 {
            width: 2%;
            border-left: 1px solid black;
            height: 110vh;
        }

        .traits2 {
            display: none;
        }

        .traitori {
            display: none;
        }

        .espace {
            display: none;
        }

        .for {
            width: 45%;
            height: 70vh;
        }

        .radbox {
            height: 15vh;
            display: flex;
        }

        .labe {
            width: 25%;
        }

        .star {
            display: initial;
            width: 75%;
            height: 15vh;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .checkio {
            width: 100%;
            height: 1vh;
            display: flex;
        }

        .checkio1 {
            width: 100%;
            height: 10vh;
            display: flex;
        }

        .put {
            width: 35.3%;
        }

        .put1 {
            width: 33%;
            height: 6vh;
            margin-top: 3vh;
        }

        .btn {
            margin: auto;
            width: 30%;
        }

        /* animation bouton */

        .hvr-bounce-to-right {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);

            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: red;
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0s;
            transition-duration: 0s;

        }

        .hvr-bounce-to-right:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: black;
            /* regler couleur de l'animation */
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 1.5s;
            transition-duration: 1.5s;
            /* regler vitesse animation */
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            background-color: none;
        }

        .hvr-bounce-to-right:hover,
        .hvr-bounce-to-right:focus,
        .hvr-bounce-to-right:active {
            color: white;
            /* changer couleur du text dans l'animation */
            background: none;
            /* changer couleur background en dessous de l'animation */

        }

        .hvr-bounce-to-right:hover:before,
        .hvr-bounce-to-right:focus:before,
        .hvr-bounce-to-right:active:before {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            background-color: none;
        }

        footer {
            width: 100%;
            height: 16vh;
        }

        .reseaux {
            width: 33.4%;
            height: 15vh;
        }

        .reseaux img {
            height: 6.7vh;
            margin: 7vh auto;
        }

        .fichec {
            width: 33.3%;
            height: 15vh;
        }

        #customControlValidation1:checked~.custom-control-label::before 
        {
            color: #fff200;
            border-color: #fff200;
            background-color: #fff200;
        }

        #customControlValidation2:checked~.custom-control-label::before 
        {
            color: #00aeef;
            border-color: #00aeef;
            background-color: #00aeef;
        }

        #customControlValidation3:checked~.custom-control-label::before 
        {
            color: #00a651;
            border-color: #00a651;
            background-color: #00a651;
        }

        .footerhaut {
            display: flex;
            justify-content: space-evenly;
        }

        .footerbas {
            display: flex;
            justify-content: center;
        }

        .colonne1 {
            width: 30%;
            align-items: center;
            color: black !important;
            text-decoration: none !important;
            display: flex;
            flex-direction: column;
        }

        .ftext1 {
            text-decoration: none;
            color: black;
        }

        .ftext1:hover {
            text-decoration: none;
            color: black;
            background-color: blue;
            color: white;
        }

        .colonne2 {
            width: 30%;
            color: black !important;
            text-decoration: none !important;
        }

        .ftext2 {
            text-decoration: none;
            color: black;
        }

        .ftext2:hover {
            text-decoration: none;
            color: black;
            background-color: blue;
            color: white;
        }

        .colonne3 {
            display: flex;
            align-items: center;
            width: 30%;
            justify-content: center;
        }

        .colonne4 {
            width: 100%;
            margin-bottom: 10%;
            margin-top: 2vh;
            display: none;
        }

        .snap {
            width: 50%;
            height: 10vh;
        }

        .snap:hover {
            transition: all ease .3s .1s;
        }

        .fb {
            width: 50%;
            height: 10vh;
        }

        .fb:hover {
            transition: all ease .3s .1s;
        }

        .insta {
            width: 50%;
            height: 10vh;
        }

        .insta:hover {
            transition: all ease .3s .1s;
        }

        .flogo {
            width: 11.5%;
            height: 38%;
        }

        img {
            border-style: none;
            height: 60%;
        }

        /********************************************format pc responsive-------------------------------------------------------------------- */
        @media screen and (min-width: 769px) and (max-width:2560px) {
            .test {
                height: 119vh;
                display: flex;
            }

            .test2 {
                width: 30%;
                height: 75vh;
                display: flex;
            }

            .test3 {
                display: none;
            }

            .titrec {
                width: 100%;
                height: 40vh;
            }

            .num {
                margin: 0 7vh;
                width: 75%;
                height: 10vh;
            }

            .traits1 {
                width: 2%;
                border-left: 1px solid black;
                height: 90vh;
            }

            .traits2 {
                display: none;
            }

            .traitori {
                display: none;
            }

            .espace {
                display: none;
            }

            .for {
                width: 45%;
                height: 70vh;
            }

            .radbox {
                height: 15vh;
                display: flex;
            }

            .labe {
                width: 25%;
            }

            .star {
                display: initial;
                width: 75%;
                height: 15vh;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            .checkio {
                width: 100%;
                height: 1vh;
                display: flex;
            }

            .checkio1 {
                width: 100%;
                height: 10vh;
                display: flex;
            }

            .put {
                width: 35.3%;
            }

            .put1 {
                width: 33%;
                height: 6vh;
                margin-top: 3vh;
            }

            .btn {
                margin: auto;
                width: 30%;
            }

            /* animation bouton */

            .hvr-bounce-to-right {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);

                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: red;
                position: relative;
                -webkit-transition-property: color;
                transition-property: color;
                -webkit-transition-duration: 0s;
                transition-duration: 0s;

            }

            .hvr-bounce-to-right:before {
                content: "";
                position: absolute;
                z-index: -1;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: black;
                /* regler couleur de l'animation */
                -webkit-transform: scaleX(0);
                transform: scaleX(0);
                -webkit-transform-origin: 0 50%;
                transform-origin: 0 50%;
                -webkit-transition-property: transform;
                transition-property: transform;
                -webkit-transition-duration: 1.5s;
                transition-duration: 1.5s;
                /* regler vitesse animation */
                -webkit-transition-timing-function: ease-out;
                transition-timing-function: ease-out;
                background-color: none;
            }

            .hvr-bounce-to-right:hover,
            .hvr-bounce-to-right:focus,
            .hvr-bounce-to-right:active {
                color: white;
                /* changer couleur du text dans l'animation */
                background: none;
                /* changer couleur background en dessous de l'animation */

            }

            .hvr-bounce-to-right:hover:before,
            .hvr-bounce-to-right:focus:before,
            .hvr-bounce-to-right:active:before {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
                transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
                background-color: none;
            }

            footer {
                width: 100%;
                height: 16vh;
            }

            .reseaux {
                width: 33.4%;
                height: 15vh;
            }

            .reseaux img {
                height: 6.7vh;
                margin: 7vh auto;
            }

            .fichec {
                width: 33.3%;
                height: 15vh;
            }

            #customControlValidation1:checked~.custom-control-label::before 
            {
                color: #fff200;
                border-color: #fff200;
                background-color: #fff200;
            }

            #customControlValidation2:checked~.custom-control-label::before 
            {
                color: #00aeef;
                border-color: #00aeef;
                background-color: #00aeef;
            }


            #customControlValidation3:checked~.custom-control-label::before 
            {
                color: #00a651;
                border-color: #00a651;
                background-color: #00a651;
            }

            .footerhaut {
                display: flex;
                justify-content: space-evenly;
            }

            .footerbas {
                display: flex;
                justify-content: center;
            }

            .colonne1 {
                width: 30%;
                align-items: center;
                color: black !important;
                text-decoration: none !important;
                display: flex;
                flex-direction: column;
            }

            .ftext1 {
                text-decoration: none;
                color: black;
            }

            .ftext1:hover {
                text-decoration: none;
                color: black;
                background-color: blue;
                color: white;
            }

            .colonne2 {
                width: 30%;
                color: black !important;
                text-decoration: none !important;
            }

            .ftext2 {
                text-decoration: none;
                color: black;
            }

            .ftext2:hover {
                text-decoration: none;
                color: black;
                background-color: blue;
                color: white;
            }

            .colonne3 {
                display: flex;
                align-items: center;
                width: 30%;
                justify-content: center;
            }

            .colonne4 {
                width: 100%;
                margin-bottom: 10%;
                margin-top: 2vh;
                display: none;
            }

            .snap {
                width: 50%;
                height: 10vh;
            }

            .snap:hover {
                transition: all ease .3s .1s;
            }

            .fb {
                width: 50%;
                height: 10vh;
            }

            .fb:hover {
                transition: all ease .3s .1s;
            }

            .insta {
                width: 50%;
                height: 10vh;
            }

            .insta:hover {
                transition: all ease .3s .1s;
            }

            .flogo {
                width: 11.5%;
                height: 38%;
            }

            img {
                border-style: none;
                height: 60%;
            }
        }

        @media all and (min-width: 451px) and (max-width: 768px) {

            .test {
                height: 122vh;
                display: flex;
                justify-content: center;
            }

            .test2 {
                display: none !important;
            }

            .test3 {
                display: flex;
                flex-direction: column;
                text-align: center;
                height: 22vh;
                width: 100%;
                border-bottom: 1px solid grey;
            }

            .num {
                margin: auto;
                width: 75%;
                height: 10vh;
            }

            .traits1 {
                display: none;
            }

            .traits2 {
                width: 100%;
                border-top: 1px solid #000;
                height: 0.5vh;
                align-items: center;
            }

            .titrec {
                height: 5vh;
                text-align: center;
            }

            .traitori {
                background-color: black;
                height: 2px;
            }

            .espace {
                margin-top: 5px;
            }

            .radbox {
                height: 15vh;
                display: flex;
            }

            .labe {
                width: 25%;
            }

            .star {
                display: initial;
                width: 75%;
                height: 15vh;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            .checkio {
                width: 100%;
                height: 4vh;
                display: flex;
            }

            .checkio1 {
                width: 100%;
                height: 10vh;
                display: flex;
            }

            #customControlValidation1:checked~.custom-control-label::before 
            {
                color: #fff200;
                border-color: #fff200;
                background-color: #fff200;
            }

            #customControlValidation2:checked~.custom-control-label::before 
            {
                color: #00aeef;
                border-color: #00aeef;
                background-color: #00aeef;
            }

            #customControlValidation3:checked~.custom-control-label::before 
            {
                color: #00a651;
                border-color: #00a651;
                background-color: #00a651;
            }

            .put {
                width: 33.3%;
                height: 2vh;
            }

            .put1 {
                width: 33%;
                height: 6vh;
                margin-top: 1vh;
            }

            .btn {
                margin-left: 5vh;
                width: 75%;
            }

            /* animation bouton */

            .hvr-bounce-to-right {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);

                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: red;
                position: relative;
                -webkit-transition-property: color;
                transition-property: color;
                -webkit-transition-duration: 0s;
                transition-duration: 0s;

            }

            .hvr-bounce-to-right:before {
                content: "";
                position: absolute;
                z-index: -1;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: black;
                /* regler couleur de l'animation */
                -webkit-transform: scaleX(0);
                transform: scaleX(0);
                -webkit-transform-origin: 0 50%;
                transform-origin: 0 50%;
                -webkit-transition-property: transform;
                transition-property: transform;
                -webkit-transition-duration: 1.5s;
                transition-duration: 1.5s;
                /* regler vitesse animation */
                -webkit-transition-timing-function: ease-out;
                transition-timing-function: ease-out;
                background-color: none;
            }

            .hvr-bounce-to-right:hover,
            .hvr-bounce-to-right:focus,
            .hvr-bounce-to-right:active {
                color: white;
                /* changer couleur du text dans l'animation */
                background: none;
                /* changer couleur background en dessous de l'animation */

            }

            .hvr-bounce-to-right:hover:before,
            .hvr-bounce-to-right:focus:before,
            .hvr-bounce-to-right:active:before {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
                transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
                background-color: none;
            }

            .colonne3 {
                width: 100%;
                margin-bottom: 10%;
                margin-top: 2vh;
                display: none;
            }

            .colonne4 {
                width: 100%;
                margin-bottom: 2%;
                margin-top: 2vh;
                height: 10vh;
                display: flex;
            }

            .flogo {
                width: 6%;
                display: flex;
                justify-content: center;
            }

            .alignf {
                text-align: center !important;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .snap {
                width: 35%;
                height: 5vh;
            }

            .fb {
                width: 35%;
                height: 5vh;
            }

            .insta {
                width: 35%;
                height: 5vh;
            }

            .img1 {
                width: 40%;
                height: 5vh;
            }

            .img2 {
                width: 33.3%;
                height: 5vh;
            }

            img {
                vertical-align: middle;
                border-style: none;
                height: 90%;
            }
        }

        @media all and (max-width: 450px) {
            .radbox {
                height: 15vh;
                display: flex;
            }

            .test {
                height: 125vh;
                display: flex;
            }

            .test2 {
                display: none;
            }

            .test3 {
                display: flex;
                flex-direction: column;
                text-align: center;
                height: 23vh;
                width: 100%;
                border-bottom: 1px solid grey;
            }

            .num {
                margin: auto;
                width: 75%;
                height: 10vh;
            }

            .traits1 {
                display: none;
            }

            .traits2 {
                width: 100%;
                border-top: 1px solid #000;
                height: 0;
                align-items: center;
            }

            .labe {
                width: 25%;
            }

            .star {
                display: initial;
                width: 75%;
                height: 15vh;
            }

            .for {
                width: 100%;
                height: 70vh;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            .checkio {
                width: 100%;
                height: 4vh;
                display: flex;
            }

            .checkio1 {
                width: 100%;
                height: 10vh;
                display: flex;
            }

            .put {
                width: 33.3%;
                height: 2vh;
            }

            .put1 {
                width: 33.3%;
                height: 6vh;
            }

            .btn {
                width: 50%;
                margin: auto;
            }

            /* animation bouton */

            .hvr-bounce-to-right {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);

                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: red;
                position: relative;
                -webkit-transition-property: color;
                transition-property: color;
                -webkit-transition-duration: 0s;
                transition-duration: 0s;

            }

            .hvr-bounce-to-right:before {
                content: "";
                position: absolute;
                z-index: -1;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: black;
                /* regler couleur de l'animation */
                -webkit-transform: scaleX(0);
                transform: scaleX(0);
                -webkit-transform-origin: 0 50%;
                transform-origin: 0 50%;
                -webkit-transition-property: transform;
                transition-property: transform;
                -webkit-transition-duration: 1.5s;
                transition-duration: 1.5s;
                /* regler vitesse animation */
                -webkit-transition-timing-function: ease-out;
                transition-timing-function: ease-out;
                background-color: none;
            }

            .hvr-bounce-to-right:hover,
            .hvr-bounce-to-right:focus,
            .hvr-bounce-to-right:active {
                color: white;
                /* changer couleur du text dans l'animation */
                background: none;
                /* changer couleur background en dessous de l'animation */

            }

            .hvr-bounce-to-right:hover:before,
            .hvr-bounce-to-right:focus:before,
            .hvr-bounce-to-right:active:before {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
                transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
                background-color: none;
            }

            footer {
                border-top: 1px solid black;
            }

            #customControlValidation1:checked~.custom-control-label::before 
            {
                color: #fff200;
                border-color: #fff200;
                background-color: #fff200;
            }

            #customControlValidation2:checked~.custom-control-label::before 
            {
                color: #00aeef;
                border-color: #00aeef;
                background-color: #00aeef;
            }

            #customControlValidation3:checked~.custom-control-label::before 
            {
                color: #00a651;
                border-color: #00a651;
                background-color: #00a651;
            }

            .flogo {
                width: 13%;
                margin-bottom: 15%;
            }

            .footerhaut {
                flex-direction: column-reverse;
            }

            .colonne2 {
                order: -1;
            }

            .footerhaut {
                align-items: center;
                text-align: center;
            }

            .colonne3 {
                width: 100%;
                margin-bottom: 10%;
                margin-top: 2vh;
                display: none;
            }

            .colonne4 {
                width: 100%;
                margin-bottom: 2%;
                margin-top: 2vh;
                height: 10vh;
                display: flex;
            }

            .snap {
                width: 40%;
                height: 10vh;
            }

            .fb {
                width: 40%;
                height: 10vh;
            }

            .insta {
                width: 40%;
                height: 10vh;
            }

            .alignf {
                text-align: center !important;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .img1 {
                width: 40%;
                height: 5vh;
            }

            .img2 {
                width: 33.3%;
                height: 5vh;
            }

            img {
                vertical-align: middle;
                border-style: none;
                height: 50%;
            }
        }
    </style>




<?php
        // echo '<pre>'; print_r($_POST); echo '</pre>';
        // 2. CONNEXION BDD :
        $bdd = new PDO('mysql:host=localhost;dbname=ckmpro', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        if($_POST)
        {
            echo '<pre>'; print_r($_POST); echo '</pre>';
            $categorie = implode(' ', $_POST['categorie']); 

            // 4. INSERTION DANS LA BASE DE DONNEES.

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $categorie = ['categorie'];
            $message = $_POST['message'];
            $question3D = $_POST['question3D'];
            $questionNet = $_POST['questionNet'];
            $questionEV = $_POST['questionEV'];

            
            $data = $bdd->prepare("INSERT INTO contact (nom, prenom, email, telephone, categorie, message, question3D, questionNet, questionEV) VALUE ('$nom', '$prenom', '$email', '$telephone', '$categorie', '$message', '$question3D', '$questionNet', '$questionEV')";);
            $data->execute(array
            (
                ':nom' => $nom, 
                ':prenom' => $prenom, 
                ':email' => $email,
                ':telephone' => $telephone, 
                ':categorie' => $categorie,
                ':message' => $message, 
                ':question3D' => $question3D,
                ':questionNet' => $questionNet, 
                ':questionEV' => $questionEV, 
                
            ));
            // Nom
            if(empty($_POST['nom']))
            {
                $erreurNom =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
                $erreur = true;
            }
            else
            {
                if(!preg_match('#^[a-zA-Z0-9._-]{2,20}+$#',$_POST['nom']))
                {
                    $erreurNomCaractere = "<p class='text-danger font-italic'>* Caract??res autoris??s : [a-z et A-Z]</p>";
                    $erreur = true;
                }
            }
            // Prenom
            if(empty($_POST['prenom']))
            {
                $erreurPrenom =  "<p class='text-danger font-italic'>* Champs obligatoire </p>";
                $erreur = true;
            }
            else
            {
                if(!preg_match('#^[a-zA-Z0-9._-]{2,20}+$#',$_POST['prenom']))
                {
                    $erreurPrenomCaractere = "<p class='text-danger font-italic'>* Caract??res autoris??s : [a-z et A-Z]</p>";
                    $erreur = true;
                }
            }

            // MESSAGE DE VALIDATION DE L'ENVOI DU FORMULAIRE
            if(!isset($error))
            {
                echo 'test';
                $valid = '<p class="alert alert-success text-center col-md-6 mx-auto">Votre message ?? bien ??t?? envoy??</p>';
            }
            // Si l'internaute ?? correctement rempli le formulaire, on affcihe le message de validation.
            if(isset($valid)) echo $valid;
            
        }
    ?>


    <div class="container-fluid">
        <h2 class="text-center">Ecrivez-nous</h2>
        <main class="test">
            <div class="test2">
                <div class="titrec">
                    <h2 class="text-center">Contact</h2>
                    <div class="num">
                        <p>Numero de t??l??phone: <br>
                            0123456789
                        </p>
                    </div>
                </div>
            </div>
            <div class="traits1"></div>
            <div class="for">
                <div class="test3">
                    <!--responsive tablette-->
                    <div class="titrec">
                        <h2 class="">Contact</h2>
                        <br>
                        <div class="num">
                            <p>Numero de t??l??phone: <br>
                                0123456789
                            </p>
                        </div>
                    </div>
                </div>
                <!--responsive tablette-->
                <div class="traits2"></div>


                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputName1">Nom*</label>
                        <input type="text" class="form-control" aria-describedby="nameHelp" id="nom" name="nom">
                        <?php if(isset($erreurNom)) echo $erreurNom; // Erreur nom ?>
                        <?php if(isset($erreurNomCaractere)) echo $erreurNomCaractere; // Erreur nom Caract??re?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFirsteName1">Prenom*</label>
                        <input type="text" class="form-control" id="prenom" name="prenom">
                        <?php if(isset($erreurPrenom)) echo $erreurPrenom; // Erreur prenom ?>
                        <?php if(isset($erreurPrenomCaractere)) echo $erreurPrenomCaractere; // Erreur prenom Caract??re?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email*</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" id="email" name="email"
                            placeholder="saisir votre email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone1">T??l??phone</label>
                        <input type="phone" class="form-control" aria-describedby="phoneHelp" id="telephone"
                            name="telephone" placeholder="saisir votre t??l??phone">
                    </div>
                    <div class="radbox">
                        <div class="form-check labe">Activit??*</div>
                        <div class="star">
                            <div class="checkio">
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1"
                                        name="categorie[]" value="3D">
                                    <label class="custom-control-label" for="customControlValidation1"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation2"
                                        name="categorie[]" value="nettoyage">
                                    <label class="custom-control-label" for="customControlValidation2"></label>
                                </div>
                                <div class="custom-control custom-radio text-center put">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation3"
                                        name="categorie[]" value="espacesVerts">
                                    <label class="custom-control-label" for="customControlValidation3"></label>
                                </div>
                            </div>
                            <div class="checkio1">
                                <p class="text-center put1">3D<br>
                                    Deratisation <br>
                                    Desinfection <br>
                                    Desinsectisation <br>
                                </p>
                                <p class="text-center put1">Nettoyage</p>
                                <p class="text-center put1">Espaces Verts</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <select class="form-control" style="display:none" id="showInDropDown1" name="question3D[]">3D
                        <option></option>
                        <option value="question3D1">Question 3D 1</option>
                        <option value="question3D2">Question 3D 2</option>
                        <option value="question3D3">Question 3D 3</option>
                    </select>
                    <br>
                    <select class="form-control" style="display:none" id="showInDropDown2"
                        name="questionNet[]">Nettoyage
                        <option></option>
                        <option value="questionNettoyage1">Question Nettoyage 1</option>
                        <option value="questionNettoyage2">Question Nettoyage 2</option>
                        <option value="questionNettoyage3">Question Nettoyage 3</option>
                    </select>
                    <br>
                    <select class="form-control" style="display:none" id="showInDropDown3" name="questionEV[]">Espaces verts
                        <option></option>
                        <option value="questionEspacesVerts1">Question Espaces Verts 1</option>
                        <option value="questionEspacesVerts2">Question Espaces Verts 2</option>
                        <option value="questionEspacesVerts3">Question Espaces Verts 3</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="message" name="message" rows="5"
                            placeholder="saisir votre message"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn border-dark hvr-bounce-to-right">Envoyer</button>
                </form>

            </div>
        </main>
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
            <script>
                (function () {
                    var setting = {
                        "height": 512,
                        "width": "100%",
                        "zoom": 17,
                        "queryString": "39 Rue Paul Doumer, 78130 Les Mureaux, France",
                        "place_id": "ChIJfdZqCpKS5kcRFerEh13H6cg",
                        "satellite": false,
                        "centerCoord": [48.9955122682653, 1.9106021499999848],
                        "cid": "0xc8e9c75d87c4ea15",
                        "lang": "fr",
                        "cityUrl": "/france/versailles-903",
                        "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                        "embed_id": "156020"
                    };
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=156020';
                    s.async = true;
                    s.onload = function (e) {
                        window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                })();
            </script><a href="https://1map.com/fr/map-embed?embed_id=156020">1 Map</a>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
                $(function () {
                    $("#customControlValidation1").click(function () {
                        if ($(this).is(":checked")) {
                            $("#showInDropDown1").show();
                        } else {
                            $("#showInDropDown1").hide();
                        }
                    });
                });

                $(function () {
                    $("#customControlValidation2").click(function () {
                        if ($(this).is(":checked")) {
                            $("#showInDropDown2").show();
                        } else {
                            $("#showInDropDown2").hide();
                        }
                    });
                });

                $(function () {
                    $("#customControlValidation3").click(function () {
                        if ($(this).is(":checked")) {
                            $("#showInDropDown3").show();
                        } else {
                            $("#showInDropDown3").hide();
                        }
                    });
                });
            </script>

        <?php 
            require_once("include/footer.php");
        ?>