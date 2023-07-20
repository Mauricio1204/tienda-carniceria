
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    >
    <link rel="stylesheet" href="validar.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        body {
            background: url('img/fondo.jpg');
            background-size: cover;
            -webkit-background-size: cover;
            -o-background-size: cover;
        }
        .card {
            background-color: rgb(255, 255, 255, 0.5) !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto" style="margin-top: 175px;">
                <div class="card shadow" style="width: 500px; height: 400px;">
                    <div class="card-body text-center" >
                        <div class="mx-auto p-3 shadow"
                            style="background-color:  rgb(255, 255, 255, 0.5); border: solid 1px #c0c0c0; width: 260px; height: 260px; border-radius:50%; margin-top: -150px;">
                            <img src="IMG/3.png" style="width: 100%; border-radius: 5%;margin-top: 20px;  ">
                        </div>
                        <form action="validar.php" class="my-3" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="correo..." required
                                    name="txtCorreo">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="password...." required
                                    name="txtPws">
                            </div>
                            <div class="from-group mb-3">
                                <!-- <button class="btn btn-success form-control" >Inica</button> -->
                                <button> inic de secion</button>
                                <br>
                                <br>
                                 <a class="btn btn-primary" href="registro.html" > Registro</a>
                            </div>
                        </form>
                        <a href="pagiona_prinsipal.html"> olvidaste tu contraseña</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- elementos de java scrip para los diseños -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
  crossorigin="anonymous"></script>
<!-- temino de elementos para js -->
<!--  -->
</body>
</html>