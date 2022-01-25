<?php include_once dirname(__FILE__) . '/../db.php';
function getEpreuve($idSchool)
{
    global $con;
    $tests = [];
    $query = "select epreuve.*,school.pseudo from epreuve,school where idEcole = $idSchool and school.idSchool = $idSchool";
    $res =  mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $tests[] = $row;
    }
    return $tests;
}

function searchEpreuve($idSchool, $idFiliere, $annee, $niveau)
{
    global $con;
    $tests = [];
    $query = "select * from epreuve where idEcole = $idSchool and idFiliere = $idFiliere and annee like '%$annee%' and niveau like '%$niveau'";
    $res =  mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $tests[] = $row;
    }
    return $tests;
}



function createEpreuve($name, $annee, $taille, $idEcole, $idTypeEpreuve, $path, $niveau, $idFiliere)
{
    global $con;
    $query = "insert into epreuve(nom,annee,taille,path,idEcole,idTypeEpreuve,niveau,idFiliere) values('$name','$annee','$taille','$path','$idEcole','$idTypeEpreuve','$niveau','$idFiliere')";
    mysqli_query($con, $query);
    return true;
}

function deleteTest($idSubject)
{
    global $con;
    $query = "delete from epreuve where idEpreuve='$idSubject'";
    mysqli_query($con, $query);
    return true;
}
