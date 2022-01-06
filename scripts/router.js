function closerouterScreen() {
    let router = $('.router');
    router.classList.remove('active');
}

function showrouterScreen(routeName) {
    let router = $('.router');
    router.classList.add('active');
    let routes = $$('.routeItem');
    routes.forEach(routeItem => {
        routeItem.classList.remove("route-active");
        if (routeItem.getAttribute("id") == routeName) {
            routeItem.classList.add("route-active");
        }
    });
}