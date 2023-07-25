@extends('layouts.default')

@section('content')
    <div class="main-wrapper container ">
        <main class="left">
            <div id="test_info">
                <div class="separete img">
                    <img src="@yield('image')" alt="@yield('title')" title="@yield('title')">
                </div>
                <div class="separete">
                    <h2>@yield('title')</h2>
                    <span class="hardness">Складність:
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </span>
                </div>
            </div>
            <div id="navigation">
                <h2>Інші тести</h2>
                <ul>
                    <li class="active">Початковий рівень</li>
                    <a href="#">
                        <li>Середній рівень</li>
                    </a>
                    <a href="#">
                        <li>Складний рівень</li>
                    </a>
                </ul>
            </div>
        </main>
        <aside style="width: 56%">
            <div>
                <h1><b>Тест на знання основ @yield('title')</b></h1>
                <p class="mt-3">
                    Тут ви можете пройти тест на тему @yield('title').
                    На тест виділяється невеликий проміжок часу, а також після закінчення
                    тесту ви зможете переглянути результати та ознайомитися з вірними та
                    невірними відповідями.
                </p>
                <button class="btn btn-danger btn-lg">Почати тестування</button>
            </div>
            <div class="comments mt-5">
                <span class="form-button pre_code"><i class="fas fa-code"></i></span><b> Коментарі </b>
                <form action="{{route('reviews.tests.store')}}" method="post">
                    @csrf
                    <textarea placeholder="Введіть тут коментар..." id="content" name="content"></textarea>
                    <input type="hidden" name="news_id" id="news_id" value="@yield('id')">
                    @if(!auth()->user())
                        <input type="hidden" name="user_name" id="user_name" value="1">
                    @else
                        <input type="hidden" name="user_name" id="user_name" value="{{ Auth()->user()->name }}">
                    @endif

                    <div style="clear: both"></div>
                    @if(!auth()->user())
                        <a href="{{ route('login') }}" class="btn btn-danger">Додати коментар</a>
                    @else
                        <button class="btn btn-danger" type="submit">Додати коментар</button>
                    @endif
                </form>
                <hr>
                <div style="clear: both"></div>
                <div class="all-comments">
                    @foreach($reviews as $data)
                        <div class="comment">
                            <p class="user-name "><b>{{$data->user_name}}</b> {{$data->updated_at}}</p>
                            <div class="main-block">{{$data->content}}</div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
@endsection

