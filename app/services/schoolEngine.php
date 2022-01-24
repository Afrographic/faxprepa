<?php include_once dirname(__FILE__) . '/../db.php';

function getSchool($offset)
{
    global $con;
    $schools = [];
    $query = "select school.*,(select count(*) as totalEpreuve from epreuve where school.idSchool = epreuve.idEcole) as  totalEpreuve from school ORDER BY idSchool DESC LIMIT 30 OFFSET $offset";
    $res =  mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($res)) {
        $schoolItem["idSchool"] = $row["idSchool"];
        $schoolItem["name"] = $row["name"];
        $schoolItem["logo"] = $row["logo"];
        $schoolItem["totalEpreuve"] = $row["totalEpreuve"];
        $schoolItem["pseudo"] = $row["pseudo"];
        $schools[] = $schoolItem;
    }
    return $schools;
}

function createSchool($name, $mdp, $logo, $pseudo)
{
    global $con;
    // Serializing the data
    $name = ucfirst($name);
    $logo = ucfirst($logo);

    // check if all the input are corrects
    if (strlen($name) == 0 || strlen($mdp) == 0 || strlen($logo) == 0) {
        return false;
    }
    // check if the school already exist or not
    $query = "select * from school where name='$name' or pseudo = '$pseudo'";
    $res =  mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        return  false;
    }

    // inserting the data
    $mdp = md5($mdp);
    $query = "insert into school(name,logo,mdp,pseudo) values('$name','$logo','$mdp','$pseudo')";
    mysqli_query($con, $query);
    return true;
}

function login($name, $mdp)
{
    global $con;
    $mdp = md5($mdp);
    $query = "select * from school where pseudo='$name' AND mdp='$mdp'";
    $res =  mysqli_query($con, $query);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $schoolItem["idSchool"] = $row["idSchool"];
            $schoolItem["name"] = $row["name"];
            $schoolItem["logo"] = $row["logo"];
        }
        return $schoolItem;
    } else {
        return false;
    }
}
