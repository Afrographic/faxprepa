<h1>Ajouter une epreuve</h1>
<div class="formContainer">

    <div class="form">
        <div class="formItem">
            <input type="file" hidden id="subjectFile">
            <div class="label">Fichier</div>
            <div class="fileUpload" onclick="loadfile()" id="fileUploadAddSubject">
                <img src="images/project/file.png" alt="">
                <p id="nameFileSubject">Cliquez pour importer le sujet</p>
            </div>
        </div>
        <div class="formItem">
            <div class="label">Nom de la matiere</div>
            <input class="input" placeholder="Entrez le nom de la matiere" id="nomMatiere" />
        </div>

        <div class="formItem">
            <div class="label">Filiere</div>
            <select name="typeFiliere" id="filieres">
                <option value="Ingenieurie numerique sociotechnique">Ingenieurie numerique sociotechnique</option>
                <!-- Les filieres seront charges depuis le serveur -->
            </select>
        </div>
        <div class="button CTAButtonSecondary" onclick="showrouterScreen('ajouterFiliere')">Ajouter une filiere</div> <br><br>
        <div class="formItem">
            <div class="label">Niveau</div>
            <input type="number" placeholder="Entrez le niveau" id="niveau" />
        </div>

        <div class="formItem">
            <div class="label">Annee scolaire</div>
            <input class="password" placeholder="Entrez l'annee scolaire" id="anneMatiere" />
        </div>
        <div class="formItem">
            <div class="label">Selectionner le type d'examen</div>
            <select name="typeExam" id="typeExam">
                <!-- Les donnes seront charges depuis le serveur -->
            </select>
        </div>
    </div>
    <div class="button CTAButton" onclick="addSubjectProxy(this)" id="addSubjectButton">Ajouter l'epreuve</div>
</div>