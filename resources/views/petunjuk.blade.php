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
                <li class="mb-3 me-5"><h4><strong>Aktivitas</strong>, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit cursus risus at ultrices mi tempus imperdiet. </h4></li>
                <li class="mb-3 me-5"><h4><strong>Materi</strong>, Cras semper auctor neque vitae tempus quam pellentesque nec. Mi proin sed libero enim sed faucibus. Velit scelerisque in dictum non consectetur. </h4></li>
                <li class="mb-3 me-5"><h4><strong>Target</strong>, Ultricies mi quis hendrerit dolor magna eget est. Convallis convallis tellus id interdum velit. Faucibus interdum posuere lorem ipsum dolor sit amet consectetur.</h4></li>
            </ul>
        </div>
    </div>
@endsection