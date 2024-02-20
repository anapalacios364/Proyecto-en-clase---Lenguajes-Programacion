<html>
<head>
    <title>Tabla de Pruebas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Welcome</h1>
    <div class="mb-3">
        <a href="{{ route('proyecto.create') }}" class="btn btn-success">Crear</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyecto as $proyecto)
            <tr>
                <th scope="row">{{$proyecto->id}}</th>
                <td>{{$proyecto->nombre}}</td>
                <td>{{$proyecto->descripcion}}</td>
                <td>
                    <a href="{{route('proyecto.edit',['proyecto' => $proyecto->id])}}">Editar</a>
                </td>
                <td>
                    <form action="{{route('proyecto.destroy',['proyecto' => $proyecto->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>