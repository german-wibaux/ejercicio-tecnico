<html>

<head>
    <title>Tecnico</title>
    <base href="http://localhost/ejercicio_tecnico/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="d-flex flex-column" >

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
        <section>
            <h1>Ejercicio Tecnico</h1>
            <article>
                <!-- <form >
                    Name: <input type="text" name="name"><br>
                    E-mail: <input type="text" name="email"><br>
                    <input type="submit">
                </form> -->

                <form action="index.php" method="post" >
                    <div class="form-group">
                        <label for="formGroupExampleInput">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="Id">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Edad</label>
                        <input type="text" class="form-control" name="edad" placeholder="Edad">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Lenguaje</label>
                        <input type="text" class="form-control" name="lenguaje" placeholder="Lenguaje">
                    </div>

                    <button type="submit" class="btn btn-primary">Agregar Programador</button>

                </form>

            </article>
            <article>

                <form action="index.php" method="post" onsubmit="return false">
                <div class="form-group">
                        <label for="formGroupExampleInput">Id</label>
                        <input type="text" class="form-control" name="id" placeholder="Id">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Edad</label>
                        <input type="text" class="form-control" name="edad" placeholder="Edad">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tipo</label>
                        <input type="text" class="form-control" name="tipo" placeholder="Tipo">
                    </div>

                    <button type="submit" class="btn btn-primary" id="design" >Agregar Diseñador</button>

                </form>

            </article>

            <article id="empleados" >

            </article>
            
        </section>
        <!-- <aside> contiene información accesoria, que no suele añadir un valor significativo a la temática del sitio. Por ejemplo, es habitual usar para la barra lateral con una serie de banners o widgets sociales.
        </aside> -->
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; Your Website</small>
        </div>
    </footer>


    <?php 

        include('class/empleado.php');
        include('class/programador.php');
        include('class/diseniador.php');
        include('class/empresa.php'); 

        $empresa = new Empresa(1, "Primera");
        // $emp1->setLenguaje('php');
        // $emp2->setTipo('web');

        // $print = $emp2->getNombre();
        // $print2 = $emp2->getEspecializacion();

        if( isset($_POST["tipo"]) )
        {
            $emp = new Diseñador(2, 'gaston', 'gasterii', 23);
            $empresa->agregarEmpleado($emp);
            $emp = $empresa.getEmpleados();
            $empleados;
            for($i = 0; $i < $emp.sizeof(); $i++) {
                $empAux = $emp.get($i).getEmpleado();
                $empleados = $empleados + $empAux.getId();
            }

            echo "<script type='text/javascript'>addEmp('$empleados');</script>";
        }

        if( isset($_POST["lenguaje"]) )
        {
            $emp = new Programador(1, 'german', 'wibaux', 31);
            $empresa->agregarEmpleado($emp);
        }


    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>

