<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.import')
        <title>OneForAll | {{ $judul }}</title>
    </head>
<body>
    <div class="card container mt-5 w-75 p-0">
        <ul class="nav nav-tabs bg-orange pt-3 ps-5">
            <li class="nav-item">
                <a class="nav-link {{ $judul === 'Beranda' ? 'active bg-main' : 'text-black' }}" href="/Beranda">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $judul === 'Target' ? 'active' : 'text-black' }}" href="/Target">Target</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $judul === 'Aktivitas' ? 'active' : 'text-black' }}" href="/Aktivitas">Aktivitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $judul === 'Materi' ? 'active' : 'text-black' }}" href="/Materi">Materi</a>
            </li>
        </ul>
        <div class="card-body bg-main">
            @yield('content')
        </div>
    </div>
</body>

</html>
