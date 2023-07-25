@extends('layouts.default')

@section('title-block')
    Головна сторінка
@endsection

@section('searchRoute')
    {{route('news.search')}}
@endsection

@section('content')
    @include('inc.first-section')
    <section class=text-white">
        <div class="container">
            <div style="text-align: center;">
                <h2>Відеокурси</h2>
                @if(!auth()->user())
                    <a href="{{route('login')}}" class="btn btn-outline-dark" style="padding-top: 10px">Усі курси</a>
                @else
                    <a href="{{route('courses.index')}}" class="btn btn-outline-dark" style="padding-top: 10px">Усі
                        курси</a>
                @endif

                <p style="padding-top: 10px">
                    У нашому співтоваристві програмістів на даний момент представлено {{$news->total()}} курсів,
                    які є
                    безкоштовними. Ви
                    можете розпочати вивчення безкоштовних курсів прямо зараз. Нижче наведено кілька
                    курсів на сайті.
                </p>
            </div>
        </div>
        <div class="news_section w-100">
            @foreach($course as $data)
                @switch($data->id)
                    @case(1)
                        <div class="box" style="--clr:#ef6b6b;">
                            <div class="content">
                                <div class="icon">
                                    <ion-icon name="hardware-chip-outline"></ion-icon>
                                </div>
                                <div class="text">
                                    <h3>{{$data->name}}</h3>
                                    <p>{{$data->title_description}}</p>
                                    @if(!auth()->user())
                                        <a href="{{ route('login') }}">Читати більше</a>
                                    @else
                                        <a href="{{ route('courses.show', $data->id) }}">Читати більше</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @break($data)
                    @case(2)
                        <div class="box" style="--clr:#eb5ae5;">
                            <div class="content">
                                <div class="icon">
                                    <ion-icon name="code-slash"></ion-icon>
                                </div>
                                <div class="text">
                                    <h3>{{$data->name}}</h3>
                                    <p>{{$data->title_description}}</p>
                                    @if(!auth()->user())
                                        <a href="{{ route('login') }}">Читати більше</a>
                                    @else
                                        <a href="{{ route('courses.show', $data->id) }}">Читати більше</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @break($data)
                    @case(3)
                        <div class="box" style="--clr:#5b98eb;">
                            <div class="content">
                                <div class="icon">
                                    <ion-icon name="globe-outline"></ion-icon>
                                </div>
                                <div class="text">
                                    <h3>{{$data->name}}</h3>
                                    <p>{{$data->title_description}}</p>
                                    @if(!auth()->user())
                                        <a href="{{ route('login') }}">Читати більше</a>
                                    @else
                                        <a href="{{ route('courses.show', $data->id) }}">Читати більше</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @break($data)
                    @case(4)
                        <div class="box" style="--clr:#efdf3e;">
                            <div class="content">
                                <div class="icon">
                                    <ion-icon name="server-outline"></ion-icon>
                                </div>
                                <div class="text">
                                    <h3>{{$data->name}}</h3>
                                    <p>{{$data->title_description}}</p>
                                    @if(!auth()->user())
                                        <a href="{{ route('login') }}">Читати більше</a>
                                    @else
                                        <a href="{{ route('courses.show', $data->id) }}">Читати більше</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @break($data)
                    @case(5)
                        <div class="box" style="--clr:#1d9169;">
                            <div class="content">
                                <div class="icon">
                                    <ion-icon name="terminal-outline"></ion-icon>
                                </div>
                                <div class="text">
                                    <h3>{{$data->name}}</h3>
                                    <p>{{$data->title_description}}</p>
                                    @if(!auth()->user())
                                        <a href="{{ route('login') }}">Читати більше</a>
                                    @else
                                        <a href="{{ route('courses.show', $data->id) }}">Читати більше</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @break($data)
                    @case(6)
                        <div class="box" style="--clr:#c671dc;">
                            <div class="content">
                                <div class="icon">
                                    <ion-icon name="logo-android"></ion-icon>
                                </div>
                                <div class="text">
                                    <h3>{{$data->name}}</h3>
                                    <p>{{$data->title_description}}</p>
                                    @if(!auth()->user())
                                        <a href="{{ route('login') }}">Читати більше</a>
                                    @else
                                        <a href="{{ route('courses.show', $data->id) }}">Читати більше</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @break($data)
                @endswitch
            @endforeach
        </div>
        <div class="mt-2" style="text-align: center; padding-bottom: 15px">
            @if(!auth()->user())
                <a href="{{ route('login') }}" class="btn btn-outline-danger btn-lg">
                    Подивитися всі курси [{{ $course->total() }}]
                </a>
            @else
                <a href="{{ route('courses.index') }}" class="btn btn-outline-danger btn-lg">
                    Подивитися всі курси [{{ $course->total() }}]
                </a>
            @endif
        </div>
    </section>
    <section>
        <div class="container">
            <div style="text-align: center; padding-top: 30px">
                <h2><b>Нові статті</b></h2>
            </div>
            <div class="d-flex w-100" style="flex-wrap: wrap; justify-content: center">
                @foreach($news as $data)
                    <div class="col" style="margin: 10px 50px 50px 10px; min-width: 40%; max-width: 30%">
                        <div class="card shadow-sm" style="min-height: 400px;">
                            <a href="{{ route('news.show', $data->id) }}" title="{{ $data->title }}">
                                <img src="../../img/{{ $data->image }}" alt="{{ $data->title }}"
                                     class="bd-placeholder-img card-img-top" width="100%" height="180">
                            </a>
                            <div style="text-align: center" class="mt-2">
                                {{ $data->title }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $data->demo_content }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-body-secondary">{{ $data->updated_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-2" style="text-align: center; padding-bottom: 15px">
            <a href="{{ route('news.index') }}" class="btn btn-danger btn-lg">
                Подивитися більше [{{$news->total()}}]
            </a>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </section>
@endsection
