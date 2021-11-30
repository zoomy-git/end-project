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
                    <th scope="col">Pukul</th>
                    <th scope="col">Aktivitas</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            <tbody>
                @foreach ($aktivitas as $a)
                    <tr>
                        <th scope="row">{{ $a->id }}</th>
                        <td>{{ $a->pukul }}</td>
                        <td>{{ $a->nama }}</td>
                        <td>{{ $a->kategori }}</td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>




@endsection
