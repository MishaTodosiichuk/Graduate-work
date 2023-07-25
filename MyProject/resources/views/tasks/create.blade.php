@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('tasks.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="intro_text">Заголовок</label>
                <input type="text" name="intro_text" class="form-control" id="intro_text" placeholder="Початковий текст" value="{{ old('intro_text') }}">
                @error('intro_text')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="task">Завдання</label>
                <textarea class="form-control" name="task" id="task" placeholder="Завдання">{{ old('task') }}</textarea>
                @error('task')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Answer1">Перше запитання</label>
                <input type="text" name="Answer1" class="form-control" id="Answer1" value="{{ old('Answer1') }}" placeholder="Перше питання">
                @error('Answer1')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Answer2">Друге запитання</label>
                <input type="text" name="Answer2" class="form-control" id="Answer2" value="{{ old('Answer2') }}" placeholder="Друге питання">
                @error('Answer2')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Answer3">Третє запитання</label>
                <input type="text" name="Answer3" class="form-control" id="Answer3" value="{{ old('Answer3') }}" placeholder="Третє питання">
                @error('Answer3')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="RightAnswer">Правильна відповідь</label>
                <select class="form-control" id="RightAnswer" name="RightAnswer">
                    <option>1</option>
                    <option>2</option>
                    {{--{{$tasks->RightAnswer === 3 ? 'selected': ''}}--}}
                    <option>3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3 mb-3">Створити</button>
        </form>
    </div>
@endsection
