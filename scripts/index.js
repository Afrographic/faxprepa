console.log(window.innerWidth);

function logOut() {
    localStorage.setItem('schoolData', null);
    reload();
}

function reload() {
    let a = document.createElement('a');
    document.body.appendChild(a);
    a.href = "index.php";
    a.click();
}

function activateMenuMobile() {
    console.log("Fuck the shite");
    $("#menuPhone").classList.add("actions_active")
    $(".overflow").classList.add("overflow_active")

}

function hideMenuMobile() {
    if (window.innerWidth <= 1000) {
        $("#menuPhone").classList.remove("actions_active")
        $(".overflow").classList.remove("overflow_active")
    }
}