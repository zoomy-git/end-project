@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')

    <div class="container w-75 mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Aktivitas
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
                        <form action="{{ route('tambahaktivitas') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id" value={{ Auth::user()->id }}>
                            <input type="text" name="nama" id="nama" placeholder="Nama Aktivitas">
                            <input type="time" name="pukul" id="pukul">
                            <input type="date" name="tanggal" id="tanggal">
                            <input type="text" name="kategori" id="kategori" placeholder="Kategori">
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h3>Aktivitas Hari Ini ({{ $cdate = date('Y-m-d') }}) :</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Pukul</th>
                    <th scope="col">Aktivitas</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aktivitas as $a)
                    <tr>
                        @if (!($a->user_id === Auth::user()->id))
                            @continue;
                        @endif
                        @if ($a->tanggal != $cdate)
                            @continue;
                        @endif
                        <td>{{ $a->pukul }}</td>
                        <td>{{ $a->nama }}</td>
                        <td>{{ $a->kategori }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalInput{{ $a->id }}">
                                Edit
                            </button>
                            <div class="modal fade" id="modalInput{{ $a->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('updateaktivitas') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value={{ $a->id }}>
                                                <input type="text" name="nama" id="nama" value="{{ $a->nama }}">
                                                <input type="time" name="pukul" id="pukul" value="{{ $a->pukul }}">
                                                <input type="date" name="tanggal" id="tanggal" value="{{ $a->tanggal }}">
                                                <input type="text" name="kategori" id="kategori"
                                                    value="{{ $a->kategori }}">
                                                <input type="submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/hapusaktivitas/{{ $a->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>




@endsection
