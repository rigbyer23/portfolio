
const url = 'quizdata.json';
function getJSON(urlParam) {
    return fetch(urlParam).then(results => {
        results.json().then(function (data) {
            quiz.question = data.results;
            quiz.buildQuestion();
        });
    });
}

const quiz = {

    //globals
    question: []
    , number: 0
    , random: 0
    , score: 0
    , buttonArray: []

    //methods
    , checkBool: function () {
        const currQ = this.question[this.number];
        console.log(currQ.type);
        const options = document.getElementById('answers');
        if (currQ.type == "boolean") {
            let boolbtn = document.createElement("button");
            let v = document.createTextNode(buttonArray[1, 2]);
            boolbtn.appendChild(v);
            boolbtn.onclick = function () { storeAnswer(this) };
            options.appendChild(boolbtn);
        }
    }


    , buildQuestion: function () {
        let i = 0;
        let numbers = [];
        const currentQ = this.question[this.number];
        let item = document.getElementById('firstQ');
        item.innerHTML = `<h4>${currentQ.question}</h4>`;
        buttonArray = [currentQ.correct_answer, currentQ.incorrect_answers[0], currentQ.incorrect_answers[1], currentQ.incorrect_answers[2]];
        const options = document.getElementById('answers');
        options.innerHTML = '';
        // quiz.checkBool();
        while (i < buttonArray.length) {
            let btn = document.createElement("button");
            btn.className = "btn btn-primary btn-lg btn-block btn-dark";
            let random = Math.floor(Math.random() * buttonArray.length);

            if (!numbers.includes(random)) {
                numbers.push(random);
                let t = document.createTextNode(buttonArray[random])
                btn.appendChild(t);
                btn.onclick = function () { quiz.storeAnswer(this) };
                options.appendChild(btn);
                i++;
            }
        }
        return { item, options };
    }

    , storeAnswer: function (buttonSelected) {


        if (buttonSelected.innerHTML == this.question[this.number].correct_answer) {
            buttonSelected.style.backgroundColor = "green";
            this.score++;
        }
        else {
            buttonSelected.style.backgroundColor = "red";
        }

        if (this.number < 8) {
            this.number++;
            setTimeout(function () { quiz.buildQuestion() }, 1000);
        }
        else {
            window.location.href = './finalScore.html' + '#' + this.score;
        }

    }


    , returnScore: function () {
        let finalPg = document.getElementById('total');
        finalPg.innerHTML = `<p>"Your score is: " score " out of 10"`;
    }

}




