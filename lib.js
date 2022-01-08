function $(selector) {
    return document.querySelector(selector);
}

function $$(selector) {
    return document.querySelectorAll(selector);
}

function renderError(HTMlNode, message) {
    console.log(HTMlNode);
    if (!HTMlNode.innerHTML.includes("error-active")) {
        HTMlNode.innerHTML += `
        <div class="errorField error-active">
            <img src="images/project/warning.png" alt="">
            <span>${message}</span>
        </div>
        `;
    }
}

function enableButtonLoadingState(button) {
    button.innerHTML = '';
    button.classList.add("loading");

}

function scrollToBottomOfHtmlElement(element) {
    element.scrollTop = element.scrollHeight;
}

function endButtonLoadingState(button, initialText) {
    button.innerHTML = initialText;
    button.classList.remove("loading");
}

function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (bytes == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}