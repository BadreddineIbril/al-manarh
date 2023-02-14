<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | New Ticket</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard new-ticket">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>إفتح تذكرة دعم جديدة</h2>
                <!-- CREATE A NEW TICKET -->
                <form action="#">
                    <div class="for">
                        <div>
                            <input type="text" placeholder='الإسم'>
                            <span class="material-symbols-outlined">face</span>
                        </div>
                        <div>
                            <input type="email" placeholder='البريد الإلكتروني'>
                            <span class="material-symbols-outlined">alternate_email</span>
                        </div>
                    </div>
                    <div class="for">
                        <div>
                            <input type="text" placeholder='العنوان'>
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <select name="" id="">
                                <option value="#">--- الأهمية ---</option>
                                <option value="#">عالي</option>
                                <option value="#">متوسط</option>
                                <option value="#">منخفض</option>
                            </select>
                        </div>
                    </div>
                    <textarea name="" id="" cols="30" rows="10" placeholder='الرسالة'></textarea>
                    <div class="file">
                        <label for="#">المرفقات</label><br>
                        <input type="file" name="" id="">
                        <div class="file-design">
                            <span class="material-symbols-outlined">folder_open</span>
                            <p>رفع ملف</p>
                        </div>
                    </div>
                    <div class="submit">
                        <button>إرسال</button>
                    </div>
                </form>
            </div>


        </div>
        
    
        
        
</body>
</html>