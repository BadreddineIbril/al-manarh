<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Transactions</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transaction">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>المعاملات</h2>
                <!-- TABLE -->
                <table>
                    <thead>
                        <tr>
                            <th>رقم العملية</th>
                            <th>التاريخ</th>
                            <th>المبلغ</th>
                            <th>الرصيد الحالي</th>
                            <th>نوع المحفظة</th>
                            <th>تفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <td data-label='رقم العملية'><span>45QZO7JA89BC</span></td>
                                <td data-label='التاريخ'> 2023-02-07 05:24 ص<br>منذ 10 ساعات</td>
                                <td data-label='المبلغ'><span>+ 15.00 USD</span></td>
                                <td data-label='الرصيد الحالي'> 1,156.00 $</td>
                                <td data-label='نوع المحفظة'>محفظة الفائدة</td>
                                <td data-label='تفاصيل'>15.00$ فائدة من الباقة الفضية </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>


        </div>
        
    
        
        
</body>
</html>