@section('footer')
<footer>
    <div class="container footer">
        <div class="footer-top">
            <router-link to="/">
                <div class="logo">
                    <div class="logo-image">
                        <img src="images\FooterLogo.svg" alt="logo">
                    </div>
                    <div class="logo-text">
                        <p>Открытки для любимых<br><span>Очень простое создание открыток для тех кто ваи дорог</span></p>
                    </div>
                    <nav>
                        <ul>
                            <li><router-link to="/">Главная</router-link></li>
                            <li><router-link to="/addPhoto">Создать</router-link></li>
                            <li><a href="#" >Pro Открытки</a></li>
                            <li><a href="#">Как сделать свою открытку?</a></li>
                        </ul>
                    </nav>
                </div>
            </router-link>
         </div>
         <div class="footer-bottom">
            <ul>
                <li><a href="#"><img src="images\TelegramIcon.svg" alt="Иконка телеграмма"> <span>@telegramm</span></a></li>
                <li><a href="#"><img src="images\MailIcon.svg" alt="Иконка телеграмма"> <span>mail@example</span></a></li>
            </ul>
        </div>
    </div>
    </footer>
@endsection