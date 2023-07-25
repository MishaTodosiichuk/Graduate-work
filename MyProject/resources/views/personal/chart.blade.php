@extends('layouts.personal')

@section('content')
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">Тест</th>
            <th scope="col">Оцінка</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mark as $data)
            <tr>
                <th scope="row">{{$data->title}}</th>
                <td>{{$data->mark}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
