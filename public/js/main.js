
// OPEN & CLOSE QUESTIONS
let questions = document.querySelectorAll('.question')
let questionsBtn = document.querySelectorAll('.question button')

questionsBtn.forEach((btn,i) => {
    btn.addEventListener('click',()=>{
        questions.forEach(element => {
            element.className = 'question'
        });
        questions[i].className = 'question active'
    })
});


// let newOption = document.createElement("option");
// newOption.value = ''
// newOption.innerText = ''
// newOption.selected =
// newOption.appendChild(textnode);
