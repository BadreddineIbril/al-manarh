<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Deposit Money</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transfer-balance deposit-money">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>إيداع الأموال</h2>
                <form action="#">
                    <select name="" id="">
                        <option value="">حدد وسيلة الدفع</option>
                        <option value="">بيرفكت موني</option>
                        <option value="">بنك Payeer</option>
                        <option value="">USDT TRC20</option>
                        <option value="">تحويل بنكي</option>
                        <option value="">البريد المصري</option>
                    </select>
                    <div class="inp">
                        <input type="number" name="" id="" placeholder='المبلغ'>
                        <span class="material-symbols-outlined">attach_money</span>
                    </div>
                    <div class="credit-card">
                        <img src="https://static.vecteezy.com/system/resources/previews/014/216/496/original/3d-credit-card-icon-for-contactless-payments-online-payment-concept-3d-render-illustration-png.png" alt="">
                    </div>
                    <div class="deposit-info">
                        <p>الحدود</p>
                        <span>$ 0</span>
                    </div>
                    <div class="deposit-info">
                        <p>الحدود</p>
                        <span>$ 0</span>
                    </div>
                    <div class="deposit-info">
                        <p>الحدود</p>
                        <span>$ 0</span>
                    </div>
                    <div class="submit">
                        <button>إرسال</button>
                    </div>
                </form>
            </div>


        </div>
        
    
        
        
</body>
</html>