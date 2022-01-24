function loadSchool(offset) {
    var req = new XMLHttpRequest();
    req.open('GET', 'app/controllers/getSchool.php?offset=' + offset);
    req.onload = function() {

        var schools = JSON.parse(this.responseText);
        renderSchools(schools, offset);

        console.log(schools);
    }
    req.send();
}

loadSchool(0);

function renderSchools(schools, offset) {
    let schoolTemplate = '';
    schools.forEach(function(schoolItem) {
        schoolTemplate += `
        <div class="schoolItem" onclick="showrouterScreen('downloader');loadActiveSchoolHeader('${schoolItem.idSchool}','${schoolItem.logo}','${schoolItem.name}','${schoolItem.totalEpreuve}'); loadTests(${schoolItem.idSchool})" id='${schoolItem.idSchool}'>
            <div class="logo">
                <img src="${schoolItem.logo}" alt="" />
                <div class="nom">${schoolItem.name}</div>
            </div>
            <div>
                <div class="numEpreuve">${schoolItem.totalEpreuve}   epreuve(s)</div>
                <div class="manager">
                    <img src="images/project/admin.svg" alt="">
                   <div> Gerer par ${schoolItem.pseudo}  </div>
                 </div>
            </div>
        </div>
        `
    })
    if (offset == 0) {
        $("#schoolContainer").innerHTML = schoolTemplate;
    } else {
        $("#schoolContainer").innerHTML += schoolTemplate;
    }

    if (schools.length == 0) {
        $("#schoolContainer").innerHTML = `
        <div class="noData">
            <img src="images/project/noData.png" alt="">
        </div>`;
    }
}

$("#searchToken").addEventListener("keyup", function(e) {
    search();
})

function search() {

    let searchToken = $("#searchToken").value;
    if (searchToken.length > 0) {
        $(".searchIcon img").src = "images/project/close.png";
        // API Call
        console.log(searchToken);
        var req = new XMLHttpRequest();
        req.open('GET', 'app/controllers/searchSchool.php?token=' + searchToken);
        req.onload = function() {

            console.log(this.responseText);

            var schools = JSON.parse(this.responseText);
            renderSchools(schools, 0);

            console.log(schools);
            console.log("Gotham works")
        }
        req.send();
    }

}

function closeSearch() {
    $(".searchIcon img").src = "images/project/search.png";
    $("#searchToken").value = '';
    loadSchool(0);
}