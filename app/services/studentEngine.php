<?php include_once dirname(__FILE__) . '/../db.php';

function createStudent($profile_path,$pseudo,$email,$mdp){
    global $con;
    // check if the input are correct
    if(strlen($pseudo) == 0 || strlen($email) == 0||strlen($mdp) == 0){
        return false;
    }
    // check the email
    $query = "select * from student where email='$email'";
    $res =  mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        return false;
    }
    // check pseudo
    $query = "select * from student where pseudo='$pseudo'";
    $res =  mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        return false;
    }

    // creating the student
    $mdp = md5($mdp);
    $query = "insert into student(profile_path,pseudo,email,mdp) values('$profile_path','$pseudo','$email','$mdp')";
    mysqli_query($con, $query);
    return true;
}

function login($pseudo,$mdp){
    global $con;
    $mdp = md5($mdp);
    $query = "select * from student where pseudo='$pseudo' AND mdp='$mdp'";
    $res =  mysqli_query($con, $query);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $schoolItem = $row;
        }
        $schoolItem["isStudent"] = true;
        return $schoolItem;
    } else {
        return false;
    }
}