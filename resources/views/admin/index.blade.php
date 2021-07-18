@extends('layouts.adm')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Главная </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.create') }}"> Создать новый пост</a>
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
        @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->title }}</td>
                <td>{{ $admin->description }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.show',$admin->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.edit',$admin->id) }}">Edit</a>
                    <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
