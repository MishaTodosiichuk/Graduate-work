<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top" style="width: 80%; margin-left: 10%">
    <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <p class="text-body-secondary">© 2023</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
        <h5>Інформація</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Сертифікати</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Довіники</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Реклама</a></li>
        </ul>
    </div>

    <div class="col mb-3">
        <h5>Про нас</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{route('pages.about')}}" class="nav-link p-0 text-body-secondary">Більше інформації</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Угода</a></li>
            <li class="nav-item mb-2"><a href="{{route('pages.sitemap')}}" class="nav-link p-0 text-body-secondary">Мапа сайту</a></li>
        </ul>
    </div>

    <div class="col mb-3">
        <h5>Акаунт</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{route('login')}}" class="nav-link p-0 text-body-secondary">Увійти</a></li>
            <li class="nav-item mb-2"><a href="{{route('register')}}" class="nav-link p-0 text-body-secondary">Реєстрація</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Зворотній зв'язок</a></li>
        </ul>
    </div>
</footer>
