@section('header')
<header>
        <div class="container header">
            <router-link to="/">
                <div class="logo">
                    <div class="logo-image">
                        <img src="images\LogoIcon.svg" alt="logo">
                    </div>
                    <div class="logo-text">
                        <p>Открытки для любимых<br><span>Очень простое создание открыток для тех кто вам дорог</span></p>
                    </div>
                </div>
            </router-link>
            <nav>
                <ul>
                    <li><router-link to="/">Главная</router-link></li>
                    <li><router-link to="/addPhoto">Шаблоны</router-link></li>
                    <li><router-link to="/addPhoto">Создать свою открытку?</router-link></li>
                    <li><a href="#">Pro Открытки</a></li>
                </ul>
            </nav>
        </div>
    </header>
@endsection