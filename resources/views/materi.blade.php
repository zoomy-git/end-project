@extends('layouts/main')

@section('header')
    @include('partials.nav')
@endsection

@section('content')
    <div class="container w-75 mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Materi</th>
                    <th scope="col">Mata Kuliah</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($materi as $m)
                    <tr>
                        <th scope="row">{{ $m->id }}</th>
                        <td>
                            <iframe width="560" height="315" src="{{ $m->link }}"
                            {{--  --}}
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </td>
                        <td>{{ $m->kategori }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
