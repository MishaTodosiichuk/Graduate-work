@extends('layouts.default')

@section('content')
    <div>
        <form action="{{ route('intensive.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title">Заголовок</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title"
                       placeholder="Заголовок">

                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content">Контент</label>
                <textarea class="form-control" name="content" id="content" placeholder="Контент">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Фотографія</label>
                <input value="{{ old('image') }}" type="text" name="image" class="form-control" id="image"
                       placeholder="image">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mt-3">Створити</button>
        </form>
    </div>
@endsection
