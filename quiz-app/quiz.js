
let question = '';
let number = 0;
function getJSON(url) {
    return fetch(url).then(results => {
        results.json().then(function (data) {
            question = data.results;
            buildQuestion(question[number]);
        });
    });
}
//current question data[i] global variable to increment when clicked next
//after submit query selector into card-title
//call onload getJSON and take the first result and pass it into buildQuestion
///quiz var keeps track of the
function buildQuestion(question) {
    // Do it again with a template literal string
    const item = document.getElementById('firstQ');
    item.innerHTML = `<h4>${question.question}</h4>`
    console.log(question.question);

    let buttonArray = [`${question.correct_answer}`, `${question.incorrect_answers[0]}`, `${question.incorrect_answers[1]}`, `${question.incorrect_answers[2]}`];


    let numbers = [];
    let i = 0;
    const options = document.getElementById('answers');
    while (i < buttonArray.length) {
        let btn = document.createElement("button");
        btn.className = "btn btn-primary btn-lg btn-block btn-dark";
        let random = Math.floor(Math.random() * buttonArray.length);
        if (!numbers.includes(random)) {
            let t = document.createTextNode(buttonArray[random]);
            numbers.push(random);
            btn.appendChild(t);
            btn.onclick = function () { storeAnswer(this) };
            options.innerHTML = document.body.appendChild(btn);
            i++;
        }

    }
    return { item, options };
}

let score = 0;
function storeAnswer(buttonSelected) {
    console.log(buttonSelected.innerHTML);
    if (buttonSelected.innerHTML = "question.correct_answer") {
        buttonSelected.style.backgroundColor = "green";
        score++;
    }
    setTimeout(function () { buildQuestion(question[++number]) }, 1000);

}
