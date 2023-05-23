<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <header class="navbar navbar-expand-sm navbar-light bg-light fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#opciones">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- logo -->
        <a class="navbar-brand d-md-flex align-items-center" href="#">
        <img src= "../img/codoacodo-min.png" class="h-50 w-50 img-fluid" alt="">
        <h2 class="text-white"><span>Conf Bs As</span></h1>
        </a>
        
        <!-- enlaces -->
        <nav class="collapse navbar-collapse justify-content-end" id="opciones">   
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active text-light" href="/index.php">La conferencia</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-secondary" href="#">Los operadores</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-secondary" href="#">El lugar y la fecha</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-secondary" href="#">Conviértete en orador</a>
            </li>            
            <li class="nav-item">
            <a class="nav-link text-warning" href="../views/tickets.php">Comprar tickets</a>
            </li>            
        </ul>
        </nav>
    </header>
</body>
</html>