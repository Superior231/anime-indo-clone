<!-- Nav Bottom -->
<nav class="nav-bottom fixed-bottom">
    <ul>
        <li class="list {{ $active === 'home' ? 'active' : '' }}">
            <a href="{{ route('index') }}" title="Home">
                <span class="icon">
                    <i class='bx bxs-home icon'></i>
                </span>
            </a>
        </li>
        <li class="list {{ $active === 'jadwal-tayang' ? 'active' : '' }}">
            <a href="{{ route('jadwal_tayang') }}" title="Jadwal Tayang">
                <span class="icon">
                    <i class='bx bxs-calendar icon'></i>
                </span>
            </a>
        </li>
        <li class="list {{ $active === 'katalog-anime' ? 'active' : '' }}">
            <a href="{{ route('katalog_anime') }}" title="Katalog Anime">
                <span class="icon">
                    <i class='bx bx-list-ul icon'></i>
                </span>
            </a>
        </li>
        <li class="list {{ $active === 'riwayat-menonton' ? 'active' : '' }}">
            <a href="{{ route('riwayat_menonton') }}" title="Riwayat Menonton">
                <span class="icon">
                    <i class='bx bx-history icon'></i>
                </span>
            </a>
        </li>
        <li class="list {{ $active === 'subscribed-anime' ? 'active' : '' }}">
            <a href="{{ route('subscribed_anime') }}" title="Subscribed Anime">
                <span class="icon">
                    <i class='bx bxs-bell icon'></i>
                </span>
            </a>
        </li>
    </ul>
</nav>
<!-- Nav Bottom End -->