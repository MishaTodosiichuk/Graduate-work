@extends('layouts.default')

@section('content')
    <section class="container">
        <div class="full-block-first">
            <div>
                <div class="info-block">
                    <div class="block-with-border">
                        <div class="start-time">Старт: <span class="start-date">{{$intensive->start_intensive}} </span> в
                            19:00 по Києву	</div>
                        <h1 class="front-heading">{{$intensive->title}}</h1>
                        <h2 class="front-heading">розробник</h2>
                    </div>
                </div>
                <div class="technologies">
                    <ul class="position_tech">
                        <li>html5</li>
                        <li>css3</li>
                        <li class="wide">javascript</li>
                        <li class="wide">typescript</li>
                        <li>mongo</li>
                        <li>node js</li>
                        <li class="wide">vue/react js</li>
                        <li>express</li>
                    </ul>
                    <img src="{{$intensive->image}}">
                    <div class="buttons">
                        <div class="btn btn-outline-success">Записатися на курс</div>
                        <div class="btn btn-outline-dark">Програма навчання</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


