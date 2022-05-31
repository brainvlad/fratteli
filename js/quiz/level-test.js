const fetchTestById = async (test_id) => {
    const res = await fetch(`${baseApi}/test/get-test.php?test_id=${test_id}`);
    return res.json();
}


const body = document.getElementsByTagName("body")[0];
const renderTest = async () => {
    const testData = await fetchTestById(47);

    const testTitle = document.querySelector("#test_title");
    testTitle.innerText = testData.test_title;

    const questionsContainer = document.querySelector("#questions_container");

    testData.questions.forEach(q => {


        const questionContainer  = document.createElement("section");
        questionContainer.setAttribute("class", "question");

        const divContainer = document.createElement("div");
        divContainer.setAttribute("class", "container");


        const questionTitleP = document.createElement("p");
        questionTitleP.setAttribute("class", "question__title");
        questionTitleP.innerText = q.question_title;

        const questionDescP = document.createElement("p");
        questionDescP.setAttribute("class", "question__title");
        questionDescP.innerText = q.question_desc;

        const questionAnswersContainer = document.createElement("div");
        questionAnswersContainer.setAttribute("class", "question__answers");

       // questionContainer.appendChild(questionAnswersContainer);
        const optionContainer = document.createElement("div");

        if (q.type === "0") {
            q.answers.forEach((a) => {
                const optionContainer = document.createElement("div");
                optionContainer.setAttribute("class", "radio");

                const optionRadio = document.createElement("input");
                optionRadio.setAttribute("id", `answer-${a.answer_id}`);
                optionRadio.setAttribute("type", "radio");
                optionRadio.setAttribute("value", a.answer_id);

                const optionLabel = document.createElement("label");
                optionLabel.setAttribute("for", `answer-${a.answer_id}`);
                optionLabel.setAttribute("class", "radio-label");
                optionLabel.innerText = a.answer_title;

                optionContainer.appendChild(optionRadio);
                optionContainer.appendChild(optionLabel);


                questionAnswersContainer.appendChild(optionContainer);
            });
        } else if (q.type === "1") {
            const inputAnswer = document.createElement("input");
            inputAnswer.setAttribute("type", "text");
            inputAnswer.setAttribute("id", `answer-text`);

            optionContainer.appendChild(inputAnswer);

            questionAnswersContainer.appendChild(inputAnswer);
        }


        questionContainer.appendChild(divContainer);
        questionContainer.appendChild(questionTitleP);
        questionContainer.appendChild(questionDescP);
        questionContainer.appendChild(questionAnswersContainer);

        questionsContainer.appendChild(questionContainer);
    });


    const sendTestBtn = document.createElement("button");
    sendTestBtn.setAttribute("class", "btn");
    sendTestBtn.innerText = "Завершить";

    sendTestBtn.addEventListener("click", async () => {
        const optionsChecked = document.querySelectorAll("input[type=radio]:checked");
        const answersText = document.querySelectorAll("#answer-text");
        options_ids = [].map.call(optionsChecked, r => r.value);
        textAnswersValues = [].map.call(answersText, r => r.value);

        const res = await fetch(`${baseApi}/test/save-result.php`, {
            method: 'POST',
            body: JSON.stringify({
                answer_ids: [...options_ids, ...textAnswersValues],
                test_id: testData.test_id,
                regTest: true,
            })
        });

        const result = await res.json();

        let user_level = "";
        if (result.rating <= 17) {
            user_level = "A1";
        }
        if (result.rating <= 34 && result.rating > 17) {
            user_level = "A2";
        }
        if (result.rating > 34 && result.rating <= 51 ) {
            user_level = "B1";
        }
        if (result.rating > 51 && result.rating <= 68) {
            user_level = "B2";
        }
        if (result.rating > 85 && result.rating < 95) {
            user_level = "C1";
        }
        if (result.rating <= 100 && result.rating >= 95) {
            user_level = "C2";
        }

        alert(user_level);

        const saveUserLevel = await fetch(`${baseApi}/account/save-user-level.php`, {
            method: 'POST',
            body: JSON.stringify({
                user_level,
                regTest: true,
            })
        });
    });

    questionsContainer.appendChild(sendTestBtn);
    //
    // let answer_ids = [];
    //
    // sendTestBtn.addEventListener("click", async () => {
    //     const optionsChecked = document.querySelectorAll("input[type=radio]:checked");
    //     const answersText = document.querySelectorAll("#answer-text");
    //     options_ids = [].map.call(optionsChecked, r => r.value);
    //     textAnswersValues = [].map.call(answersText, r => r.value);
    //
    //     const res = await fetch(`${baseApi}/test/save-result.php`, {
    //         method: 'POST',
    //         body: JSON.stringify({
    //             answer_ids: [...options_ids, ...textAnswersValues],
    //             test_id: testData.test_id,
    //         })
    //     });
    //
    //     const result = await res.json();
    //     const resultDiv = document.querySelector('#result')
    //     resultDiv.innerHTML = ''
    //     resultDiv.innerHTML = `
    //     <h2>Правильных ответов:</h2>
    //     <h3>${result.count_correct}/${result.count_questions}</h3>
    //     <h2>Оценка:</h2>
    //     <h3>${result.rating}</h3>
    //     <h2>Статус:</h2>
    //     <h3>${result.success}</h3>
    //     `
    // });


};


body.addEventListener("load", renderTest(), false);