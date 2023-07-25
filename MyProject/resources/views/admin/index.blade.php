@extends('layouts.admin')

@section('searchRouteAdmin')
    {{route('admin.search.news')}}
@endsection

@section('content')
    <a href="{{route('news.create')}}" class="btn btn-success mt-3 w-25">Додати</a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Назва</th>
            <th scope="col">Короткий текст</th>
            <th scope="col">Повний текст</th>
            <th scope="col">Зображення</th>
            <th scope="col">Кількість переглядів</th>
            <th scope="col">Оновлення</th>
            <th scope="col">Видалення</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->title}}</td>
                <td>{{$data->demo_content}}</td>
                <td>{{$data->content}}</td>
                <td>{{$data->image}}</td>
                <td>{{$data->count_views}}</td>
                <td><a href="{{ route('news.edit', $data->id) }}" class="btn btn-primary">Змінити</a></td>
                <td>
                    <form action="{{ route('news.destroy', $data->id) }}" method="post">
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
