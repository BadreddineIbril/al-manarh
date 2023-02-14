<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Withdraw Accounts</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transaction withdraw-accounts">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>وسائل السحب</h2>
                <!-- TABLE -->
                <table>
                    <thead>
                        <tr>
                            <th>حساب</th>
                            <th>وسيلة الدفع</th>
                            <th> التاريخ</th>
                            <th>تفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <td data-label='حساب'><span>حساب بنك مصر</span></td>
                                <td data-label='وسيلة الدفع'>تحويل بنكي	</td>
                                <td data-label='التاريخ'>منذ أسبوعين	</td>
                                <td data-label='تفاصيل'><div>
                                        <button><span class="material-symbols-outlined">delete</span>حذف</button>
                                        <button><span class="material-symbols-outlined">settings</span>إعدادات</button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>


        </div>
        
    
        
        
</body>
</html>