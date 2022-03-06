@extends('layouts.layout', ['title' => "404 ошибка. Вы попали не туда"])

@section('content')
    <div class="card">
        <h2 class="card-header">Ты зашел не в тот район, дружище (404 ошибка)</h2>
        <img src="{{ asset('img/404.jpg') }}" style="height: 700px" alt="pigeon">
    </div>

    <a href="/" class="btn btn-outline-primary">Срочно вернуться на главную</a>
@endsection()
