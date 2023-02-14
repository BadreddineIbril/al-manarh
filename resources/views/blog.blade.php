<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al manarh - Bog</title>
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

        
        <!-- BOLG -->
        <div class="blog">
            <p class="link"><a href='/' >التدوينات</a>  <span class="material-symbols-outlined">arrow_back</span>  <span>تفاصيل التدوينة </span></p>
            <h1>الرحلة تكرهها ، وأحيانًا تدفع العقل إلى الوراء ، وتدفع جميع الالتزامات الأخرى إلى الوراء لتجعلها مؤلمة.</h1>
            <!-- <p class='first'>بالنسبة لنا ، أسلافنا. إنهم لا يعرفون الألم ، لكن بالنسبة للبعض ، من يريد أن يقال له ، ومن سينتج عنه الألم ، فإن الجشع سينتج عنه الألم ، ولن ينتج عنه أي من هذه الملذات. الآلام الأخرى تؤدي إلى الرغبة.</p> -->
            <div class="info">
                    <div>
                        <span class="material-symbols-outlined">feed</span>
                        <p>أخبار</p>
                    </div>
                    <div>
                        <span class="material-symbols-outlined">date_range</span>
                        <p>نشر قبل 12 يومًا</p>
                    </div>
                </div>
            <div class="image">
                <img src="https://cdn.thewirecutter.com/wp-content/media/2022/10/chromebook-2048-7190.jpeg" alt="">
            </div>
            <div class="details">
                <p> سبق أن الرحلات متصلة بتاريخ الإنسان، ومن الأمور الفطرية إخبار الرحالة بما رآه وسمعه وشعر به في رحلته، وحبُ الاستطلاع في الآخرين من أقاربه وأصحابه. إذن أدب الرحلة الشفوي – كما يقتضي العقل – ما زال يساير الرحلات المستمرة منذ أقدم العصور كما تشير إليه الأساطير الأولى
                أما أدب الرحلة المكتوب المدون،  فمن المستحيل أن يقال بالتأكيد أن ذلك الكتاب أو هذا أول تصنيف في حقل أدب الرحلة على الإطلاق.  <br> <br> نعم! أول كتاب في حقل أدب الرحلة اطلع وتعرف عليه الباحثون هو كتاب مصنف إغريقي هيرودوت (Hero Dotus) (قبل ميلاد المسيح عليه السلام بقرون)، الذي زار مصر وقبرص وفينيقيا وآشور وإيران، وتوغل في الشمال إلى البوسفور، وأودع مشاهداته في هذه الرحلات تاريخه الكبير. وأقدم الكتب الثاني INDICA «سفرنامه هند» للرحالة الإغريقي ميگس تهنيز، قام بهذه الرحلة في 330 قبل ميلاد المسيح عليه السلام، وكتابه هذا يُعد من الكتب الوثائقية المعتمدة لتاريخ وثقافة الهند في عصره. ونلتقي في القرن الثاني للميلاد ببطليموس الإسكندري، وهو إغريقي الأصل، وقد ترك كتابين في الجغرافية والفلك، ونراه يدون وصفا مفصلا للبلدان والأماكن في عصره ذاكرا أطوالها وعروضها، ومبينا بالرسم مواقعها. ونلتقي في القرن السابع الميلادي بالرحالة الصيني هيون سانگ ، الذي قضى من عمره الفترة الممتدة من 630م إلى 645م  في الهند، وارتحل إلى أرجاء الهند، ثم دون مشاهداته في كتابه.</p>
            </div>
        </div>

        <!-- ARTICALES -->
        <div class="acrticles">
            <h1>أحدث المقالات</h1>
            <div class="cards">
                @for ($i = 0; $i < 4; $i++)
                    <div class="card">
                        <a href="#">
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







   
</body>
</html>

