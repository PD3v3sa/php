<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Authentication</div>
                    <form method="post" action="login.php">

                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"  name="username" placeholder="usuario">
                        <label for="floatingInput">Usuario</label>
                    </div>
                    
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                        <!--label for="username">Usuario:</label>
                        <input type="text" id="username" name="username" required>
                        <br>
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required>
                        <br-->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Send
                                </button>
                                <!--input type="submit" value="Iniciar Sesión"-->
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>  
        </div>  
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
