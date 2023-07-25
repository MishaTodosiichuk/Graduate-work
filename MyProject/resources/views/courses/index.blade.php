@extends('layouts.default')

@section('title-block')
    Відеокурси
@endsection

@section('searchRoute')
    {{route('courses.search')}}
@endsection

@section('content')
    <div class="container">
        <main>
            <h1 class="heading nesting mt-3">Курси програмування</h1>
            <div class="allCourses mt-3">
                @foreach($course as $data)
                    <div class="course">
                        <div class="course-img">
                                <a href="{{ route('courses.show', $data->id) }}" title="{{ $data->name }}">
                                <img src="../../img/Courses/{{$data->image}}" style="height: " alt="{{$data->name}}"
                                     title="{{$data->title}}">
                            </a>
                                <a href="{{$data->tag}}">
                                <div class="button-tag bg-dark">{{$data->tag}}</div>
                            </a>
                            <div class="button-on-course"><i class="fas fa-play"></i></div>
                        </div>
                        <span class="title_course">{{$data->name}}</span>
                        <span class="time-start">{{$data->updated_at}}
                    </div>
                @endforeach
            </div>
            <div class="mt-5 d-flex" style="margin-left: 9%;">
                {{ $course->WithQueryString()->links() }}
            </div>
        </main>
    </div>
@endsection
