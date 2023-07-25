@extends('layouts.admin')

@section('content')
    <a href="{{route('tests.create')}}" class="btn btn-success mt-3 w-25">Додати</a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Назва</th>
            <th scope="col">Зображення</th>
            <th scope="col">Початковий рівень</th>
            <th scope="col">Середній рівень</th>
            <th scope="col">Важкий рівень</th>
            <th scope="col">Користувач</th>
            <th scope="col">Оновлення</th>
            <th scope="col">Видалення</th>
        </tr>
        </thead>
        <tbody">
        @foreach($tests as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->title}}</td>
                <td>{{$data->image}}</td>
                <td>{{$data->start_lvl}}</td>
                <td>{{$data->middle_lvl}}</td>
                <td>{{$data->hard_lvl}}</td>
                <td>{{$data->user_id}}</td>
                <td><a href="{{ route('tests.edit', $data->id) }}" class="btn btn-primary">Змінити</a></td>
                <td>
                    <form action="{{ route('tests.destroy', $data->id) }}" method="post">
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
