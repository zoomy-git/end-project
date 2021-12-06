<div class="box-profile dark px-4 pt-3 d-flex align-items-center justify-content-end">
    
    <form method="POST" action="{{ route('logout') }}" class="">
        @csrf
        <a class="dark text-decoration-none" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
            <strong>
            {{ __('here to logout') }}
            </strong>
        </a>
        
    </form>
</div>

<ul class="nav nav-tabs dark ps-5 d-flex flex-row" style="font-weight:bold;">
    <li class="nav-item {{ $judul === 'Beranda' ? 'active light' : 'text-black' }}">
        <a class="nav-link text-black p-3" href="/Beranda">Beranda</a>
    </li>
    <li class="nav-item {{ $judul === 'Target' ? 'active light' : 'text-black' }}">
        <a class="nav-link text-black p-3" href="/Target">Target</a>
    </li>
    <li class="nav-item {{ $judul === 'Aktivitas' ? 'active light' : 'text-black' }}">
        <a class="nav-link text-black p-3" href="/Aktivitas">Aktivitas</a>
    </li>
    <li class="nav-item {{ $judul === 'Materi' ? 'active light' : 'text-black' }}">
        <a class="nav-link text-black p-3" href="/Materi">Materi</a>
    </li>

        
</ul>