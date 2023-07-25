@extends('layouts.admin')

@section('content')
    <a href="{{route('tasks.create')}}" class="btn btn-success mt-3 w-25">Додати</a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Назва</th>
            <th scope="col">Запитання</th>
            <th scope="col">Відповідь 1</th>
            <th scope="col">Відповідь 2</th>
            <th scope="col">Відповідь 3</th>
            <th scope="col">Правильна відповідь</th>
            <th scope="col">Оновлення</th>
            <th scope="col">Видалення</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->intro_text}}</td>
                <td>{{$data->task}}</td>
                <td>{{$data->Answer1}}</td>
                <td>{{$data->Answer2}}</td>
                <td>{{$data->Answer3}}</td>
                <td>{{$data->RightAnswer}}</td>
                <td><a href="{{ route('tasks.edit', $data->id) }}" class="btn btn-primary">Змінити</a></td>
                <td>
                    <form action="{{ route('tasks.destroy', $data->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Видалити">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
