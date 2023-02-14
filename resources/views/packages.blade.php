<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al manarh - Packages</title>
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
                        <button> <span class="material-symbols-outlined">toll</span>استثمر الآن</button>
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
                        <button> <span class="material-symbols-outlined">toll</span>استثمر الآن</button>
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
                        <button> <span class="material-symbols-outlined">toll</span>استثمر الآن</button>
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
                        <button> <span class="material-symbols-outlined">toll</span>استثمر الآن </button>
                    </div>
                </div>
                  
            </div>
        </div>

        <!-- PROFIT CALC  -->
        <div class="profit" style='top:0;'>
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
        
    

        <!-- FOOTER -->
        @include('components.footer')

        <!-- MENU -->
        @include('components.menu')




    </div>







   
</body>
</html>

