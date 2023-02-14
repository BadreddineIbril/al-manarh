<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Withdraw Money</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard transaction withdraw-money">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>سحب الاموال</h2>
                <!-- withdrow -->
                <div class="withdraw-choose">
                    <div class="title">
                        <p> حدد أحد خيارات السحب أدناه</p>
                    </div>
                    <form action='#' class="chooses">
                        <div class="choose">
                            <label class="container">
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <span class="material-symbols-outlined">account_balance</span>
                            <p>تحويل بنكي</p>
                        </div>
                        <div class="choose">
                            <label class="container">
                                <input type="radio"  name="radio">
                                <span class="checkmark"></span>
                            </label>                            <span class="material-symbols-outlined">account_balance</span>
                            <p>البريد المصري</p>
                        </div>
                        <div class="submit">
                            <button>إسحب الآن</button>
                        </div>
                    </from>

                </div>
                
            </div>


        </div>
        
    
        
        
</body>
</html>