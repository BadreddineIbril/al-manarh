<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | 2FA</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard twofactor">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>مصادقة Google 2FA</h2>
                <div class="qr-account">
                    <div class="top">
                       <p> أضف حسابك لـ Google Authenticator</p>
                    </div>
                    <div class="card">
                        <div class="qr">
                            <p>استخدم رمز الاستجابة السريعة أو مفتاح الإعداد في تطبيق Google Authenticator لإضافة حسابك.</p>
                            <img src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth%3A%2F%2Ftotp%2FALM602660128%40%D8%B4%D8%B1%D9%83%D8%A9+%D8%A7%D9%84%D9%85%D9%86%D8%A7%D8%B1%D8%A9%3Fsecret%3D6ZXNIUSPADPDMFXT" alt="">
                        </div>
                        <div class="info">
                            <div class="copy-info">
                                <p>مفتاح الإعداد</p>
                                <div>
                                    <input type="text" value='6ZXNIUSPADPDMFXT' disabled class="link-value">
                                    <button onclick="copyLink()"><span class="material-symbols-outlined">content_copy</span></button>
                                </div>
                            </div>
                            <div class="help-info">
                                <p>مساعدة</p>
                                <div>Google Authenticator هو تطبيق متعدد العوامل للأجهزة المحمولة. يقوم بإنشاء رموز موقوتة تُستخدم أثناء عملية التحقق المكونة من خطوتين. لاستخدام Google Authenticator ، قم بتثبيت تطبيق Google Authenticator على جهازك المحمول. تنزيل التطبيق</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qr-verif">
                    <div class="top">
                       <p>تفعيل التحقق بخطوتين</p>
                    </div>
                    <div class="verif">
                        <p>ادخل رمز Google Authenticatior</p>
                        <input type="text" placeholder='أدخل OTP '><br>
                        <button>إرسال</button>
                    </div>
                </div>

                <!-- COPY POP -->
                <div class="copy-pop">
                    <div>
                        <span class="material-symbols-outlined">mood</span>
                        <p>تم نسخ الرابط بنجاح</p>
                    </div>
                    <button><span class="material-symbols-outlined">close</span></button>
                </div>
            </div>
            

        </div>
        
    
        
        
        <script>
            function copyLink() {
                let copyText = document.querySelector(".link-value");

                copyText.select();
                copyText.setSelectionRange(0, 99999); // For mobile devices

                navigator.clipboard.writeText(copyText.value);
                
                let copyPop = document.querySelector('.copy-pop')
                // OPEN POP
                copyPop.style.top = '5%'
                // CLOSE POP
                copyPop.querySelector('button').addEventListener('click',()=>{ // MANUEL
                    copyPop.style.top = '-20%'
                })
                setTimeout(() => { // AUTO
                    copyPop.style.top = '-20%'
                }, 3000);
            }
        </script>
</body>
</html>