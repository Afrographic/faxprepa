<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaxPrepa</title>
    <link rel="icon" href="images/project/faxPrepaIcon.png">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="lib.js"></script>
    <style>
        img {
            width: 25px;
        }
    </style>
</head>

<body>
    <p>Name</p>
    <input type="text" name="name" id="name"><br>
    <p>Mdp</p>
    <input type="text" name="name" id="mdp"><br>
    <p>Logo</p>
    <input type="file" name="logo" id="logo">
    <input type="submit" name="submit" value="save" onclick="saveDataProxy()">
    <!-- Render the data -->
    <h2>Data fetched</h2>
    <table id="schoolsTable">
        <tr>
            <td>IdSchool</td>
            <td>Name</td>
            <td>Logo</td>
        </tr>
    </table>
    <script>
        function saveDataProxy() {
            let name = $('#name').value;
            let mdp = $('#mdp').value;
            let logo = $('#logo').files[0];
            if (name.length != 0 && logo != undefined && mdp.length != 0) {
                saveData(name, logo, mdp);
            } else {
                alert("Veuillez remplir tout les champs! c'est obliger LOL!!!")
            }

        }

        function saveData(name, logo, mdp) {
            let data = new FormData();
            data.append('name', name)
            data.append('mdp', mdp)
            data.append('logo', logo)
            let req = new XMLHttpRequest();
            req.open("POST", "app/controllers/saveFile.php");
            req.onload = function() {
                let res = JSON.parse(this.responseText);
                console.log(res);
                getSavedData();
            }
            req.send(data);
        }

        function getSavedData() {
            $('#schoolsTable').innerHTML = ` <tr>
                                                <td>IdSchool</td>
                                                <td>Name</td>
                                                <td>Logo</td>
                                            </tr>`;

            var req = new XMLHttpRequest();
            req.open('get', 'app/controllers/getSchool.php');
            req.onload = function() {
                var schools = JSON.parse(this.responseText);
                console.log(schools);
                renderTable(schools);

            }
            req.send();
        }
        getSavedData();

        function renderTable(schools) {
            let htmlTemplate = '';
            schools.forEach((schoolItem) => {
                htmlTemplate += `
                    <tr>
                        <td>${schoolItem.idSchool}</td>
                        <td>${schoolItem.name}</td>
                        <td>
                            <img src='${schoolItem.logo}'>
                        </td>
                    </tr>
                `
            })
            $('#schoolsTable').innerHTML += htmlTemplate;
        }
    </script>
</body>

</html>