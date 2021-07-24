@extends('layouts.app')

@section('content')
    <h3>Список всех дел</h3>
    <table class="table table-bordered">
        <tr>
            <th>Ид.</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Дата создания</th>
            <th>Дата обновления</th>
        </tr>
        @foreach ($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->created_at }}</td>
                <td>{{ $todo->updated_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection
