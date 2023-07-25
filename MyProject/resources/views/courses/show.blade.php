@extends('layouts.default')

@section('title-block')
    {{$course->name}}
@endsection

@section('content')
    <div class="main-wrapper container d-flex flex-wrap">
        <main style="width: 68%; padding-right: 10px;">
            <div class="block article_block">
                <div class="presentation-block">
                    <div class="presentation-block">
                        <div class="img-presentation" style="width: 35%;">
                            <img src="../../img/Courses/{{$course->image}}"
                                 alt="{{$course->name}}"
                                 title="{{$course->name}}">
                        </div>
                        <div class="lesson-name-text">
                            <h2>{{$course->name}}</h2>
                            <div class="tags">
                                <a href="#" class="btn btn-outline-dark">
                                    {{$course->tag}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-block" style=" font-weight: 300; font-size: 1rem;">
                {{$course->intro_text}}
            </div>
            <div class="main-video">
                <h3 class="head-text">Відеоурок</h3>
                <iframe width="560" height="315" src="{{$course->video_lesson}}"
                        frameborder="0" allowfullscreen="" style="height: 315.014px;"></iframe>
            </div>
            <div class="main-text" style=" font-weight: 300; font-size: 1rem;">
                <h3 class="head-text">{{$course->title_description}}</h3>
                <p>{{$course->description}}</p>
                <p><br></p>
            </div>

            <div class="comments">
                <span class="form-button pre_code"><i class="fas fa-code"></i></span><b> Коментарі </b>
                <form action="" method="post">
                    @csrf
                    <textarea placeholder="Введіть тут коментар..." id="content" name="content"></textarea>
                    <input type="hidden" name="news_id" id="news_id" value="{{ $course->id }}">
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
                        @if(auth()->user()->role === 0 || auth()->user()->name === $data->user_name)
                            <div class="mt-3">
                                <form action="{{ route('reviews.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Видалити">
                                </form>
                            </div>
                            <hr>
                        @else
                            <hr>
                        @endif
                    @endforeach
                </div>
            </div>
        </main>
        <aside style="width: 29%;">
            <p class="heading mt-2"><b>Також рекомендуєм</b></p>
            <p class="heading mt-2"><b>Тести</b></p>
            <div class="allTests">
                @foreach($test as $data)
                    <div class="mt-3" style="min-width: 300px">
                        <h4>{{$data->title}}</h4>
                        <div class="text">
                            @if($data->start_lvl)
                                <a href="{{ route('tests.show', $data->id) }}" title="{{ $data->title }}">
                                    <span>Початковий рівень</span>
                                </a>
                            @endif
                            <div style="clear:both"></div>
                            @if($data->middle_lvl)
                                <a href="{{ route('tests.show', $data->id) }}" title="{{ $data->title }}">
                                    <span>Середній рівень</span>
                                </a>
                            @endif
                            <div style="clear:both"></div>
                            @if($data->hard_lvl)
                                <a href="{{ route('tests.show', $data->id) }}" title="{{ $data->title }}">
                                    <span>Складний рівень</span>
                                </a>
                            @endif
                        </div>
                        <div>
                            <img src="../../../img/Tests/{{$data->image}}" alt="$data->title" title="$data->title">
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{route('tests.index')}}" class="btn btn-danger mt-3 d-flex justify-content-center">
                Всі тести
            </a>
        </aside>
    </div>
@endsection


