<header>
    <div class="jumbotron text-center">
        <div class="page-header">
            <h1>Header</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus consequuntur iusto impedit saepe cum, neque provident debitis, dicta reiciendis dolore laboriosam maiores, maxime quod aut quo? Cum laudantium minus quod.</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Inicio</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('institutos.index')}}">Institutos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Professores</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Alumnos</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
</header>