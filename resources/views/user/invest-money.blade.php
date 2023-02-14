<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Invest Money</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transaction invest-money">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>خطط الإستثمار</h2>
                <!-- PLANS -->
                <div class="plans">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="plan">
                            <div class="top">
                                <p>الباقة الذهبية</p>
                            </div>
                            <div class="elements">
                                <div>
                                    <p>الحد الادنى</p>
                                    <span>$100.00</span>
                                </div>
                                <div>
                                    <p>الحد الاقصى</p>
                                    <span>$999.00</span>
                                </div>
                                <div>
                                    <p>ربح يومي</p>
                                    <span>1.00 %</span>
                                </div>
                                <div>
                                    <p>مدة الإستثمار</p>
                                    <span>120 يوم</span>
                                </div>
                                <div>
                                    <p>عودة رأس المال</p>
                                    <span>نعم</span>
                                </div>
                                <div>
                                    <p>إجمالي الأرباح</p>
                                    <span>$120 - $1198.8</span>
                                </div>
                            </div>
                            <div class="invest">
                                <p>الإستثمار</p>
                                <select>
                                    <option value="">حدد من القائمة</option>
                                    <option value="">محفظة الإيداع - $3,000.00</option>
                                    <option value="">محفظة الفائدة - $1,172.00</option>
                                    <option value="">الدفع الخارجي</option>
                                </select>
                                <div class="inp">
                                    <input type="text">
                                    <span>USD</span>
                                </div>
                                <p>إجمالي الربح: 0.00 USD</p>
                                <p>برأس المال: 0.00 USD</p>
                                <div class="submit">
                                    <button>استثمر الان</button>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
                
            </div>


        </div>
        
    
        
        
</body>
</html>