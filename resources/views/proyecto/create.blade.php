<!doctype html>
<html lang="en">
    <head>
        <title>Create</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        </header>
        <main>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="nav-link active" aria-current="page" href="{{ route('proyecto.index') }}">Index</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">.</a>
                <a class="nav-link" href="#">.</a>
                <a class="nav-link" href="#">.</a>
                <a class="nav-link disabled" aria-disabled="true">.</a>
            </div>
            </div>
        </div>
        </nav>
    </div>
    <div class="col">
      <!--2 of 2-->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Boton</button>
            <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Uno</a></li>
        <li><a class="dropdown-item" href="#">Dos</a></li>
        <li><a class="dropdown-item" href="#">Tres</a></li>
    </ul>
</div>
  </div>
  <div class="row py-2">
          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Miau</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">.</a>
              </li>
            </ul>
          </div>
          <div class="col-5">
            <h3>Llenar Datos</h3>
            <form action="{{route('proyecto.store')}}" method="post">
              @csrf
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                <input type="text" id="nombre" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text">Descripcion</span>
                <textarea class="form-control" aria-label="With textarea" id="descripcion" name="descripcion"></textarea>
              </div>
              <button type="submit" class="btn btn-outline-info">Enviar</button>
            </form>
          </div>
          <div class="col">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email </label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
        </div>
        </div>
        </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>