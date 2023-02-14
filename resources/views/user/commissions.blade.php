<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Commissions</title>
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
                <h2>عمولة الإحالات</h2>
                <!-- TABLE -->
                <table>
                    <thead>
                        <tr>
                            <th>من المستخدم</th>
                            <th>التاريخ</th>
                            <th>المبلغ</th>
                            <th>المستوى</th>
                            <th>نوع العملية</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <td data-label='من المستخدم'><span>45QZO7JA89BC</span></td>
                                <td data-label='التاريخ'>2023-06-22</td>
                                <td data-label='المبلغ'> <span>1,156.00 $</span> </td>
                                <td data-label='المستوى'>محفظة الفائدة</td>
                                <td data-label='نوع العملية'>الباقة الفضية </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>


        </div>
        
    
        
        
</body>
</html>