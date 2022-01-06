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
    <title>FaxPrepa</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/project/faxPrepa.png" alt="" class="logoApp">
            </div>
            <div class="searchBar">
                <input type="text" placeholder="Entrez le nom de votre ecole">
                <div class="searchIcon">
                    <img src="images/project/search.png" alt="">
                </div>
            </div>
            <div class="actions">
                <div class="button CTAButtonSecondary">Se connecter</div>
                <div class="button CTAButton">S'enregistrer</div>
            </div>
        </div>
        <div class="mainContent">
            <div class="section">
                <img src="images/project/learning_illustration.svg" alt="">
                <h3>Retrouvez les anciens sujets de votre ecole pour booster vos preparations</h3>
            </div>
            <div class="application">
                <?php require("vues/download.php") ?>
                <?php require("vues/ecoles.php") ?>
            </div>
        </div>
        <div class="footer">
            CopyRight &copy; 2022 Afrographix Studio
        </div>
    </div>
</body>

</html>