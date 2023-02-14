<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My tickets</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transaction my-tickets">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>تذاكر الدعم</h2>
                <!-- TABLE -->
                <table>
                    <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>الأهمية</th>
                            <th>الحالة</th>
                            <th>أخر رد</th>
                            <th>التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <td data-label='العنوان'><span>القاهرة، مصر</span></td>
                                <td data-label='الأهمية'>متوسط</td>
                                <td data-label='الحالة'><span>مقبول</span></td>
                                <td data-label='أخر رد'>2023-02-07 05:24 <br> صمنذ 10 ساعات</td>
                                <td data-label='التفاصيل'>عطب تقني</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>


        </div>
        
    
        
        
</body>
</html>