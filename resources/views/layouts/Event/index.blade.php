@extends('layouts.app')

@section('content')
    <h1>Події</h1>
    <table border="1">
        <thead>
        <tr>
            <th>id</th>
            <th>Ім'я</th>
            <th>Дата</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->date }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
