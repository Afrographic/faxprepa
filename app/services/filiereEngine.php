<?php include_once dirname(__FILE__) . '/../db.php';
function checkIfFiliere($idSchool)
{
    global $con;
    $query = "select * from filiere where idSchool = $idSchool";
    $res =  mysqli_query($con, $query);
    return mysqli_num_rows($res) > 0;
}


function getFiliere($idSchool)
{
    global $con;
    $filieres = [];
    $query = "select * from filiere where idSchool = $idSchool";
    $res =  mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
        $filiereItem["idFiliere"] = $row["idFiliere"];
        $filiereItem["idShool"] = $row["idShool"];
        $filiereItem["label"] = $row["label"];
        //   adding the item to the array
        $filieres[] = $filiereItem;
    }
    return $filieres;
}


function deleteFiliere($idFiliere)
{
    global $con;
    $query = "delete  from filiere where idFiliere = $idFiliere";
    mysqli_query($con, $query);
    return true;
}

function createFiliere($idSchool, $label)
{
    global $con;
    // Serializing the label
    $label = ucfirst($label);

    // check if all the input are corrects
    if (strlen($label) == 0) {
        return "Cannot proceed label incorrect";
    }
    // check if the school already exist or not
    $query = "select * from school where  label like  '%$label%'";
    $res =  mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        return "Cannot proceed label incorrect";
    }

    // inserting the data
    $query = "insert into filiere(idSchool,label) values($idSchool,$label)";
    mysqli_query($con, $query);
    return true;
}


function updateFiliere($idFiliere, $new_label)
{
    global $con;
    // inserting the data
    $query = "update table filiere set label=$new_label where idFiliere=$idFiliere";
    mysqli_query($con, $query);
    return true;
}
