<div class="formContainer">
    <h1>S'enregistrer</h1>
    <div class="form">
        <input type="file" hidden id="subject" id="nameRegister">
        <div class="fileUpload">
            <img src="images/project/file.png" alt="">
            <p>Logo de votre ecole</p>
        </div>
        <div class="formItem">
            <div class="label">Nom ecole</div>
            <input type="input" placeholder="Entrez le nom de votre ecole" id="nameRegister" />
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
    <div class="button CTAButton" onclick="login()">S'enregistrer</div>
</div>