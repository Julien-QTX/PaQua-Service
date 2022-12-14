<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <title>CKM pro</title>

    <style>
          /* class de la div qui contient l'image logo titre */
          .logo {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25vh;
          }
          /* image logo titre */
          .logo #logoHome {
            width: 25%;
          }
          /* class de la div qui contient le num et le nom */
          .fixed-top {
            display: flex;
            justify-content: flex-end;
            margin-right: 2vh;
          }
          /* class de la div qui contient l'image logo titre  */
          .lienImageLogoHome {
            padding-bottom: 10px;
          }
          /* li qui contient le lien et l'image logo Home  */
          #homeLogo {
            width: 50%;
            height: 50%;
            margin: 0 20px;
            padding-bottom: 1.99vh;
          }
          .fixed-top 
          {
            display: flex;
            justify-content: flex-end;
            margin-right: 2vh;
            font-size: 1.2em;
          }
          .navbar
          {
            display:block;
          }
          .navbar-expand-lg .navbar-nav {
            justify-content:center;
          }
          /* bouton menu burger */
          .navbar-toggler {
            border: 0;
          }
          /* li qui contient les liens (3D, Nettoyage, Espaces Verts, Galeries */
          .nav-item1 {
            padding-left: 30px;
          }
          /* liste nav qui contient tout mes li */
          .navbar-nav {
            align-items: center;
            display:flex;
            flex-direction:row;
          }
          .rounded 
          {
            border-radius: .25rem!important;
          }
          /* S??paration entre les liens (Menu burger d??roulant)  */
          .trait1, .trait2, .trait3, .trait4, .trait5 {
            width: 40%;
            height: 1px;
            background-color: black;
            padding-left: 30px;
          }
          /* S??paration entre le header et le main */
          .trait6 {
            width: 100%;
            height: 1px;
            background-color: black;
          }
          .dropdown-item
          {
            font-size:1.8em;
          }
          .navbar-light .navbar-nav .nav-link 
          {
            color:black;
          }
          /* lien du d??roulant */
          .dropdown-item1 {
            color: black;
            text-decoration: none;
            background-color: transparent;
          }
          .dropdownDiv01 {
            display: grid;
          }
          .navbar
          {
            display: none;
          }
          .navbar-expand-lg .navbar-nav 
          {
            justify-content: center;
            font-size: 4vh;
          }
          .boutonTel {
            display: none;
          }
          
/* RESPONSIVE-------------------------------------------------------------------------------------------------------------- */


/* FORMAT PC */
            @media screen and (min-width: 769px) and (max-width: 2560px) {
            /* On cache l'icone telephone */
            #fass {
              display: none;
            }
            /* On cache le text 'Menu' sur le bouton */
            .textMenu {
              display: none;
            }
            /* On cache les traits */
            .trait {
              display: none;
            }
            /* style du d??roulant de la nav */
            .dropdown-menu{
              justify-content: center;
              border: 0;
              background-color: transparent;
            }
            /* On cache les traits */
            .navbar-toggle {
              display: none;
            }
            #homeLogo {
              width: 60%;
              height: 60%;
              margin: 0;
              padding-bottom: 0.9vh;
              padding-right: 4vh;
            }
            .logo #logoHome 
            {
              width: 40%;
            }
            .fixed-top
            {
              font-size:1.5em;
            }
            #dropdownDiv01, #dropdownDiv02 {
              text-align: center;
            }
            #dropdownDiv01 {
              left: -75px !important;
            }
            #dropdownDiv02 {
              left: -20px !important;
            }
            .nav-item1 {
              padding-left: 10vh;
            }
            /* hover style '3D' */
          #dropdown1:hover {
            background-color: #fef200;
            border-radius: 5px;
            /* opacity: 0.2; */
          }
          #jaune:hover {
            background-color: #fef200;
            border-radius: 5px;
          }
          /* hover style 'Nettoyage' */
          #navNettoyage:hover {
            background-color: RGB(37, 170, 226);
            border-radius: 5px;
          }
          /* hover style 'Espaces Verts' */
          #dropdown03:hover {
            background-color: #00a652;
            border-radius: 5px;
          }
          /* hover style lien D??ratisation / D??sinfection / D??sensectisation */
          .dropdown-item01:hover {
            background-color: #fef200 !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          /* hover style lien 3D */
          .dropdown-item04:hover {
            background-color: #fef200 !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          /* hover style lien Nettoyage */
          .dropdown-item05:hover {
            background-color: #25aae2 !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          /* hover style lien Espace Verts */
          .dropdown-item06:hover {
            background-color: #00a652 !important;
            border-radius: 5px !important;
            opacity: 0.5 !important;
          }
          }

            
/* FORMAT TABLETTE */

            @media screen and (min-width: 451px) and (max-width: 768px) {
            /* class de la div qui contient le num et le nom */
            .fixed-top {
              width: 50% !important;
              float: right !important;
              padding-left: 10vh !important;
              position: inherit !important;
            }
            /* icone t??l??phone */
            #fas {
              display: none;
            }
            /* On cache le text 'Menu' sur le bouton */
            .textMenu {
              display: none;
            }
            /* On cache les traits */
            .trait {
              display: none;
            }  
            .navbar-nav 
            {
              display: flex;
              padding-left: 0;
              margin-bottom: 0;
              list-style: none;
              flex-direction: row;
            }
            .justify-content-md-center 
            {
              justify-content: center!important;
              display: flex !important;
            }
            [type=button], [type=reset], [type=submit], button 
            {
              -webkit-appearance: button;
              display: none;
            }
            #homeLogo
            {
              margin-right:30px;
            }
            .navbar-expand-lg .navbar-nav 
            {
              justify-content: center;
              font-size: 3vh;
            }
            .logo #logoHome 
            {
              width: 60%;
            }
              .fixed-top
            {
              font-size:1.2em;
            }
            #dropdownDiv01 {
              text-align: left !important;
              left: -3vh !important;
              font-size: 0.4em;
            }
            #dropdownDiv02 {
              text-align: right !important;
              left: -6vh;
              font-size: 0.4em;
            }
            .dropdown-menu {
              background-color: transparent;
              border: 0;
            }
          }

/* FORMAT MOBILE  */
          @media screen and (max-width: 450px) {
            /* On cache l'icone telephone */
            .fas {
              display: none;
            }
            /* class de la div qui contient le num et le nom */
            .fixed-top {
              justify-content: space-between !important;
              display: none;
              width: 100% !important;
            }
            /* image logo titre */
            .logo #logoHome {
              width: 90%;
            }
            /* num??ro */
            #num {
              width: 50%;
              padding-left: 4vh;
            }
            /* nom d'entreprise */
            #nom {
              width: 35%;
            }
            /* icone t??l??phone */
            #fas {
              display: none;
            }
            /* li qui contient les liens (3D, Nettoyage, Espaces Verts, Galeries */
            .nav-item1 {
              padding-left: 0;
            }
            .navbar
            {
              display:flex;
              flex-direction:column;
            }
            .navbar-nav
            {
              display:flex;
              flex-direction:column;
              justify-content:center;
            }
            .ordi
            {
              display:none;
            }
            .burger
            {
              background:url(CKMpro/img/burger.png) no-repeat;
              background-size:cover;
              width:20%;
            }
            .ml-auto, .mx-auto 
            {
              margin-left: auto!important;
              display: flex;
              flex-direction: column;
              align-items: center;
            }
            [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) 
            {
              cursor: pointer;
              display: flex;
              justify-content: center;
            }
            #homeLogo
            {
              margin:30px 20px 0;
              padding-left: 50px;
            }
            /* Bouton t??l??phone  */
            .boutonTel {
              width: 8vh;
              height: 8vh;
              background-color: lightgrey;
              border: 1px solid black;
              border-radius: 50%;
              display: flex;
              justify-content: center;
              align-items: center;
              position: fixed;
              z-index: 1;
              right: 5px;
              top: 21vh;
            }
            #lienTel {
              color: black;
              text-decoration: none;
              background-color: transparent;
            }
            #iconTel {
              font-size: 2em;
              display: block;<
            }
            .dropdown-menu {
              border: 0px;
              text-align: center;
            }
            .navbar-light .navbar-nav .nav-link {
              color: rgba(0,0,0,.5);
              text-align: center;
            }
            #dropdownDiv01 {
              font-size: 0.4em;
            }
            #dropdownDiv02 {
              font-size: 0.4em;
            }
            .navbar-light .navbar-nav .nav-link {
              color: black;
            }
          }

    </style>

</head>
<body>
    <header>
      <div class="container-fluid">
        <div class="fixed-top">
          <div id="num">
            <i class="fas fa-phone-alt" id="fass"></i> &nbsp; 0123456789 <i class="fas fa-phone-alt" id="fas"></i> &nbsp;
          </div>
          <div id="nom">
              &nbsp; CKM Boutique
          </div>
          <i class="baseline-speaker_phone"></i>
        </div>
        <div class="logo">
          <img src="img/LOGOCKMPRODEF.png" alt="logo" id="logoHome">
        </div>



        <div class="ordi navbar-expand-lg navbar-light rounded mobil">
          <div class="mx-auto">
            <p class="textMenu"><strong>Menu</strong></p>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01"  aria-label="Toggle navigation">
              <div><i class="fas fa-bars"></i></div>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-md-center">
            <ul class="navbar-nav">
              <li class="nav-item1 lienImageLogoHome">
                <a class="navbar-brand1" href="#"><img src="img/CKMHOMEBTN.png" alt="homeLogo" id="homeLogo"></a>
              </li>
              <div class="trait trait1"></div>
              <li class="nav-item dropdown" id="jaune">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                  <a class="dropdown-item dropdown-item01" href="#">D??ratisation</a>
                  <a class="dropdown-item dropdown-item01" href="#">D??sinfection</a>
                  <a class="dropdown-item dropdown-item01" href="#">D??sinsectisation</a>
                </div>
              </li>
              <div class="trait trait2"></div>
              <li class="nav-item1 active">
                <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown">Nettoyage</a>
              </li>
              <div class="trait trait3"></div>
              <li class="nav-item1 active">
                <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
              </li>
              <div class="trait trait4"></div>
              <li class="nav-item1 active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeries</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdownDiv02">
                  <a class="dropdown-item dropdown-item04" href="#">3D</a>
                  <a class="dropdown-item dropdown-item05" href="#">Nettoyage</a>
                  <a class="dropdown-item dropdown-item06" href="#">Espaces Verts</a>
                </div>
              </li>
              <div class="trait trait5"></div>
            </ul>
          </div>
        </div>

        
      
        <nav class="navbar navbar-expand-lg navbar-light rounded">

          <div class="mx-auto">
            <p class="textMenu"><strong>Menu</strong></p>
            <a class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01"  aria-label="Toggle navigation">
              <div><i class="fas fa-bars"></i></div><img src="img/burger.png" class="burger" alt="">
            </a>
          </div>
      
          <div id="navbarsExample01">
            <ul class="navbar-nav">
              <li class="nav-item1 lienImageLogoHome">
                <a class="navbar-brand1" href="#"><img src="img/CKMHOMEBTN.png" alt="homeLogo" id="homeLogo"></a>
              </li>
              <div class="trait trait1"></div>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3D</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdownDiv01">
                  <a class="dropdown-item dropdown-item01" href="#">D??ratisation</a>
                  <a class="dropdown-item dropdown-item02" href="#">D??sinfection</a>
                  <a class="dropdown-item dropdown-item03" href="#">D??sinsectisation</a>
                </div>
              </li>

              <div class="trait trait2"></div>

              <li class="nav-item1 active">
                <a class="nav-link" href="#" id="navNettoyage" data-toggle="dropdown">Nettoyage</a>
              </li>
              <div class="trait trait3"></div>

              <li class="nav-item1 active">
                <a class="nav-link" href="#" id="dropdown03">Espaces Verts</a>
              </li>
              <div class="trait trait4"></div>



              <li class="nav-item1 active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeries</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdownDiv02">
                  <a class="dropdown-item dropdown-item01" href="#">3D</a>
                  <a class="dropdown-item dropdown-item02" href="#">Nettoyage</a>
                  <a class="dropdown-item dropdown-item03" href="#">Espaces Verts</a>
                </div>
              </li>
              <div class="trait trait5"></div>

            </ul>
          </div>

      </nav>

      <div class="trait6"></div>

      <div class="boutonTel">
        <a href="tel:+33123456789" id="lienTel"><i class="fas fa-phone-alt" id="iconTel"></i></a>
      </div>
    </div>
  </header>
  <!-- <section style="background-color: red; height: 60vh; width: 95%;" class="mx-auto">
      
  </section> -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>