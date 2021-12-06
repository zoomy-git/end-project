@extends('layouts/main')

@section('header')
    @include('partials.close-button')
@endsection

@section('content')

    <div class="container d-flex flex-column">
        <div class="container m-2 mt-4 text-center">
            <h1><strong>Tentang Kami</strong></h1>
        </div>
        <div class="mx-5 my-4">
            <h3>
                Kami adalah sebuah tim kecil pengembang pemula yang beranggotakan dua orang saat mengembangkan aplikasi web "One for All" ini.
            </h3>
            <h3>
                Aplikasi web ini merupakan proyek pertama kami dalam pengembangan web. Kami ingin menciptakan sebuah aplikasi sederhana yang bisa digunakan siapa saja baik mahasiswa atau pekerja. Saya dan teman saya mulai belajar pemrograman web sekitar 6 bulan yang lalu. Apabila ada kekurangan dalam aplikasi ini, mohon dimaklumi.
            </h3>
        </div>
        
    </div>
@endsection