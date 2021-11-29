<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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
