@extends('layouts.default')

@section('content')
    <section class="d-flex flex-wrap">
        <main style="width: 55%; margin-left: 5%;" class="container">
            <div style="width: 100%;">
                <div style="width: 100% ; margin-top: 15px;">
                    <img style="width: 100%" src="../../../img/{{ $news->image }}">
                </div>
                <div class="features d-flex mt-3">
                    <div style="margin-left: 10px;">
                        <i class="fas fa-eye"></i> {{ $news->count_views }}
                    </div>
                    <div style="margin-left: 12%;">
                        <i class="far fa-clock"></i> {{ $news->updated_at }}
                    </div>
                    <div style="margin-left: 12%;">
                        <a href="#comments-block" title="Коментарі">
                            <i class="fas fa-comments" style="color: #ee6e6e;"></i>
                        </a>
                    </div>
                </div>
                <div style="margin-top: 10px">
                    <p class="fs-3 fw-bold">{{ $news->title }}</p>
                </div>
            </div>
            <div style="width: 100%; margin-top: 10px">
                <p class="fs-5">{{ $news->content }}</p>
            </div>
            <div class="comments">
                <span class="form-button pre_code"><i class="fas fa-code"></i></span><b> Коментарі </b>
                <form action="{{route('reviews.news.store')}}" method="post">
                    @csrf
                    <textarea placeholder="Введіть тут коментар..." id="content" name="content"></textarea>
                    <input type="hidden" name="news_id" id="news_id" value="{{ $news->id }}">
                    @if(auth()->user())
                        <input type="hidden" name="user_name" id="user_name" value="{{ Auth()->user()->name }}">
                    @endif
                    <div style="clear: both"></div>
                    <button class="btn btn-danger" type="submit">Додати коментар</button>
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
                        {{--@if(auth()->user()->role === 0 || auth()->user()->name === $data->user_name)
                            <div class="mt-3">
                                <form action="{{ route('reviews.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Видалити">
                                </form>
                            </div>
                            <hr>
                        @else

                        @endif--}}
                    @endforeach
                </div>
            </div>
        </main>
        <aside style="width: 30%; margin-right: 5%">
            <p class="heading mt-2">Програма навчання</p>
            <p class="heading mt-2">Відеокурси</p>

            @foreach($courses as $data)
                <div class="course" style="width: 90%; justify-content: center">
                    <div class="course-img">
                        <a href="{{ route('courses.show', $data->id) }}" title="{{ $data->name }}">
                            <img src="../../img/Courses/{{$data->image}}"  alt="{{$data->name}}"
                                 title="{{$data->title}}">
                        </a>
                        <div class="button-tag bg-dark">{{$data->tag}}</div>

                        <div class="button-on-course"><i class="fas fa-play"></i></div>
                    </div>
                    <span class="title_course">{{$data->name}}</span>
                    <span class="time-start">{{$data->updated_at}}</span>
                </div>
            @endforeach
            <a href="{{route('courses.index')}}" class="btn btn-danger">
                Всі відеокурси
            </a>
        </aside>
    </section>
@endsection


