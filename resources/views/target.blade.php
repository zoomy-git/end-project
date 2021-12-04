@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    <div class="container w-75 mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Target
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
                        <form action="{{ route('tambahtarget') }}" method="POST">
                            @csrf
                            <input type="text" name="nama" id="nama" placeholder="Nama Aktivitas">
                            <input type="date" name="tanggal" id="tanggal">
                            <input type="text" name="kategori" id="kategori" placeholder="Kategori">
                            <input type="submit">
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Target</th>
                    <th scope="col">Tgl Harapan Tercapai</th>
                    <th scope="col">Kategori Target</th>
                    <th scope="col">Aksi</th>
                </tr>
            <tbody>
                @foreach ($target as $t)
                    <tr>
                        <th scope="row">{{ $t->id }}</th>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->tanggal }}</td>
                        <td>{{ $t->kategori }}</td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>

@endsection
