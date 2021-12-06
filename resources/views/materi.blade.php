@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    <div class="container w-75 mt-4">
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end">
        <button type="button" class="btn dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Materi
        </button>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header dark">
                        <h5 class="modal-title fw-bold" id="exampleModalLabel">Tambah Materi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('tambahmateri') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id" value={{ Auth::user()->id }}>

                            <div class="row mb-3">
                                <x-jet-label for="link" value="{{ __('Link') }}" />
                                <div class="col-sm-8">

                                <x-jet-input id="link" class="block mt-1 w-full form-control form-control-sm" type="text" name="link"
                                        placeholder="Link Materi" required autofocus />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <x-jet-label for="kategori" value="{{ __('Judul') }}" />
                                <div class="col-sm-8">

                                <x-jet-input id="kategori" class="block mt-1 w-full form-control form-control-sm" type="text" name="kategori"
                                        placeholder="Judul" required autofocus />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <x-jet-label for="deskripsi" value="{{ __('Deskripsi') }}" />
                                
                                <div class="form-floating col-sm-8">
                                    <textarea class="form-control" placeholder="Deskripsi Singkat" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2" placeholder="">deskripsi singkat</label>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label class="col-sm" for="video" value="" >{{ __('Video') }}</label>

                                <div class="col-sm">
                                <input id="video" class="form-check-input" type="radio" name="isVideo"
                                        value="true" required autofocus >
                                </div>

                                <label class="col-sm" for="artikel" value="" >{{ __('Artikel') }}</label>

                                <div class="col-sm">
                                <input id="artikel" class="form-check-input" type="radio" name="isVideo"
                                        value="false" required autofocus >
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <input type="submit" class="dark rounded-3 px-3 py-1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered my-3 shadow">
            <thead>
                <tr>
                    <th scope="col">Materi</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($materi as $m)
                    @if (!($m->user_id === Auth::user()->id))
                        @continue;
                    @endif
                    @if (!$m->isVideo)
                        @continue;
                    @endif
                    <tr>
                        <td>
                            <iframe width="180" height="120" src="{{ $m->link }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </td>
                        <td>{{ $m->deskripsi }}</td>
                        <td>{{ $m->kategori }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalInput{{ $m->id }}">
                                Edit
                            </button>
                            <div class="modal fade" id="modalInput{{ $m->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header dark">
                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit Materi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('updatemateri') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value={{ $m->id }} required>

                                                <div class="row mb-3">
                                                    <x-jet-label for="link" value="{{ __('Link') }}" />
                                                    <div class="col-sm-8">
                    
                                                    <x-jet-input id="link" class="block mt-1 w-full form-control form-control-sm" type="text" name="link"
                                                            placeholder="Link Materi" value="{{ $m->link }}"  required autofocus />
                                                    </div>
                                                </div>
                    
                                                <div class="row mb-3">
                                                    <x-jet-label for="kategori" value="{{ __('Judul') }}" />
                                                    <div class="col-sm-8">
                    
                                                    <x-jet-input id="kategori" class="block mt-1 w-full form-control form-control-sm" type="text" name="kategori"
                                                            placeholder="Judul" value="{{ $m->kategori }}" required autofocus />
                                                    </div>
                                                </div>
                    
                                                <div class="row mb-3">
                                                    <x-jet-label for="deskripsi" value="{{ __('Deskripsi') }}" />
                                                    
                                                    <div class="form-floating col-sm-8">
                                                        <textarea class="form-control" placeholder="Deskripsi Singkat" value="{{ $m->deskripsi }}" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2" placeholder="">deskripsi singkat</label>
                                                    </div>
                    
                                                </div>
                    
                                                <div class="row mb-3">
                                                    <label class="col-sm" for="video" value="" >{{ __('Video') }}</label>
                    
                                                    <div class="col-sm">
                                                    <input id="video" class="form-check-input" type="radio" name="isVideo"
                                                            value="true" required autofocus >
                                                    </div>
                    
                                                    <label class="col-sm" for="artikel" value="" >{{ __('Artikel') }}</label>
                    
                                                    <div class="col-sm">
                                                    <input id="artikel" class="form-check-input" type="radio" name="isVideo"
                                                            value="false" required autofocus >
                                                    </div>
                                                </div>
                    
                                                <div class="d-flex justify-content-end">
                                                    <input type="submit" class="dark rounded-3 px-3 py-1">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/hapusmateri/{{ $m->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table table-striped table-bordered shadow">
            <thead>
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($materi as $m)
                    @if (!($m->user_id === Auth::user()->id))
                        @continue;
                    @endif
                    @if ($m->isVideo)
                        @continue;
                    @endif
                    <tr>
                        <td>
                            <a href="{{ $m->link }}" target="_blank">{{ $m->kategori }}</a>
                        </td>
                        <td>{{ $m->deskripsi }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalInput{{ $m->id }}">
                                Edit
                            </button>
                            <div class="modal fade" id="modalInput{{ $m->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header dark">
                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit Modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('updatemateri') }}" method="POST">
                                                @csrf
                                                
                                                <input type="hidden" name="id" id="id" value={{ $m->id }} required>

                                                <div class="row mb-3">
                                                    <x-jet-label for="link" value="{{ __('Link') }}" />
                                                    <div class="col-sm-8">
                    
                                                    <x-jet-input id="link" class="block mt-1 w-full form-control form-control-sm" type="text" name="link"
                                                            placeholder="Link Materi" value="{{ $m->link }}"  required autofocus />
                                                    </div>
                                                </div>
                    
                                                <div class="row mb-3">
                                                    <x-jet-label for="kategori" value="{{ __('Judul') }}" />
                                                    <div class="col-sm-8">
                    
                                                    <x-jet-input id="kategori" class="block mt-1 w-full form-control form-control-sm" type="text" name="kategori"
                                                            placeholder="Judul" value="{{ $m->kategori }}"  required autofocus />
                                                    </div>
                                                </div>
                    
                                                <div class="row mb-3">
                                                    <x-jet-label for="deskripsi" value="{{ __('Deskripsi') }}" />
                                                    
                                                    <div class="form-floating col-sm-8">
                                                        <textarea class="form-control" value="{{ $m->deskripsi }}" placeholder="Deskripsi Singkat" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2" placeholder="">deskripsi singkat</label>
                                                    </div>
                    
                                                </div>
                    
                                                <div class="row mb-3">
                                                    <label class="col-sm" for="video" value="" >{{ __('Video') }}</label>
                    
                                                    <div class="col-sm">
                                                    <input id="video" class="form-check-input" type="radio" name="isVideo"
                                                            value="true" required autofocus >
                                                    </div>
                    
                                                    <label class="col-sm" for="artikel" value="" >{{ __('Artikel') }}</label>
                    
                                                    <div class="col-sm">
                                                    <input id="artikel" class="form-check-input" type="radio" name="isVideo"
                                                            value="false" required autofocus >
                                                    </div>
                                                </div>
                    
                                                <div class="d-flex justify-content-end">
                                                    <input type="submit" class="dark rounded-3 px-3 py-1">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/hapusmateri/{{ $m->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
