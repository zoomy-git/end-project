@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    <div class="container w-75 mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Materi
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('tambahmateri') }}" method="POST">
                            @csrf
                            <input type="text" name="link" id="link" placeholder="Link Materi">
                            <input type="text" name="kategori" id="kategori" placeholder="Kategori">
                            <input type="text" name="deskripsi" id="deskripsi" placeholder="deskripsi singkat">
                            <input type="submit">
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Materi</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Mata Kuliah</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($materi as $m)
                    <tr>
                        <td>
                            <iframe width="180" height="120" src="{{ $m->link }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </td>
                        <td>{{ $m->deskripsi }}</td>
                        <td>{{ $m->kategori }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
