<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mascotas</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #c990f5">
<div style="text-align:right">
    <h1><p class="fst-italic"><b>Tienda de Mascotas</p></h1>

</div>
    <div class="container-fluid">
        <img src=https://image.flaticon.com/icons/png/128/3720/3720922.png ></b>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio"> <b> INICIO </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos"><b> QUIENES SOMOS</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de"><b> ADOPTAME</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto"><b> CONTACTO</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar-->

<div class="container">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3" style="background-color: #9079a3">
            <br><br>
            <ul class="list-group">
                <li class="list-group-item  list-group-item-primary" aria-current="true"><b>Perros</b> <img src="https://image.flaticon.com/icons/png/128/616/616408.png" width="20"></a></li>
                <li class="list-group-item list-group-item-danger"><b>Gatos</b> <img src="https://image.flaticon.com/icons/png/128/1818/1818405.png" width="20"></li>
                <li class="list-group-item list-group-item-primary"><b>Accesorios</b> <img src="https://image.flaticon.com/icons/png/128/1614/1614326.png" width="20"></li>
                <li class="list-group-item list-group-item-danger"><b>Comida</b> <img src="https://image.flaticon.com/icons/png/128/3061/3061369.png" width="20"></li>
                <li class="list-group-item list-group-item-primary"><b>Otros</b> <img src="https://image.flaticon.com/icons/png/128/1476/1476343.png" width="20"></li>
                
            </ul>
            <br><br>
        </div>
        <!--End Sidebar -->
        <!-- Content--->
        <div class="col-md-9" style="">
             @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<footer style="background-color: #c48ed1">
<center><img src="https://image.flaticon.com/icons/png/128/3076/3076656.png" width="50"><b>Proteccion Segura 24/7</center>
</footer>


</body>
</html>
