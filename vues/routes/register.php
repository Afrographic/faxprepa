<h1>S'enregistrer</h1>
<div class="formContainer" id="registerForm">

    <div class="form">

        <div class="formItem">
            <input type="file" hidden id="logoSchool">
            <div class="label">Logo</div>
            <div class="fileUpload" onclick="loadLogo()" id="fileUploadRegister">
                <img src="images/project/file.png" alt="">
                <p id="nameFile">Cliquez pour importer logo</p>
            </div>
        </div>

        <div class="formItem">
            <div class="label">Nom ecole</div>
            <input type="input" placeholder="Entrez le nom de votre ecole" id="nameRegister" />
        </div>
        <div class="formItem">
            <div class="label">Pseudo ecole</div>
            <input type="input" placeholder="Entrez le pseudo de votre ecole" id="pseudoRegister" />
        </div>
        <div class="formItem">
            <div class="label">Mot de passe</div>
            <input type="password" placeholder="Entrez le mot de passe" id="mdpRegister" />
        </div>
        <div class="formItem">
            <div class="label">Confirmer le mot de passe</div>
            <input type="password" placeholder="Confirmer  le mot de passe" id="cmdpRegister" />
        </div>
    </div>


    <div class="errorField" id="errorCreateAccount">
        <img src="images/project/warning.png" alt="">
        <span>Ce compte existe deja, veuillez vous connecter! ou bien changer de pseudo</span>
    </div>
    <div class="info" id="successCreateAccount">
        <img src="images/project/info.png" alt="">
        <span>Compte creer avec succes!</span>
    </div>
    <div class="button CTAButton" onclick="registerProxy(this)" id="registerButton">S'enregistrer</div>
</div>