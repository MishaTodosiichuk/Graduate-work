@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('courses.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Назва</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Назва"
                       value="{{ old('name') }}">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tag">Мова програмування</label>
                <input type="text" name="tag" class="form-control" id="tag" placeholder="Мова програмування"
                       value="{{ old('tag') }}">
                @error('tag')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Зображення</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Шлях до зображення"
                       value="{{ old('image') }}">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title_description">Заголовок</label>
                <input type="text" name="title_description" class="form-control" id="title_description"
                       placeholder="Заголовок" value="{{ old('title_description') }}">
                @error('title_description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Опис</label>
                <textarea class="form-control" name="description" id="description">{{ old('description') }}
                </textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="intro_text">Початковий текст</label>
                <input type="text" name="intro_text" class="form-control" id="intro_text"
                       value="{{ old('intro_text') }}" placeholder="Початковий текст">
                @error('intro_text')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="video_lesson">Відеоролик</label>
                <input type="text" name="video_lesson" class="form-control" id="video_lesson"
                       value="{{ old('video_lesson') }}" placeholder="Шлях до відеоролику">
                @error('video_lesson')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mt-3 mb-3">Створити</button>
        </form>
    </div>
@endsection
