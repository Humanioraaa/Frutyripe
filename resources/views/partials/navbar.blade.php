<nav>
    <div class="logo">
        <img src="{{ asset('images/fruityripe-logo.png') }}" alt="">
    </div>
    <label class="logo-title">FruityRipe</label>
    <ul>
        <li><a href="#">About</a></li>
        <li><a href="{{ route('history') }}">History</a></li>
        @if(session('username'))
            <li><a href="{{ route('logout') }}">Logout</a></li>
            <li><a href="{{ route('profile') }}" class="fa-solid fa-user-check"></a></li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('login') }}" class="fas fa-user"></a></li>
        @endif
    </ul>
    <label class="icon-menu" id="icon-menu">
        <i class="fas fa-bars"></i>
        <a href="{{ route('profile') }}"></a>
    </label>
</nav>