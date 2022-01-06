function setActive(element) {
    let tabs = $$('.tabItem');
    tabs.forEach(item => {
        item.classList.remove("active");
    });
    element.classList.add("active");
}