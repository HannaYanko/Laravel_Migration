@extends('layouts.app')

@section('content')
    <h1>Список користувачів</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} - <a href="{{ route('users.show', $user->id) }}">Деталі</a>
                | <a href="{{ route('users.edit', $user->id) }}">Редагувати</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('users.create') }}">Додати нового користувача</a>
@endsection
