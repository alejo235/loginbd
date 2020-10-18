<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Styles/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <section class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-md-4">
                <form action="validar.php" method="POST">
                    <div class="row aling-items-center justify-content-around">
                        <img src="imagenes/name.jpg" class="img-fluid" alt="desing">
                    
                    </div>
                    <div class="row align-center mt-2">
                        <i class="fa fa-user fa-2x col-md-1 mr-1 ml-2"></i>
                        <input type="text" class="form-control col-md-10" name="usuario" placeholder="Digita tu usuario">
                    </div>
                    <div class="row align-center mt-2">
                        <i class="fa fa-lock fa-2x col-md-1 mr-1 ml-2"></i>
                        <input type="password" class="form-control col-md-10" name="clave" placeholder="Digita tu clave">

                    </div>
                    <button type="submit" class="btn btn-dark btn-block mt-2"><ifa class="fa fa-sign-in"></i> Ingresar</button>
                    <div class="form-group form-check">
                    <input type="checkbox" id="recordar" class="form-check-input">
                    <label for="recordar" class="form-check-label">Recordar Contraseña </label>
                    </div>
                </form>
            
            </div>
        </div>
    
    </section>
</body>
</html>