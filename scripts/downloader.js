function setActive(element) {
    let tabs = $$('.tabItem');
    tabs.forEach(item => {
        item.classList.remove("tab-active");
    });
    element.classList.add("tab-active");
}

function resetDownloadState() {
    console.log("Guck");
    let tabs = $$('.tabItem');
    tabs.forEach(function(item) {
        item.classList.remove("tab-active");
    })
    $("#typeTestTabs").firstElementChild.classList.add("tab-active");
}