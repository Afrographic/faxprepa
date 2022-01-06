function setActive(element) {
    let tabs = $$('.tabItem');
    tabs.forEach(item => {
        item.classList.remove("active");
    });
    element.classList.add("active");
}

function closeDownloadScreen() {
    let downloadView = $('.downloader');
    downloadView.classList.remove('active');
}

function showDownloadScreen() {
    let downloadView = $('.downloader');
    downloadView.classList.add('active');
}