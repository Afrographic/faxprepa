<div class="formContainer">
    <h1>Login</h1>
    <div class="form">
        <div class="formItem" id='name'>
            <div class="label">Nom ecole</div>
            <input type="text" placeholder="Entrez le nom de votre ecole" id='nameLogin' />
            <div class="errorField">
                <img src="images/project/warning.png" alt="">
                <span>Erreur sur ce champ</span>
            </div>
        </div>
        <div class="formItem" id='mdp'>
            <div class="label">Mot de passe</div>
            <input type="password" placeholder="Entrez le mot de passe" id='mdpLogin' />
            <div class="errorField">
                <img src="images/project/warning.png" alt="">
                <span>Erreur sur ce champ</span>
            </div>

        </div>
    </div>
    <div class="errorField" id='login-error'>
        <img src="images/project/warning.png" alt="">
        <span>Cet utilisateur n'existe pas!</span>
    </div><br>
    <div class="info" id="successLogin">
        <img src="images/project/info.png" alt="">
        <span>Vous etes connecter!</span>
    </div>
    <div class="button CTAButton" onclick="loginProxy(this)">Se connecter</div>
</div>