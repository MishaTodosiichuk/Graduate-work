@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('tests.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" value="{{ old('title') }}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Зображення</label>
                <input type="text" name="image" class="form-control" id="image" value="{{ old('image') }}" placeholder="Шлях до зображення">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="start_lvl">Початковий рівень</label>
                <select class="form-control" id="start_lvl" name="start_lvl">
                    <option>1</option>
                    <option>0</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="middle_lvl">Середній рівень</label>
                <select class="form-control" id="middle_lvl" name="middle_lvl">
                    <option>1</option>
                    <option>0</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <label for="hard_lvl">Важкий рівень</label>
                <select class="form-control" id="hard_lvl" name="hard_lvl">
                    <option>1</option>
                    <option>0</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="user_id">Користувач(тимчасове поле)</label>
                <input type="text" name="user_id" class="form-control" id="user_id" placeholder="Користувач(тимчасове поле)" value="{{ old('user_id') }}">
            </div>
            <button type="submit" class="btn btn-success mt-3">Створити</button>
        </form>
    </div>
@endsection
