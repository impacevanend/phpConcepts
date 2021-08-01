<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuario</title>
    <link rel="stylesheet" type = "text/css" href="librerias/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/login.css">
    <script src="librerias/jquert/jquery-3.2.1.min.js"></script>
</head>
<body class="bg-secondary">

    <section class="Form my-4 mx-5">
        <div class="containee">
            <div class="row g-0 ">
                <div class="col-lg-5">
                    <img src="img/login.jpg" class="img-fluid" alt="modelo-login" srcset="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <img class="img-fluid h-25" src="img/logoAzulCentrado.png" alt="logo Morita Store">
                    <form>
                        <div class="form-row">
                            <div class="col-lg7">
                                <input type="email" placeholder="Ingrese su correo electronico" class="form-control my-3 p-4" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg7">
                                <input type="password" placeholder="Ingrese su contraseña" id="inputPassword5" class="form-control my-3 p-4" aria-describedby="passwordHelpBlock">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg7 d-grid gap-2">
                                <a class="btn1 btn-primary" href="../dashboard.html">Login</a>
                            </div>
                        </div>
                        <a href="#">Olvido su contraseña</a>
                        <p>¿No tiene una cuenta? <a href="#">Registrese aquí</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    
</body>
</html>