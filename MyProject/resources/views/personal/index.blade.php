@extends('layouts.personal')

@section('content')
    <form action="{{route('user.update', auth()->user()->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name">{{ auth()->user()->name }}</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Введіть нове ім'я">
        </div>
        <div class="mb-3">
            <label for="name">{{auth()->user()->email }}</label>
            <input type="text" name="email" class="form-control" id="email"
                   placeholder="Введіть нову електронну адресу">
        </div>
        <div class="mb-3">
            <label for="name">Введіть новий пароль</label>
            <input type="password" name="password" class="form-control" id="password"
                   placeholder="Введіть новий пароль">
        </div>
        <button type="submit" class="btn btn-primary">Оновити інформацію</button>
    </form>
@endsection
