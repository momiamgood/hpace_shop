<nav>
    <img src="@vite(['resources/assets/logo_dark.png'])" alt="logo">
    <div>
        <a href="">Каталог</a>
        <a href="">Контакты</a>
        <a href="">О нас</a>
    </div>

    @guest()
        <div class="nav-auth">
            <a href="{{ route('register') }}">Регистрация</a>
            <a href="{{ route('login') }}" class="lnk-btn-small">Вход</a>
        </div>
    @else
        <div class="nav-auth">
            <a href="{{ route('profile.edit') }}">Профиль</a>
            <a href="{{ route('login') }}">Корзина</a>
        </div>
    @endguest
</nav>
