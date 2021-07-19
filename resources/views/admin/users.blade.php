@extends('layouts.adm')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Пользователи</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>
            </div>
            <div class="pull-right">
{{--                <a class="btn btn-success" href="{{ route('admin.createUsers') }}"> Создать новый пост</a>--}}
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Название</th>
            <th>Описание</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
{{--                    <form action="{{ route('admin.destroyUser',$user->id) }}" method="POST">--}}

{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                    </form>--}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
