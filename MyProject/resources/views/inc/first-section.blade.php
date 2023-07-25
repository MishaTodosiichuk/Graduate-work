<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="../img/mobile-main.svg" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Онлайн-школа IT професій</h1>
            <p class="lead ">Навчаємо веб програмуванню, створенню ігор та розробки ПЗ. Проходьте курси, вирішуйте завдання, переглядайте новини та ставайте справжніми майстрами програмування!</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                @if(!auth()->user())
                    <a href="{{route('login')}}"><button type="button" class="btn btn-danger btn-lg px-4 me-md-2">Онлайн навчання</button></a>
                @else
                    <a href="{{route('courses.index')}}"><button type="button" class="btn btn-danger btn-lg px-4 me-md-2">Онлайн навчання</button></a>
                @endif
            </div>
        </div>
    </div>
</div>
