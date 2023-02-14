<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al manarh - Faq</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
    
    <!-- HOME PAGE -->
    <div class="home">
        <!--NAV BAR-->
        @include('components.navBar')

        <!-- FAQ -->
        <div class="faq">
            <h1>الأسئلة الشائعة</h1>
            <div class="context">
                <div class="image">
                    <img src="https://static.vecteezy.com/system/resources/previews/011/841/978/original/question-mark-icon-sign-3d-png.png" alt="">
                </div>
                <div class="questions">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="question">
                            <div class="text">
                                <div>
                                    <span class="material-symbols-outlined icon">contact_support</span>
                                    <p>من هي شركة المنارة وكيف أثق بها ؟</p>           
                                </div>
                            <button><span class="material-symbols-outlined">arrow_drop_down</span></button>
                            </div>
                            <div class="description">
                            شركة عربية تأسست بتاريخ 25/06/2020 مسجلة في المملكة المتحدة بسجل تجاري رقم 111111 كما تعمل المنارة على خطط استثمارية تمت دراستها بعناية شديدة للوصول الى أفضل الأرباح الممكنة , كما أن جميع الإيداعات ورؤوس الأموال تتم ادارتها وفق معايير إقتصادية عالمية , من أهم مجالاتها , الفوركس ,العملات , النفط و الذهب , والأسهم وإستثمار الأموال في النقل البري والبحري.
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        @include('components.footer')

        <!-- MENU -->
        @include('components.menu')


    </div>







    <script>
        // OPEN & CLOSE QUESTIONS
        let questions = document.querySelectorAll('.question')
        let questionsBtn = document.querySelectorAll('.question button')

        questionsBtn.forEach((btn,i) => {
            btn.addEventListener('click',()=>{
                if(questions[i].className != 'question active'){ // ALREADY OPEN => CLOSE
                    questions.forEach(element => {
                    element.className = 'question'
                    });
                    questions[i].className = 'question active'
                }else{                                          // CLOSE => OPEN
                    questions[i].className = 'question'
                }
                
            })
        });
    </script>
</body>
</html>

