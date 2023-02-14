<nav>
    <a href="/">
        <img src="https://al-manarh.com/assets/images/logoIcon/logo.png" alt="">
    </a>
    <ul>
        <li><a href="/" class=@if($name == "home") 'active' @endif>الرئيسية</a></li>
        <li><a href="/about" class=@if($name == "about") 'active' @endif>من نحن</a></li>
        <li><a href="/packages" class=@if($name == "packages") 'active' @endif>الباقات</a></li>
        <li><a href="/faq" class=@if($name == "faq") 'active' @endif>الأسئلة الشائعة</a></li>
        <li><a href="/contact" class=@if($name == "contact") 'active' @endif>اتصل بنا</a></li>
    </ul>
    <div class="btn">
        <a href='/login'>دخول</a>
        <a href='register'>التسجيل</a>
    </div>
    <button class='openMenu'><span class="material-symbols-outlined">sort</span></button>
</nav>