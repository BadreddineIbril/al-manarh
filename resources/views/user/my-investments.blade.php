<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My Investments</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transaction my-deposits">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>إستثماراتي النشطة</h2>
                <!-- TABLE -->
                <table>
                    <thead>
                        <tr>
                            <th>خطة</th>
                            <th>تفاصيل العائد</th>
                            <th>المستلم</th>
                            <th>الدفعة التالية</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <td data-label='خطة'><span>الباقة الفضية</span></td>
                                <td data-label='تفاصيل العائد'>15.00 $ كل يوم <br> لمدة 120 يوم + رأس المال</td>
                                <td data-label='المستلم'><span>17 يوم * 15.00$ = 255$</span></td>
                                <td data-label='الدفعة التالية'>0d: 9h 46m 51s</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>


        </div>
        
    
        
        
</body>
</html>