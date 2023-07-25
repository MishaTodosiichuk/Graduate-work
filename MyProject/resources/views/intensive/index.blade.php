@extends('layouts.default')

@section('title-block')
    Програми навчання
@endsection

@section('searchRoute')
    {{route('intensive.search')}}
@endsection

@section('content')
    <div class="container">
        <h1 class="heading nesting mt-3">Програми навчання</h1>
    <div class="allCourses mt-3 container">
        @foreach($intensive as $data)
            <div class="course ">

                </a>
                <div class="course-img"><a href="{{ route('intensive.show', $data->id) }}" title="{{ $data->title }}">
                        <img src="{{$data->image}}" alt="{{$data->title}}"
                             title="{{$data->title}}">
                    </a><a href="web">
                        <div class="button-tag bg-dark"># Онлайн</div>
                    </a>
                    <div class="button-on-course"><i class="fas fa-play"></i></div>
                </div>
                <span class="title_course">{{$data->title}}</span>
                <span class="time-start" style="color: #0a0e14">Старт: {{$data->start_intensive}}<br> Рівень: {{$data->lvl}} {{$data->lvl_image}}</span>
            </div>
        @endforeach
    </div>
    <div class="info-bottom-text">
        <h2 class="heading">Онлайн програми навчання</h2>
        <p>Пропонуємо вашій увазі інтенсивні курси програмування, де протягом декількох місяців ви швидко
            зможете освоїти необхідну вам технологію. На сайті представлені як великі програми навчання, так
            і маленькі курси з програмування</p>
    </div>
    </div>
@endsection


