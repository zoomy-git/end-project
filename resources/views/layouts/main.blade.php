<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.import')
        <title>End Project | {{ $judul }}</title>
        
    </head>
<body>
    <div class="card container w-75 p-0 my-5" 
    {{-- style="margin-top:10vh;" --}}
    >
        @yield('header')
        
        <div class="card-body light d-flex min-vh-20" 
        >
            @yield('content')
        </div>

        <div class="card-body light d-flex justify-content-center align-items-center min-vh-50" style=" font-weight:bold;"> 
            @yield('footer')
        </div>
    </div>
</body>

</html>
