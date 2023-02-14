<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Profile Setting</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard profile-setting new-ticket">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>الملف الشخصي</h2>
                <!-- PROFILE SETTING -->
                <div class="profile">
                    <div class="user">
                        <div class="image">
                            <span class="material-symbols-outlined">face</span>
                            <span class="material-symbols-outlined">verified</span>
                        </div>
                        <div class="name">
                            <p>أحمد كمال</p>
                            <span>مصر</span>
                        </div>
                    </div>
                    <form action="#">
                        <div class="for">
                            <div>
                                <input type="text" placeholder='الإسم الأول'>
                                <span class="material-symbols-outlined">face</span>
                            </div>
                            <div>
                                <input type="text" placeholder='الإسم الأخير'>
                                <span class="material-symbols-outlined">face</span>
                            </div>
                        </div>
                        <div class="for">
                            <div>
                                <input type="text" placeholder='البريد الإلكتروني'>
                                <span class="material-symbols-outlined">alternate_email</span>
                            </div>
                            <div>
                                <input type="text" placeholder='رقم الهاتف'>
                                <span class="material-symbols-outlined">phone_iphone</span>
                            </div>
                        </div>
                        <div class="for">
                            <div>
                                <input type="text" placeholder='اسم مستخدم تيلجرام'>
                                <span class="material-symbols-outlined">near_me</span>
                            </div>
                            <div>
                                <input type="text" placeholder='الدولة'>
                                <span class="material-symbols-outlined">public</span>
                            </div>
                        </div>
                        <div class="for">
                            <div>
                                <input type="text" placeholder='المدينة'>
                                <span class="material-symbols-outlined">location_on</span>
                            </div>
                            <div>
                                <input type="text" placeholder='المحافظة'>
                                <span class="material-symbols-outlined">map</span>
                            </div>
                        </div>
                        <div class="for">
                            <div>
                                <input type="text" placeholder='الرمز البريدي'>
                                <span class="material-symbols-outlined">numbers</span>
                            </div>
                            <div>
                                <input type="text" placeholder='العنوان'>
                                <span class="material-symbols-outlined">flag</span>
                            </div>
                        </div>
                        <div class="submit">
                            <button>إرسال</button>
                        </div>
                    </form>

                </div>
                
            </div>


        </div>
        
    
        
        
</body>
</html>