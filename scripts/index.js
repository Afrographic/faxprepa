function logOut() {
    localStorage.setItem('schoolData', null);
    let a = document.createElement('a');
    document.body.appendChild(a);
    a.href = "index.php";
    a.click();
}