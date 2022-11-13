<nav class="navbar navbar-expand-lg navbar-dark navbar-light" style="background-color:#484848">
    <div class="container-fluid d-flex justify-content-center">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="?page=start">Biblioteka <i class="bi bi-book"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="?page=books" class="nav-link">Ksiazki</a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=addnewbook" class="nav-link">Dodaj książkę</a>
                    </li>
                </ul>
            </div>
            <form action="" id="form" method="post" class="d-flex">
                <input class="form-control me-2" type="search" name="search" placeholder="Szukaj" aria-label="szukaj">
                <button class="btn btn-outline-light" type="submit" disabled>Szukaj</button>
                <input type="hidden" name="page" value="books">
            </form>

        </div>
    </div>
</nav>