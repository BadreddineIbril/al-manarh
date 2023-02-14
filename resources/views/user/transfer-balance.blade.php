<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Transfer</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transfer-balance">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>تحويل الأموال</h2>
                <form action="#">
                    <select name="" id="">
                        <option value="">حدد المحفظة</option>
                        <option value="">محفظة الإيداع - $3,000.00</option>
                        <option value="">محفظة الفائدة - $1,140.00</option>
                    </select>
                    <div class="credit-card">
                        <img src="https://static.vecteezy.com/system/resources/previews/014/216/496/original/3d-credit-card-icon-for-contactless-payments-online-payment-concept-3d-render-illustration-png.png" alt="">
                    </div>
                    <div class="inp">
                        <input type="text" name="" id="" placeholder='إسم المستخدم'>
                        <span class="material-symbols-outlined">face</span>
                    </div>
                    <div class="inp">
                        <input type="text" name="" id="" placeholder='المبلغ'>
                        <span class="material-symbols-outlined">price_change</span>
                    </div>
                    <div class="inp">
                        <input type="text" name="" id="" placeholder='مع العمولة'>
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <div class="submit">
                        <button>إرسال</button>
                    </div>
                </form>
            </div>


        </div>
        
    
        
        
</body>
</html>