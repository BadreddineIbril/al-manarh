<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Manarh - Login</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- LOGIN -->
        <div class="login">
            <!-- INFO -->
            <div class="info">
                <h1>مرحبا بك في المنارة</h1>
                <div class="image">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/rocket-3254549-2725153.png" alt="">
                </div>
                <p>ليس لديك حساب تشط ؟ <a href="/register">افتح حساب الان</a></p>
            </div>
            <!-- CONTEXT -->
            <div class="context">
                <h2>تسجيل الدخول</h2>
                <form action="#">
                    <div class="inp">
                        <input type="text" placeholder='البريد الإلكتروني أو إسم المستخدم'>
                        <span class="material-symbols-outlined">alternate_email</span>
                    </div>
                    <div class="inp">
                        <input type="password" placeholder='كلمة المرور '>
                        <span class="material-symbols-outlined">password</span>
                    </div>
                    <div class="check">
                        <p>278694</p>
                    </div>
                    <div class="inp">
                        <input type="text" placeholder='أدخل الرمز كما هو موضح'>
                        <span class="material-symbols-outlined">barcode</span>
                    </div>
                    <div class="addition">
                        <div class="remember">
                            <input type="checkbox" name="" id="">
                            <p>تذكرني</p>
                        </div>
                        <a href="#">هل نسيت كلمة المرور؟</a>
                    </div>
                    <div class="submit-btn">
                        <button>تسجيل الدخول</button>
                    </div>
                </form>

            </div>

        </div>
    
</body>
</html>