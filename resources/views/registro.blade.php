<!DOCTYPE html>
<html lang="en" style="height: 100vh;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlaneEn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>

    </header>
    <style>
        body {
            height: 100%;
        }

        .mr {
            height: 100%;
        }
    </style>
    <!-- <div class="mx-auto bg-info" style="width: 30%;">
        <form class="was-validation bg-danger center" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Usuario</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Usuario" aria-describedby="validationTooltipUsernamePrepend" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip03">contraseña</label>
                    <input type="password" class="form-control" id="validationTooltip03" placeholder="contraseña" required>
                    <div class="invalid-tooltip">
                        Ingresa una contraseña valida.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div> -->
    <div class="container-fluid h-100 bg-dark text-dark mr inicia" id="inicia">

        <div class="row justify-content-center align-items-center h-100">

            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <nav class="navbar navbar-toggleable-md navbar-dark fixed-top bg-dark">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="">PlaneEn</a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <ul class="navbar-nav flex-row w-100">
                            <div class="mr-auto"></div>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="index">Inicio</a>
                            </li>
                            <li class="nav-item px-2 active">
                                <a class="nav-link" href="registro">Registro</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row justify-content-center align-items-center">
                    <h1 class="text-info">Registrate</h1>
                </div>
                <hr />
                <form class="was-validation" validate>

                    <div class="form-group">
                        <label for="validationTooltipUsername">Usuario</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Usuario" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationTooltip03">contraseña</label>
                        <input type="password" class="form-control" id="validationTooltip03" placeholder="contraseña" required>
                        <div class="invalid-tooltip">
                            Ingresa una contraseña valida.
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="col"><button class="col-6 btn btn-secondary btn-sm float-left">Reset</button></div>
                                <div class="col"><button class="col-6 btn btn-primary btn-sm float-right">Submit</button></div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="registro" id="registro"></div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://localhost/planeen/resources/views/main.js"></script>
</body>

</html>