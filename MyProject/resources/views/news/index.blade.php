@extends('layouts.default')

@section('title-block')
    Новини
@endsection

@section('searchRoute')
    {{ route('news.search') }}
@endsection

@section('content')

    <div class="container">
        <main>
            {{--<a href="{{route('news.index')}}">--}}<h1 class="heading nesting mt-3">Статті</h1></a>
            @if(count($news))
                <div class="d-flex w-100" style="flex-wrap: wrap;">
                    @foreach($news as $data)
                        <div class="col" style="padding: 10px 5px 5px 10px; min-width: 33%;max-width: 33%">
                            <div class="card shadow-sm " style="min-height: 400px; border-width: 3px 3px 3px 3px; border-radius: 8px">
                                <a href="{{ route('news.show', $data->id) }}" title="{{ $data->title }}">
                                    <img src="../../../img/{{ $data->image }}" style="height: 114px;" alt="{{ $data->title }}"
                                         class="bd-placeholder-img card-img-top" width="100%" height="225">
                                </a>
                                <div style="text-align: center" class="mt-2">
                                    {{ $data->title }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $data->demo_content }}</p>
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <small class="text-body-secondary">{{ $data->updated_at }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="margin-left: 10%;">
                    <h1 class="w-100 mt-5">Нічого не знайдено :(</h1>
                </div>
            @endif
        </main>
    </div>
    <div class="mt-5 d-flex" style="margin-left: 9%;">
        {{ $news->WithQueryString()->links() }}
    </div>
    <div class="container-fluid mt-5" style="margin-left: 10%; text-align: center; width: 40%; font-size: medium">
        <h2 class="font-weight-bold"><b>Новини та статті зі світу IT технологій</b></h2>
        <p>Новини it технологій. Велика добірка новин на тему програмування та загалом it технологій. Новинки IT, статті
            з програмування та освітні статті у форматі уроків</p>
    </div>
@endsection

{{--<div>
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Створити нову новину</a>
</div>--}}




