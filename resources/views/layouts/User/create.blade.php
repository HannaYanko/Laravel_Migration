
@extends('layouts.app')

@section('content')
    <h1>Додати нового користувача</h1>

    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <button type="submit">Додати користувача</button>
    </form>
@endsection
