<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('comics.index') }}">comics</a></li>
                        <li><a class="dropdown-item" href="{{ route('comics.create') }}">AGGIUNGI</a></li>
                        
                    </ul>
                </li>
            </ul>
           
        </div>
    </div>
</nav>