@extends('layouts.personal')

@section('content')
    <form action="{{route('users.update', auth()->user()->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name">Ім'я</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Ім'я"
                   value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3">
            <label for="name">Електрона адреса</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Електронна адреса"
                   value="{{ auth()->user()->email }}">
        </div>
        <div class="mb-3">
            <label for="name">Введіть новий пароль</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Пароль"
                   value="{{ $user->password }}">
        </div>
    </form>
@endsection
