@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('news.update', $news->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Назва" value="{{ $news->title }}">
            </div>
            <div class="mb-3">
                <label for="demo_content">Контент</label>
                <textarea class="form-control" name="demo_content" id="demo_content" placeholder="Короткий текст">{{ $news->demo_content }}</textarea>
            </div>

            <div class="mb-3">
                <label for="content">Контент</label>
                <textarea class="form-control" name="content" id="content" placeholder="Повний текст">{{ $news->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image">Зображення</label>
                <input type="text" name="image" class="form-control" id="image" value="{{ $news->image }}" placeholder="Зображення">
            </div>
            <div class="mb-3">
                <label for="count_views">Зображення</label>
                <input type="text" name="count_views" class="form-control" id="count_views" value="{{ $news->count_views }}" placeholder="Кількість переглядів">
            </div>
            <button type="submit" class="btn btn-success mt-3 mb-3">Оновити</button>
        </form>
    </div>
@endsection


