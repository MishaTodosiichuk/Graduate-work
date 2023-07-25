@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('tests.update', $test->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $test->title }}">
            </div>
            <div class="mb-3">
                <label for="image">Зображення</label>
                <input type="text" name="image" class="form-control" id="image" value="{{ $test->image }}" placeholder="Image">
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

            <button type="submit" class="btn btn-success mt-3">Оновити</button>
        </form>
    </div>
@endsection


