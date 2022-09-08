<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand " href="#">
            <img class="img-brand" src="https://www.ilsipontino.net/wp-content/uploads/2022/04/Netflix.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ListFilm') }}">List Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Miglior Film</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
