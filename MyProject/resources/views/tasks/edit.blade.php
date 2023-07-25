@extends('layouts.admin')

@section('content')
    <div>
        <form action="{{ route('tasks.update', $tasks->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="intro_text">Заголовок</label>
                <input type="text" name="intro_text" class="form-control" id="intro_text" placeholder="Початковий текст" value="{{ $tasks->intro_text }}">
            </div>
            <div class="mb-3">
                <label for="task">Завдання</label>
                <textarea class="form-control" name="task" id="task" placeholder="Завдання">{{ $tasks->task }}</textarea>
            </div>
            <div class="mb-3">
                <label for="Answer1">Перше запитання</label>
                <input type="text" name="Answer1" class="form-control" id="Answer1" value="{{ $tasks->Answer1 }}" placeholder="Перше питання">
            </div>
            <div class="mb-3">
                <label for="Answer2">Друге запитання</label>
                <input type="text" name="Answer2" class="form-control" id="Answer2" value="{{ $tasks->Answer2 }}" placeholder="Друге питання">
            </div>
            <div class="mb-3">
                <label for="Answer3">Третє запитання</label>
                <input type="text" name="Answer3" class="form-control" id="Answer3" value="{{ $tasks->Answer3 }}" placeholder="Третє питання">
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
            <button type="submit" class="btn btn-success mt-3 mb-3">Оновити</button>
        </form>
    </div>
@endsection


