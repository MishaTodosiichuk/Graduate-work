@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('news.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Назва" value="{{ old('title') }}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="demo_content">Початковий текст</label>
                <textarea class="form-control" name="demo_content" id="demo_content" placeholder="Початковий текст">{{ old('demo_content') }}</textarea>
                @error('demo_content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content">Повний текст</label>
                <textarea class="form-control" name="content" id="content" placeholder="Повний текст">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Зображення</label>
                <input type="text" name="image" class="form-control" id="image" value="{{ old('image') }}" placeholder="Зображення">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="count_views">Кількість переглядів</label>
                <input type="text" name="count_views" class="form-control" id="count_views" value="{{ old('count_views') }}" placeholder="Кількість переглядів">
                @error('count_views')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mt-3 mb-3">Створити</button>
        </form>
    </div>
@endsection
