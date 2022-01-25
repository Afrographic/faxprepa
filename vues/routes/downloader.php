<div class="schoolItem">
    <div class="logo">
        <img src="images/logoEcole/fasa.jpg" alt="" id="activeSchoolLogo" />
        <div class="nom" id="activeSchoolName">FASA - Faculte d'agronomie</div>
    </div>
    <div class="downloadSchoolItem">
        <div class="numEpreuve" id="activeSchoolNumTest">14 epreuves</div>
        <div class="manager">
            <img src="images/project/admin.svg" alt="">
            <div id="managerDownloader"> Gerer par </div>
        </div>
    </div>
</div>
<div class="filters">
    <div class="formItem">
        <div class="label">Filiere</div>
        <select name="" id="filter_Filiere">
            <!-- Will load from the server -->
        </select>
    </div>
    <div class="formItem">
        <div class="label">Annee</div>
        <input type="text" placeholder="Entrez l'annee'" id='filter_annee' />
        <div class="errorField">
            <img src="images/project/warning.png" alt="">
            <span>Erreur sur ce champ</span>
        </div>

    </div>

    <div class="formItem">
        <div class="label">Niveau</div>
        <input type="number" placeholder="Entrez le niveau" id='filter_niveau' />
        <div class="errorField">
            <img src="images/project/warning.png" alt="">
            <span>Erreur sur ce champ</span>
        </div>

    </div>
    <div>
        <div class="searchIcon" onclick="sortTests()">
            <img src="images/project/search.png" alt="">
        </div>
    </div>
</div>

<div class="tabs" id='typeTestTabs'>
    <div class="tabItem tab-active" onclick="setActive(this)">
        CC
    </div>
    <div class="tabItem" onclick="setActive(this)">
        Normale
    </div>
    <div class="tabItem" onclick="setActive(this)">
        Rattrapage
    </div>
</div>
<div class="testContainer" id="testContainer">

    <div class="testItem">
        <div class="iconFile">
            <div>
                <img src="images/project/pdf.png" alt="" />
            </div>

            <div class="nameSize">
                <div class='name'>Maths discrete zss sasdasd asfdasfa asf asf asfas</div>
                <div class='size'>785 KB</div>
            </div>
        </div>
        <div class="flex1 datePosted">
            Mise en ligne <br>
            <span class="dateMetaData">
                17/01/022
            </span>
        </div>
        <div class="flex1 datePosted">
            Annee <br>
            <span class="dateMetaData">
                2018/2019
            </span>
        </div>
        <div class="flex1 button CTAButtonSecondary">
            <div class="metaData">145</div>
            <img src="images/project/download.png" alt="" />
            Telecharger
        </div>
    </div>

</div>