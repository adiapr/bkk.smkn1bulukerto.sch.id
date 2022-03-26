<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand"><img src="https://smkn1bulukerto.sch.id/wp-content/uploads/2019/11/cropped-BLO-1.png" alt=""></span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">Lowongan</a>
                <a href="feature.html" class="nav-item nav-link">Tentang</a>
                {{-- <a href="team.html" class="nav-item nav-link">Chef</a>
                <a href="menu.html" class="nav-item nav-link">Menu</a> --}}
                {{-- <a href="booking.html" class="nav-item nav-link">Booking</a> --}}
                @guest
                    @if (Route::has('login'))
                        <a href="/admin" class="nav-item nav-link"><button class="btn btn-warning btn-sm">Masuk</button></a>
                    @endif

                @else
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></a>
                        <div class="dropdown-menu">
                            <a href="/admin" class="dropdown-item">Dashboard</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                class="dropdown-item">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest

                {{-- <a href="/admin" class="nav-item nav-link"> --}}


            </div>
        </div>
    </div>
</div>
