<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.import')
        <title>End Project | {{ $judul }}</title>
    </head>
<body>
    <div class="card container w-75 p-0" style="margin-top:10vh;">
        @yield('header')
        
        <div class="card-body light d-flex" style="height:50vh;">
            @yield('content')
        </div>

        <div class="card-body light d-flex justify-content-center align-items-center" style="height:10vh;"> 
            @yield('footer')
        </div>
    </div>
</body>

</html>
