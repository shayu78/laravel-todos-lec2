@extends('layouts.app')

@section('content')
    @if ($todo)
        <h3>Задача с идентификатором {{ $todo->id }}</h3>
        <table class="table table-bordered">
            <tr>
                <th>Ид.</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Дата создания</th>
                <th>Дата обновления</th>
            </tr>
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->created_at }}</td>
                <td>{{ $todo->updated_at }}</td>
            </tr>
        </table>
    @else
        <div class="alert alert-warning text-center">
            <h5>Задача не найдена</h5>
        </div>
    @endif
@endsection
