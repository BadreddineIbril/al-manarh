<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Referrals</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard referrals">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>الإحالات</h2>
                <div class="referral-card">
                    <p>رابط الإحالة</p>
                    <div class="link">
                        <input type="text" disabled value='https://al-manarh.com?reference=GCXYVWXX4V3MGYPX67' class="link-value">
                        <button onclick="copyLink()"><span class="material-symbols-outlined">content_copy</span></button>
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