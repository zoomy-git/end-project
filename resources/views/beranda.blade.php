@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    <div class="container d-flex flex-row my-5 justify-content-center align-self-center">
        <div class="quote mx-3 align-items-center" style="width: 50vh;">
            <h4>
                “Education is the most powerful weapon which you can use to change the world.”
            </h4>
            <h4>
                - Nelson Mandela
            </h4>
        </div>

        <div class="border-dark bg-light border border-1 mx-3 py-3 px-5 text-center" style="width: 45vh;">
            <h4>
                Target Minggu Ini

            </h4>
            <div class="target">
                <h5>Selasa, 21 Oktober 2014</h5>
                <h5>Basis Data - Memahami Subquery</h5>
                <h5>Selasa, 21 Oktober 2014</h5>
                <h5>Basis Data - Memahami Subquery</h5>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <a href = '/Tentang' class="light mx-3"> 
        Tentang Kami
    </a>
    |
    <a href = '/Petunjuk' class="light mx-3"> 
        Petunjuk
    </a>
@endsection
