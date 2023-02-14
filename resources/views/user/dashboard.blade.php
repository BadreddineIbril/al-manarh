<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Manarh - Login</title>
    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>


        <!-- DASHBOARD -->
        <div class="dashboard">
            <!-- SIDE BAR -->
            @include('components.sideBar')

            <!-- CONTEXT -->
            <div class="context">
                <h2>لوحة التحكم</h2>
                 <!-- ANIMATION ELEMENT -->
                 <img class="dash-anim" src="https://cdn3d.iconscout.com/3d/premium/thumb/megaphone-6600863-5487908.png" />
                <!-- CARDS -->
                <div class="cards">
                    <div class="card">
                        <span class="material-symbols-outlined">attach_money</span>
                        <p>3,000.00 USD</p>
                        <span>رصيد محفظة الإيداع</span>
                    </div>
                    <div class="card">
                        <span class="material-symbols-outlined">wallet</span>
                        <p>1,140.00 USD</p>
                        <span>رصيد محفظة الفائدة</span>
                    </div>
                    <div class="card">
                        <span class="material-symbols-outlined">receipt_long</span>
                        <p>1,100.00 USD</p>
                        <span>إجمالي الإستثمار</span>
                    </div>
                    <div class="card">
                        <span class="material-symbols-outlined">filter_alt</span>
                        <p>240.00 USD</p>
                        <span>إجمالي الفائدة</span>
                    </div>
                    <div class="card">
                        <span class="material-symbols-outlined">savings</span>
                        <p>5,100.00 USD</p>
                        <span>إجمالي الإيداع</span>
                    </div>
                    <div class="card">
                        <span class="material-symbols-outlined">payments</span>
                        <p>100.00 USD</p>
                        <span>إجمالي السحب</span>
                    </div>
                </div>

                <!-- STATICS -->
                <div class="statics-dash"></div>
            </div>


        </div>
        
    
        
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            var options = {
            chart: {
                type: 'area'
            },
            colors:['#5636bd'],
            series: [{
                name: 'Series',
                data: [30,40,35,50,49,60,70,91,125]
            }],
            xaxis: {
                categories: [08,09,10,11,12,13,14,15,16]
            },
            dataLabels: {
                enabled: false
            },
            }

            var chart = new ApexCharts(document.querySelector(".statics-dash"), options);

            chart.render();
        </script>
</body>
</html>