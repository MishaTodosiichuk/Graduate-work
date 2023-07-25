@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('courses.update', $course->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name">Назва</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Назва"
                       value="{{ $course->name }}">
            </div>
            <div class="mb-3">
                <label for="language">Мова програмування</label>
                <input type="text" name="tag" class="form-control" id="tag" placeholder="Мова програмування"
                       value="{{ $course->tag }}">
            </div>
            <div class="mb-3">
                <label for="image">Зображення</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Зображення"
                       value="{{ $course->image }}">
            </div>
            <div class="mb-3">
                <label for="title_description">Заголовок</label>
                <input type="text" name="title_description" class="form-control" id="title_description"
                       placeholder="Заголовок" value="{{ $course->title_description }}">
            </div>
            <div class="mb-3">
                <label for="description">Опис</label>
                <textarea class="form-control" name="description" id="description"
                          placeholder="Опис">{{ $course->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="intro_text">Початковий текст</label>
                <input type="text" name="intro_text" class="form-control" id="intro_text"
                       value="{{ $course->intro_text }}" placeholder="Початковий текст">
            </div>
            <div class="mb-3">
                <label for="video_lesson">Відеоролик</label>
                <input type="text" name="video_lesson" class="form-control" id="video_lesson" value="{{ $course->video_lesson }}" placeholder="Відеоролик">
            </div>
            <button type="submit" class="btn btn-success mt-3 mb-3">Оновити</button>
        </form>
    </div>
@endsection


