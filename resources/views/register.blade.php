<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Manarh - Register</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- LOGIN -->
        <div class="login register">
            <!-- INFO -->
            <div class="info">
                <h1>مرحبا بك في المنارة</h1>
                <div class="image">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/rocket-3254549-2725153.png" alt="">
                </div>
                <p>لديك حساب نشط بالفعل ؟ <a href="/login">دخول</a></p>
            </div>
            <!-- CONTEXT -->
            <div class="context">
                <h2>تسجيل حساب</h2>
                <form action="#">
                    <div class="inps">
                        <div class="inp">
                            <input type="text" placeholder='الإسم الأول'>
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div class="inp">
                            <input type="text" placeholder=' الإسم الأخير '>
                            <span class="material-symbols-outlined">person</span>
                        </div>
                    </div>
                    <div class="inps">
                        <div class="inp">
                            <input type="text" placeholder='إسم المستخدم'>
                            <span class="material-symbols-outlined">face</span>
                        </div>
                        <div class="inp">
                            <input type="email" placeholder='البريد الإلكتروني'>
                            <span class="material-symbols-outlined">alternate_email</span>
                        </div>
                    </div>
                    <div class="inps">
                        <div class="inp">
                            <select name="" id="" class="countries">
                                <option value="">---الدولة---</option>
                            </select>
                        </div>
                        <div class="inp">
                            <input type="text" placeholder='رقم الهاتف'>
                            <span class='code'>+212</span>
                        </div>
                    </div>
                    <div class="inps">
                        <div class="inp">
                            <input type="password" placeholder='كلمة المرور'>
                            <span class="material-symbols-outlined">alternate_email</span>
                        </div>
                        <div class="inp">
                            <input type="password" placeholder='تأكيد كلمة المرور'>
                            <span class="material-symbols-outlined">alternate_email</span>
                        </div>
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
                            <p>أوافق على <a href="#">سياسة الخصوصية</a> , <a href="#">الشروط والأحكام , </a> <a href="#">سياسة الإسترجاع</a></p>
                        </div>
                    </div>
                    <div class="submit-btn">
                        <button>إفتح حساب الآن </button>
                    </div>
                </form>

            </div>

        </div>
    
        <script>
            fetch('/js/phoneCodes.json', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                },
            })
            .then(response => response.json())
            .then(response => response.map(item=>{ 
                let newOption = document.createElement("option");
                newOption.value = item.name
                newOption.innerText = item.name
                // newOption.selected ? console.log('yes') : console.log('no')
                document.querySelector('.countries').appendChild(newOption)
                 })
            )
            
        </script>
</body>
</html>