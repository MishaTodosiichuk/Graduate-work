@extends('layouts.admin')

@section('content')
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ім'я</th>
            <th scope="col">Електронна адреса</th>
            <th scope="col">Роль</th>
            <th scope="col">Оновити</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>
                    <form action="{{ route('users.update', $data->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="mb-3 form-group">
                            <select class="form-control" id="role" name="role">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == $data->role ? 'selected' : ''}}>
                                        {{$role}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <td>
                            <button type="submit" class="btn btn-primary">Оновити</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
