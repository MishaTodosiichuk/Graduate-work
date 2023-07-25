@extends('layouts.default')

@section('title-block')
    Тести на практика
@endsection

@section('searchRoute')
    {{route('tests.search')}}
@endsection

@section('content')
    <h1 class="heading nesting container mt-3">Тести та практика</h1>
    <div class="allTests container">
        @foreach($test as $data)
            <div>
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
    <div class="mt-5 d-flex" style="margin-left: 9%;">
        {{ $test->WithQueryString()->links() }}
    </div>
    <div class="info-bottom-text">
        <h2 class="heading">Практичні завдання з програмування</h2>
        <p>Тут представлені практичні та тестові завдання з програмування. Ви знайдете як легкі, так і складні завдання
            з різних тем програмування</p>
    </div>
@endsection
