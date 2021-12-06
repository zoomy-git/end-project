@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    <div class="container w-75 mt-4 d-flex flex-column">
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end">
            
            <button type="button" class="btn dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Target
            </button>
        </div>
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
                            <input type="hidden" name="user_id" id="user_id" value={{ Auth::user()->id }}>
                            <input type="text" name="nama" id="nama" placeholder="Nama Aktivitas" required>
                            <input type="date" name="tanggal" id="tanggal" required>
                            <input type="text" name="kategori" id="kategori" placeholder="Kategori" required>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered my-3">
            <thead>
                <tr>
                    <th scope="col">Target</th>
                    <th scope="col">Tgl Harapan Tercapai</th>
                    <th scope="col">Kategori Target</th>
                    <th scope="col">Aksi</th>
                </tr>
            <tbody>
                @foreach ($target as $t)
                    <tr>
                        @if (!($t->user_id===Auth::user()->id))
                            @continue;
                        @endif
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->tanggal }}</td>
                        <td>{{ $t->kategori }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalInput{{ $t->id }}">
                                Edit
                            </button>
                            <div class="modal fade" id="modalInput{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="updatetarget" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value={{ $t->id }}>
                                                <input type="text" name="nama" id="nama" value="{{ $t->nama }}" required>
                                                <input type="date" name="tanggal" id="tanggal" value="{{ $t->tanggal }}" required>
                                                <input type="text" name="kategori" id="kategori"
                                                    value="{{ $t->kategori }}" required>
                                                <input type="submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/hapustarget/{{ $t->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>

@endsection
