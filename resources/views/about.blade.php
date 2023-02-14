<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al manarh - About Us</title>
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
                   <div> <br>
                   فنحن نمتلك العديد من الموظفين ذوي الخبرة العالية في مجالات المضاربة بالأسواق المالية وسعر صرف العملات ومن اجل ذلك قمنا بتوزيع جغرافي للعديد من موظفينا في العديد من الدول المتقدمة مثل بورصة طوكيو وأيضا بورصة لندن وأيضا بورصة الولايات المتحدة الامريكية والعديد من أماكن صنع الثروة بالعواصم الأوروبية فيعمل موظفينا على متابعة جميع التغيرات عن كثب واختيار نقطة الصفر للبدء بالاستثمار المضمون لذلك نحن لسنا متسرعين بالشراء او البيع يمكن ان نعمل على ثلاث الى اربع صفقات خلال الشهر الواحد بملايين الدولارات لكل صفقة حتى نخفف المخاطر من نزول سعر الصرف او القيمة السوقية للأسهم المستثمرة من قبلنا ونظمن عائد ربح مضمون مبني على الدراسة الواقعية لكل عملية استثمار نقوم بها والعائد نعمل على توزيعه على المستثمرين لدينا من مختلف دول العالم كل حسب راس ماله لدينا وبهذا نظمن الاستمرارية والربح المضمون المتفق عليه مع عملائنا .
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


        
        


        <!-- FOOTER -->
        @include('components.footer')

        <!-- MENU -->
        @include('components.menu')



    </div>







   
</body>
</html>

