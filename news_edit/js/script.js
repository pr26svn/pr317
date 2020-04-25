//скрипт для кнопки "читать далее"
function onload () {
    for (let child of document.getElementsByClassName("news-description")) {
        if(child.clientHeight < 80) {
            child.parentNode.children[child.parentNode.children.length - 1].outerHTML = "";
            child.style.marginBottom = "10px";
        } else {

            child.style.height = "5.5em"
        }
    }
}
function switch_text(id, button) {
    let e = document.getElementById(id);
    if (e.style.height != "auto") {
        e.style.height = "auto";
        button.innerText = "Свернуть";
    } else {
        e.style.height = "5.5em";
        button.innerText = "Читать далее...";
    }
}