@extends('layouts.panel')

@section('links css')
    <link rel="stylesheet" href="{{ asset('./assets/css/pages/dashboard.css') }}">
@section('content')
    <main class="main">
        <div class="cards">
            <div class="card students">
                <h3>Кількість студентів</h3>
                    <p>1,200</p>
            </div>
            <div class="card courses">
                <h3>Кількість курсів</h3>
                    <p>35</p>
            </div>
            <div class="card subjects">
                <h3>Предметів</h3>
                    <p>87</p>
            </div>
            <div class="card registered">
                <h3>Зареєстровано</h3>
                    <p>980</p>
            </div>
            <div class="card sessions">
                <h3>Активні сесії</h3>
                <p>4</p>
            </div>
        </div>
    </main>
@endsection