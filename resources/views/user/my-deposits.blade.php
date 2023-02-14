<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My Diposit</title>
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
                <h2>أرشيف الودائع</h2>
                <!-- TABLE -->
                <table>
                    <thead>
                        <tr>
                            <th>رقم العملية</th>
                            <th>بوابة الدفع</th>
                            <th>المبلغ</th>
                            <th>الحالة</th>
                            <th>الوقت</th>
                            <th> التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <td data-label='رقم العملية'><span>CQKBCT7U4C4Y</span></td>
                                <td data-label='بوابة الدفع'>البريد المصري</td>
                                <td data-label='المبلغ'><span>5,000.00 $</span></td>
                                <td data-label='الحالة'><span>مكتمل</span></td>
                                <td data-label='الوقت'>2023-01-22 05:19 ص</td>
                                <td data-label='التفاصيل'><button> <span class="material-symbols-outlined">desktop_windows</span> </button></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>


        </div>
        
    
        
        
</body>
</html>