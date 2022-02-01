<h1>S'enregistrer</h1>
<div class="formContainer" id="registerStudentForm">
    <div class="form">

        <div class="formItem">
            <input type="file" hidden id="studentProfile">
            <div class="label">Photo de profile</div>
            <div class="fileUpload" onclick="loadStudentProfile()" id="fileUploadRegisterStudent">
                <img src="images/project/file.png" alt="">
                <p id="nameFile">Cliquez pour importer votre photo de profile</p>
            </div>
           
        </div>

        <div class="formItem">
            <div class="label">Votre Pseudo</div>
            <input type="input" placeholder="Entrez votre pseudo" id="pseudoRegisterStudent" />
            <div class="errorField">
                <img src="images/project/warning.png" alt="">
                <span>Veuillez remplir ce champ</span>
            </div>
        </div>
        <div class="formItem">
            <div class="label">Votre email</div>
            <input type="email" placeholder="Entrez votre email" id="emailRegisterStudent" />
            <div class="errorField">
                <img src="images/project/warning.png" alt="">
                <span>Email incorrect</span>
            </div>
        </div>
        <div class="formItem">
            <div class="label">Mot de passe</div>
            <input type="password" placeholder="Entrez le mot de passe" id="mdpRegisterStudent" />
            <div class="errorField">
                <img src="images/project/warning.png" alt="">
                <span>Veuillez remplir ce champ</span>
            </div>
        </div>
        <div class="formItem">
            <div class="label">Confirmer le mot de passe</div>
            <input type="password" placeholder="Confirmer  le mot de passe" id="cmdpRegisterStudent" />
            <div class="errorField">
                <img src="images/project/warning.png" alt="">
                <span>Les deux mot de passe ne correspondent pas!</span>
            </div>
        </div>
    </div>


    <div class="errorField" id="errorCreateAccountStudent">
        <img src="images/project/warning.png" alt="">
        <span>Erreur Serveur! Pseudo deja utilise ou email deja utilise!</span>
    </div>
    <div class="info" id="successCreateAccountStudent">
        <img src="images/project/info.png" alt="">
        <span>Compte creer avec succes!</span>
    </div>
    <div class="button CTAButton" onclick="registerStudentProxy(this)" id="registerButtonStudent">S'enregistrer</div>
</div>