<div class="formContainer">
    <h1>Ajouter une epreuve</h1>
    <div class="form">
        <input type="file" hidden id="subject">
        <div class="fileUpload">
            <img src="images/project/file.png" alt="">
            <p>Ajouter un fichier</p>
        </div>
        <div class="formItem">
            <div class="label">Nom de la matiere</div>
            <input class="input" placeholder="Entrez le nom de la matiere" />
        </div>
        <div class="formItem">
            <div class="label">Annee scolaire</div>
            <input class="password" placeholder="Entrez l'annee scolaire" />
        </div>
        <div class="formItem">
            <div class="label">Selectionner le type d'examen</div>
            <select name="typeExam" id="typeExam">
                <option value="CC">CC</option>
                <option value="Normale">Normale</option>
                <option value="Rattrapage">Rattrapage</option>
            </select>

        </div>
    </div>
    <div class="button CTAButton" onclick="login()">Ajouter l'epreuve</div>
</div>