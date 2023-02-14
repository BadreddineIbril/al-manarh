<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al manarh - Home</title>
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

        <!-- INTRO -->
        <div class="intro">
            <!-- TEXT -->
            <div class="text">
                <div class='text-icon'><span class="material-symbols-outlined">credit_card</span> <span>Investment</span></div>
                <h1>إستثمر لدينا لتحصل<br> على مزيد من الأرباح</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Iure obcaecati quis vel ex minus esse eius autem sit distinctio a?</p>
                <div class="btn">
                    <a href='/login'> <span class="material-symbols-outlined">toll</span> <p>استثمر الآن</p></a>
                    <!-- <button>Contact Us</button> -->
                </div>
            </div>
            <!-- IMAGE -->
            <div class="image">
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/money-bag-5654697-4712953.png" alt="">
            </div>
        </div>

        <!-- PROFIT CALC  -->
        <div class="profit">
            <h3>حاسبة الإستثمار</h3>
            <div class="calc">
                <div>
                    <label>إختر خطة</label><br>
                    <select name="" id="">
                        <option value="">الباقة البرونزية - ($100.00 - $999.00)</option>
                        <option value="">الباقة الفضية - ($1,000.00 - $4,999.00)</option>
                        <option value="">الباقة الذهبية - ($5,000.00 - $9,999.00)</option>
                        <option value="">الباقة الماسية - ($10,000.00 - $100,000.00)</option>
                    </select>
                </div>
                <div class='inp-invest'>
                    <label>مبلغ الإستثمار</label><br>
                    <input type="number" name="" id="">
                </div>
                <div>
                    <label>صافي الربح</label><br>
                    <input type="number" name="" id="">
                </div>
            </div>
        </div>

        <!-- PACKAGES -->
        <div class="packages">
            <h1 class='home-titles'>خطط الإستثمار</h1>
            <!-- PLANS -->
            <div class="plans">
                <div class="plan">
                    <p>الباقة البرونزية</p>
                    <h3><span>%</span>1,00</h3>
                    <p class='plan-days'>120 يوم</p>
                    <ul>
                        <li>استرجاع رأس المال</li>
                        <li>الحد الأدنى للاستثمار <span>|| 100 $</span></li>
                        <li>الحد الأقصى للاستثمار <span>|| 999 $</span></li>
                    </ul>
                    <div class="invest">
                        <a href='/login'> <span class="material-symbols-outlined">toll</span>استثمر الآن</a>
                    </div>
                </div>
                <div class="plan">
                    <p>الباقة الفضية</p>
                    <h3><span>%</span>1,50</h3>
                    <p class='plan-days'>120 يوم</p>
                    <ul>
                        <li>استرجاع رأس المال</li>
                        <li>الحد الأدنى للاستثمار <span>|| 100 $</span></li>
                        <li>الحد الأقصى للاستثمار <span>|| 999 $</span></li>
                    </ul>
                    <div class="invest">
                        <a href='/login'> <span class="material-symbols-outlined">toll</span>استثمر الآن</a>
                    </div>
                </div>
                <div class="plan">
                    <p>الباقة الذهبية</p>
                    <h3><span>%</span>2,00</h3>
                    <p class='plan-days'>120 يوم</p>
                    <ul>
                        <li>استرجاع رأس المال</li>
                        <li>الحد الأدنى للاستثمار <span>|| 100 $</span></li>
                        <li>الحد الأقصى للاستثمار <span>|| 999 $</span></li>
                    </ul>
                    <div class="invest">
                        <a href='/login'> <span class="material-symbols-outlined">toll</span>استثمر الآن</a>
                    </div>
                </div>
                <div class="plan">
                    <p>الباقة الماسية</p>
                    <h3><span>%</span>2,50</h3>
                    <p class='plan-days'>120 يوم</p>
                    <ul>
                        <li>استرجاع رأس المال</li>
                        <li>الحد الأدنى للاستثمار <span>|| 100 $</span></li>
                        <li>الحد الأقصى للاستثمار <span>|| 999 $</span></li>
                    </ul>
                    <div class="invest">
                        <a href='/login'> <span class="material-symbols-outlined">toll</span>استثمر الآن</a>
                    </div>
                </div>
                
                
            </div>
        </div>

        <!-- STATICS -->
        <div class="statics">
            <h1 class='home-titles'>إحصائيات النظام</h1>
            <div class="cards">
                <div class="card">
                    <span class="material-symbols-outlined">line_start</span>
                    <p>30-05-2022</p>
                    <span>تاريخ الإنطلاق</span>
                </div>
                <div class="card">
                    <span class="material-symbols-outlined">group</span>
                    <p>500</p>
                    <span>إجمالي المستخدمين</span>
                </div>
                <div class="card">
                    <span class="material-symbols-outlined">payments</span>
                    <p>3000</p>
                    <span>إجمالي السحب</span>
                </div>
                <div class="card">
                    <span class="material-symbols-outlined">savings</span>
                    <p>6500</p>
                    <span>إجمالي الإيداع</span>
                </div>
            </div>
        </div>

        
        <!-- ABOUT US -->
        <div class="about">
            <h1>تعرف علينا</h1>
            <div class="context">
                <!-- ANIMATION ELEMENT -->
                <img class="about-anim" src="https://cdn3d.iconscout.com/3d/premium/thumb/won-coin-6249067-5117311.png" />
                <!-- CONTEXT -->
                <div class="left">
                    <img src="https://static.vecteezy.com/system/resources/previews/010/870/982/non_2x/3d-character-illustration-of-casual-man-pointing-finger-aside-at-copy-space-recommending-something-with-left-hand-and-right-hand-with-ok-finger-free-png.png" alt="">
                </div>
                <div class="right">
                    <span class="about-title">Who are we?</span>
                    <div>
                    نحن شركة المنارة للاستثمار المالي , شركة عربية مسجلة في المملكة المتحدة تحمل سجل رقم 1542248 , نعمل في مجال الاستثمار المالي.                    </div>
                    <div>
                    من هي شركة المنارة وماذا تعمل؟  <br> 
                    لا يوجد شخص لا يريد الربح من استثمار أمواله , غير أن جميعنا نخشى المخاطرة ونحلم بعدم الخسارة. 
                    </div>
                    <div>
                    لا يخسر رأس المال عند ادارته بحكمة مبنية على دراسات عميقة يفتقر الكثيرين ممن لديهم رأس المال للإدارة الحكيمة , من هنا جاء دور المنارة كأحد شركات إدارة رؤوس الأموال وإدارة المحافظ الاستثمارية بشتى أنواعها , نمتلك خبراء في إدارة الأموال والتحليل الفني , لهذا ننجح ببراعة في الاستثمار بكل من الفوركس , الأسهم , سوق العملات الرقمية , العقارات , النقل البري والبحري.                    </div>
                    <div>
                    تستثمر معنا بلا مخاطرة لأننا نتحمل عبئها عنك , يمكنك استثمار مالك في إحدى باقتنا الأربعة حسبما يناسب ميزانيتك بربح ثابت مهما كانت النتائج مع الحصول على عقد مصدق يضمن التزامنا ببنود الباقة المختارة.                    </div>
                    <div class="more">
                        <a href="/about"><span class="material-symbols-outlined">more_up</span> <p>شاهد المزيد</p></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- STEPS -->
        <div class="steps">
            <h1>4 خطوات بسيطة لبدء الإستثمار لدينا</h1>
            <div class="cards">
                <div class="card">
                    <div class="image">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/notes-7042559-5728147.png" alt="">
                    </div>
                    <div class="info">
                        <h3>1</h3>
                        <p>فتح حساب لدينا</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/invoice-receipt-6271295-5175201.png?f=webp" alt="">
                    </div>
                    <div class="info">
                        <h3>2</h3>
                        <p>إيداع المال</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/transaction-book-6271280-5175186.png" alt="">
                    </div>
                    <div class="info">
                        <h3>3</h3>
                        <p>الإستثمار بالخطة</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/mobile-payment-6271287-5175193.png?f=webp" alt="">
                    </div>
                    <div class="info">
                        <h3>4</h3>
                        <p>تلقي الأرباح</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- REFERRAL -->
        <div class="about referral">
            <h1>نظام الإحالة</h1>
            <div class="context">
                <!-- ANIMATION ELEMENT -->
                <img class="about-anim" src="https://cdn3d.iconscout.com/3d/premium/thumb/megaphone-6600863-5487908.png" />
                <!-- CONTEXT -->
                <div class="right">
                    <span class="about-title">إنظم لنظام الإحالة</span>
                    <div>
                    يمكنك الأن البدء بتسويق خدماتنا وباقاتنا الاستثمارية الى أصدقائك 
                    </div>
                    <div>
                    وستحصل على عمولة بنسبة 10% من كل عملية ايداع تتم من خلالك ابدأ التسويق لشركتنا الأن
                    </div>
                    <div class="more">
                        <a href="/login"><span class="material-symbols-outlined">more_up</span> <p>إنضم الآن</p></a>
                    </div>
                </div>
                <div class="left">
                    <img src="https://static.vecteezy.com/system/resources/previews/010/871/010/non_2x/3d-character-illustration-happy-casual-guy-typing-message-on-the-smartphone-isolated-handsome-cheerful-man-using-phone-free-png.png" alt="">
                </div>
            </div>
        </div>


        <!-- TRANSACTIONS -->
        <div class="transactions">
            <h1>أحدث المعاملات لدينا</h1>
            <table>
                <thead>
                    <tr>
                        <th>إسم المستخدم</th>
                        <th>التاريخ</th>
                        <th>المبلغ</th>
                        <th>التفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 8; $i++)
                    <tr>
                        <td data-label='إسم المستخدم'> <span class="material-symbols-outlined">toll</span> <p>ALM602660128</p> </td>
                        <td data-label='التاريخ' >Feb 03, 2023</td>
                        <td data-label='المبلغ' >$ 15.00</td>
                        <td data-label='التفاصيل' >الباقة الفضية</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>


        <!-- FAQ -->
        <div class="faq">
            <h1>الأسئلة الشائعة</h1>
            <div class="context">
                <div class="image">
                    <img src="https://static.vecteezy.com/system/resources/previews/011/841/978/original/question-mark-icon-sign-3d-png.png" alt="">
                </div>
                <div class="questions">
                    @for ($i = 0; $i < 4; $i++)
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


        <!-- NEWS -->
        <div class="news">
            <div class="context">    
                <div class="text">
                <h3>   إشترك في النشرة <br> البريدية لدينا </h3>
                <p>ادخل بريدك الإلكتروني كي تتلقى أخر تحديثاتنا واخبارنا عبر بريدك الإلكترونيl</p>
                </div>    
                <div class="image">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/megaphone-6600863-5487908.png" alt="">
                </div>        
            </div>
            <div class="email">
                <input type="email" placeholder="أدخل البريد الإلكتروني...">
                <button>إشترك الآن</button>
            </div>
        </div>


        <!-- ARTICALES -->
        <div class="acrticles">
            <h1>أحدث المقالات</h1>
            <div class="cards">
                @for ($i = 0; $i < 4; $i++)
                    <div class="card">
                        <a href="/blog">
                            <img src="https://cdn.thewirecutter.com/wp-content/media/2022/10/chromebook-2048-7190.jpeg" alt=""> 
                        </a>
                        <div class="info">
                            <span class='news-type'>أخبار</span>
                            <hr>
                            <p><span><span class="material-symbols-outlined">date_range</span>نشر</span> قبل 12 يومًا</p>
                        </div>
                        <p class="title">الرحلة تكرهها ، وأحيانًا تدفع العقل إلى الوراء ، وتدفع جميع الالتزامات الأخرى إلى الوراء لتجعلها مؤلمة.</p>
                        <p class="desc">بالنسبة لنا ، أسلافنا. إنهم لا يعرفون الألم ، لكن بالنسبة للبعض ، من يريد أن يقال له ، ومن سينتج عنه الألم ، فإن الجشع سينتج عنه الألم ، ولن ينتج عنه أي من هذه الملذات. الآلام الأخرى تؤدي إلى الرغبة.</p>
                    </div>
                @endfor
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

