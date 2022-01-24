<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/project/faxPrepaIcon.png">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ecole.css">
    <link rel="stylesheet" href="css/download.css">
    <link rel="stylesheet" href="css/router.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/gererTest.css">
    <link rel="stylesheet" href="css/mediaQuery.css">
    <title>FaxPrepa</title>
    <script src='lib.js'></script>
    <script src='scripts/index.js'></script>


</head>

<body>
    <div class="overflow" onclick="hideMenuMobile()"></div>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/project/faxPrepa.png" alt="" class="logoApp">
            </div>

            <div class="actions" id="menuPhone" onclick="hideMenuMobile()">
                <div class="logoSchoolLogedIn invisible">
                    <img src="" alt="" id="pathShoolSignedIn">
                </div>
                <!-- <div class="searchBar phone">
                    <input type="text" placeholder="Entrez le nom de votre ecole">
                    <div class="searchIcon">
                        <img src="images/project/search.png" alt="">
                    </div>
                </div> -->
                <div class="button CTAButtonSecondary invisible" onclick="logOut()" id="logOut">Deconnexion</div>
                <div class="button CTAButton invisible" onclick="showrouterScreen('addSubject')" id="publishSubjectUserLogedIn">Publier une epreuve</div>
                <div class="button CTAButtonSecondary" onclick="showrouterScreen('login')" id="connectUser">Se connecter</div>

                <div class="button CTAButton" onclick="showrouterScreen('register')" id="registerButtonFromIndex">S'enregistrer</div>


                <div class="logo phone">
                    <img src="images/project/faxPrepa.png" alt="" class="logoApp">
                </div>

                <div class="footer phone">
                    CopyRight &copy; 2022 Afrographix Studio
                </div>
            </div>
            <img src="images/project/menu.svg" alt="" class='menuToggle' onclick="activateMenuMobile()">
        </div>


        <div class="mainContent">
            <div class="section">
                <img src="images/project/learning_illustration.svg" alt="">
                <h3>Retrouvez les anciens sujets de votre ecole pour booster vos preparations</h3>
                <div class="affiliate" id='affiliate'>
                    <p>Nous rejoindre , creer un compte <br> et commencer a publier des epreuves</p>
                    <div class="button CTAButtonSecondary" onclick="showrouterScreen('register')">Creer un compte</div>
                </div>
                <div class="affiliate invisible" id='admin'>
                    <p>Cliquez sur le bouton ci-dessous pour gerer vos epreuves</p>
                    <div class="button CTAButtonSecondary" onclick="showrouterScreen('gererTest')">Gerer vos epreuves</div>
                </div>
            </div>
            <div class="application">
                <?php require("vues/router.php") ?>
                <?php require("vues/ecoles.php") ?>
            </div>
        </div>
        <div class="footer">
            CopyRight &copy; 2022 Afrographix Studio
        </div>
    </div>

    <script src='scripts/downloader.js'></script>
    <script src='scripts/router.js'></script>
    <script src='scripts/login.js'></script>
    <script src='scripts/register.js'></script>
    <script src='scripts/addSubject.js'></script>
    <script src='scripts/ecole.js'></script>
    <script src='scripts/test.js'></script>

    <script src='scripts/gererTest.js'></script>
    <script src='scripts/initUserAccount.js'></script>
</body>

</html>