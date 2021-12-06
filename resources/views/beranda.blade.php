@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    <div class="container d-flex flex-row justify-content-center align-self-center">
        <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
        <div class="quote mx-3 d-flex align-items-center" style="width: 50vh; font-family: 'Kalam';">
            <div class="row d-flex">

                <h4>
                    “Education is the most powerful weapon which you can use to change the world.”
                </h4>
            </div>
            <div class="row d-flex justify-content-end">
                <h4 class="w-auto">
                    - Nelson Mandela
                </h4>
            </div>
        </div>

        <div class="border-dark bg-light border border-1 mx-3 py-3 px-5 text-center rounded-3"
            style="width: 45vh; box-shadow: 2px 2px;">
            <h4>
                Target Minggu Ini

            </h4>
            <div class="target">
                @foreach ($target as $t)
                    @if (!($t->user_id === Auth::user()->id))
                        @continue;
                    @endif
                    @if ($t->tanggal > $seminggu)
                        @continue;
                    @endif
                    @if ($t->tanggal < $sekarang)
                        @continue;
                    @endif
                    <p>{{ $t->tanggal }} <br>
                        {{ $t->nama }}
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <a href='/Tentang' class="light mx-3 text-decoration-none">
        Tentang Kami
    </a>
    |
    <a href='/Petunjuk' class="light mx-3 text-decoration-none">
        Petunjuk
    </a>
@endsection
