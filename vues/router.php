<div class="router">
    <div class="headerrouter">
        <div onclick="closerouterScreen()">
            <img src="images/project/back.png" alt="" class="backIcon">
        </div>
        <div class="logo">
            <img src="images/project/faxPrepa.png" alt="" class="logoApp">
        </div>
    </div>
    <div class="routeItem " id="downloader">
        <?php require("routes/downloader.php") ?>
    </div>
    <div class="routeItem route-active" id="login">
        <?php require("routes/login.php") ?>
    </div>
    <div class="routeItem" id="register">
        <?php require("routes/register.php") ?>
    </div>
    <div class="routeItem" id="addSubject">
        <?php require("routes/addSubject.php") ?>
    </div>
    <div class="routeItem" id="gererTest">
        <?php require("routes/gereTest.php") ?>
    </div>
    <div class="routeItem" id="ajouterFiliere">
        <?php require("routes/addFiliere.php") ?>
    </div>
    <div class="footerrouter">
        2022 Afographix Studio
    </div>
</div>