@extends('layouts/main')

@section('header')
    @include('partials.close-button')
@endsection

@section('content')

    <div class="container d-flex flex-column">
        <div class="container m-2 mt-4 text-center">
            <h1><strong>Petunjuk Penggunaan</strong></h1>
        </div>
        <div class="container mx-5 my-3">
            <ul class="list-group list-group-flush d-flex flex-column mx-5 my-3">
                <li class="mb-3 me-5"><h4><strong>Aktivitas</strong>
                    , digunakan untuk mencatat kegiatan apa yang akan dilakukan hari ini. </h4></li>
                <li class="mb-3 me-5"><h4><strong>Materi</strong>
                    , digunakan untuk mencantumkan pranala luar yang bisa dicek kapan saja. </h4></li>
                <li class="mb-3 me-5"><h4><strong>Target</strong>
                    , digunakan untuk menyimpan waktu tenggat untuk menyelesaikan suatu pekerjaan.</h4></li>
            </ul>
        </div>
    </div>
@endsection