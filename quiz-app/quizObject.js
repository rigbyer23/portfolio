if (question.type == "boolean" && i < 2) {
    let t = document.createTextNode(buttonArray[i]);
    btn.appendChild(t);
    btn.onclick = function () { storeAnswer(this) };
    options.appendChild(btn);
}