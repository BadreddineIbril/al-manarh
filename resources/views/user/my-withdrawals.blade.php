<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My Withdraw</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transaction my-withdrawals">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>أرشيف السحب</h2>
                <!-- TABLE -->
                <table>
                    <thead>
                        <tr>
                            <th> وسيلة الدفع | رقم العملية	</th>
                            <th>التاريخ</th>
                            <th>المبلغ</th>
                            <th> سعر التحويل</th>
                            <th> الحالة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <td data-label=' وسيلة الدفع | رقم العملية'><span>45QZO7JA89BC</span></td>
                                <td data-label='التاريخ'> 2023-02-07 05:24 ص<br>منذ 10 ساعات</td>
                                <td data-label='المبلغ'><span>$100.00 - 5.00 - 95.00 $</span></td>
                                <td data-label='سعر التحويل'> 1 $ = 15.50 ج.م <br> 1,472.50 ج.م</td>
                                <td data-label='الحالة'><span>مكتمل</span></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>


        </div>
        
    
        
        
</body>
</html>