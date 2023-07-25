@extends('layouts.default')

@section('content')
    <div>
        <form action="{{ route('intensive.update', $news->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $news->title }}">
            </div>
            <div class="mb-3">
                <label for="content">Контент</label>
                <textarea class="form-control" name="content" id="content" placeholder="Content">{{ $news->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image">Фотографія</label>
                <input type="text" name="image" class="form-control" id="image" value="{{ $news->image }}" placeholder="Image">
            </div>
            <button type="submit" class="btn btn-success mt-3">Оновити</button>
        </form>
    </div>
@endsection


