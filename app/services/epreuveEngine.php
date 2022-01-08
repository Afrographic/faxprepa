<?php include_once dirname(__FILE__) . '/../db.php';
function getEpreuve($idSchool)
{
    global $con;
    $tests = [];
    $query = "select * from epreuve where idEcole = $idSchool";
    $res =  mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $testItem["idEpreuve"] = $row["idEpreuve"];
        $testItem["nom"] = $row["nom"];
        $testItem["annee"] = $row["annee"];
        $testItem["taille"] = $row["taille"];
        $testItem["path"] = $row["path"];
        $testItem["idEcole"] = $row["idEcole"];
        $testItem["idTypeEpreuve"] = $row["idTypeEpreuve"];
        $testItem["totalDownload"] = $row["totalDownload"];
        $tests[] = $testItem;
    }
    return $tests;
}

function createEpreuve($name, $annee, $taille, $idEcole, $idTypeEpreuve, $path)
{
    global $con;
    $query = "insert into epreuve(nom,annee,taille,path,idEcole,idTypeEpreuve) values('$name','$annee','$taille','$path','$idEcole','$idTypeEpreuve')";
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
