@extends('layouts.default')

@section('content')
    <div class="main-wrapper container d-flex justify-content-center">
        <form action="{{route('tasks.update', $task->id)}}" method="post">
            @csrf
        @foreach($task as $data)
                <h1>{{$data->task}}</h1>
                <input type="radio" name="answer1" id="1" class="radio"
                       value="wrong">
                <label class="mt-2">{{$data->Answer1}}</label><br>
                <input type="radio" name="answer2" id="2" class="radio"
                       value="wrong">
                <label class="mt-2">{{$data->Answer2}}</label><br>
                <input type="radio" name="answer3" id="3" class="radio"
                       value="wrong">
                <label class="mt-2">{{$data->Answer3}}</label><br>
            <hr>
        @endforeach
            <button type="submit" class="btn btn-danger mt-2">Відповісти</button>
        </form>
    </div>
@endsection

