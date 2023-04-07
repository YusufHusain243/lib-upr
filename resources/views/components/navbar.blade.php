<nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('assets/img/Perpustakaan (2).png') }}" style="width: 200px; object-fit: contain;">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('profil') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/sejarah">{{ __('sejarah') }}</a>
                        <a class="dropdown-item" href="/tim-manajemen">{{ __('tim') }}</a>
                        <a class="dropdown-item" href="/staf-perpustakaan">{{ __('staf') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('sumber') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">SLIMS</a>
                        <a class="dropdown-item" href="http://repository.upr.ac.id/" target="_blank">E-Repository</a>
                        <a class="dropdown-item" href="https://e-journal.upr.ac.id/" target="_blank">E-Journal</a>
                        <a class="dropdown-item" href="#">{{ __('unggah') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('jejaring') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/jejaring">{{ __('jaringan') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('bantuan') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/faq">FAQ</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('bahasa') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/switch/id">Indonesia <img
                                src="https://cdn.pixabay.com/photo/2012/04/10/23/01/indonesia-26817__480.png"
                                class="img-fluid" style="width: 20px" alt="" srcset=""></a>
                        <a class="dropdown-item" href="/switch/en">English <img
                                src="https://cdn.pixabay.com/photo/2013/07/13/12/51/flag-160483__340.png"
                                class="img-fluid" style="width: 20px" alt="" srcset=""></a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</nav>
