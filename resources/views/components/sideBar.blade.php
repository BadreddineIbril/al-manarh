<div class="side-bar">
    <div class="logo">
        <img src="https://al-manarh.com/assets/images/logoIcon/logo.png" alt="">
    </div>
    <ul>
        <!-- DASHBOARD -->
        <li>
            <a href="/user/dashboard" class=@if($name == "/user/dashboard") 'active' @endif> <span class="material-symbols-outlined">dashboard</span> <p>لوحة التحكم</p></a></li>
        <li>
        <!-- الإيداع -->
        <li>
            <p class="addition">الإيداع</p>
        </li>
        <li>
            <a href="/user/deposit-money" class=@if($name == "/user/deposit-money") 'active' @endif> <span class="material-symbols-outlined">wallet</span> <p>إيداع الأموال</p> </a>
        </li>
        <li>
            <a href="/user/my-deposits" class=@if($name == "/user/my-deposits") 'active' @endif> <span class="material-symbols-outlined">dns</span> <p> أرشيف الودائع</p> </a>
        </li>
        <!-- إستثمار -->
        <li>
            <p class="addition">إستثمار</p>
        </li>
        <li>
            <a href="/user/invest-money" class=@if($name == "/user/invest-money") 'active' @endif> <span class="material-symbols-outlined">paid</span> <p>استثمار الأموال</p></a>
        </li>
        <li>
            <a href="/user/my-investments" class=@if($name == "/user/my-investments") 'active' @endif> <span class="material-symbols-outlined">toggle_on</span> <p>إستثماراتي النشطة</p></a>
        </li>
        <!-- سحب -->
        <li>
            <p class="addition">سحب</p>
        </li>
        <li>
            <a href="/user/withdraw-money" class=@if($name == "/user/withdraw-money") 'active' @endif> <span class="material-symbols-outlined">payments</span> <p>سحب الاموال</p></a>
        </li>
        <li>
            <a href="/user/my-withdrawals" class=@if($name == "/user/my-withdrawals") 'active' @endif> <span class="material-symbols-outlined">inventory_2</span> <p>أرشيف السحب</p></a>
        </li>
        <li>
            <a href="/user/withdraw-accounts" class=@if($name == "/user/withdraw-accounts") 'active' @endif> <span class="material-symbols-outlined">credit_card</span> <p>وسائل السحب</p></a>
        </li>
        <!-- تحويل الأموال -->
        <li>
            <a href="/user/transfer-balance" class=@if($name == "/user/transfer-balance") 'active' @endif> <span class="material-symbols-outlined">receipt_long</span> <p>تحويل الأموال</p></a>
        </li>
        <!-- معاملات الحساب -->
        <li>
            <p class="addition">معاملات الحساب</p>
        </li>
        <!-- المعاملات -->
        <li>
            <a href="/user/transactions" class=@if($name == "/user/transactions") 'active' @endif> <span class="material-symbols-outlined">sync_alt</span> <p>المعاملات</p></a>
        </li>
        <!--  الإحالات -->
        <li>
            <a href="/user/referrals" class=@if($name == "/user/referrals") 'active' @endif> <span class="material-symbols-outlined">attachment</span> <p>الإحالات</p></a>
        </li>
        <!--   عمولة الإحالات -->
        <li>
            <a href="/user/commissions" class=@if($name == "/user/commissions") 'active' @endif> <span class="material-symbols-outlined">attach_money</span> <p>عمولة الإحالات</p></a>
        </li>
        <!-- بنرات إعلانية -->
        <li>
            <a href="#"> <span class="material-symbols-outlined">border_style</span> <p>بنرات إعلانية</p></a>
        </li>
        <!-- إحصل على الدعم -->
        <li>
            <p class="addition">إحصل على الدعم</p>
        </li>
        <li>
            <a href="/user/new-ticket" class=@if($name == "/user/new-ticket") 'active' @endif> <span class="material-symbols-outlined">contact_support</span> <p>إفتح تذكرة دعم جديدة</p></a>
        </li>
        <li>
            <a href="/user/my-tickets" class=@if($name == "/user/my-tickets") 'active' @endif> <span class="material-symbols-outlined">contact_support</span> <p> تذاكر الدعم</p></a>
        </li>
        <!--  الإعدادات -->
        <li>
            <p class="addition"> الإعدادات</p>
        </li>
        <!-- تأمين الحساب -->
        <li>
            <a href="/user/twofactor" class=@if($name == "/user/twofactor") 'active' @endif> <span class="material-symbols-outlined">security</span> <p> تأمين الحساب</p></a>
        </li>
        <!--  خروج -->
        <li>
            <a href="/" > <span class="material-symbols-outlined">logout</span> <p>خروج</p></a>
        </li>
    </ul>
</div>