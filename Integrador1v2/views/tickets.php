<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <?php
    include('../layouts/header.php');
    ?>
    <main>
        <section class="container ">
            <div class="row container-cards-tickets">
                <div class="col-md card-container card-extended" >
                    <div class="card border border-info front shadow">
                        <div class="card-body m">
                            <h5 class="text-center title-offer-tickets lh-lrg">Estudiantes</h1>

                            <!-- <p class="text-center lh-lrg">Tienen un descuento <br> 
                                <strong>80%</strong> <br> 
                                *presentar documentación
                            </p> -->
                            
                        </div>

                    </div>

                    <div class="card border border-info back bg-info shadow">
                        <div class="card-body">
                            <p class="text-center lh-lrg">Tienen un descuento <br> 
                                <strong>80%</strong> <br> 
                                *presentar documentación
                            </p>
                            
                        </div>

                    </div>

                </div>

                <div class="col-md card-container card-extended">
                    <div class="card border border-secondary front shadow">
                        <div class="card-body">
                            <h5 class="text-center title-offer-tickets lh-lrg">Trainee</h1>
                        </div>
                    </div>

                    <div class="card border border-secondary back bg-secondary shadow">
                        <div class="card-body"> 
                            <p class="text-center lh-lrg">
                                Tienen un descuento <br> 
                                <strong>50%</strong> <br> 
                                *presentar documentación
                            </p>

                            
                        </div>

                    </div>

                </div>

                <div class="col-md card-container card-extended">
                    <div class="card border border-warning front shadow">
                        <div class="card-body">
                            <h5 class="text-center title-offer-tickets lh-lrg">Junior</h1>                            
                        </div>

                    </div>

                    <div class="card border border-warning back bg-warning shadow">
                        <div class="card-body">
                            <p class="text-center lh-lrg">Tienen un descuento <br> 
                            <strong>15%</strong> <br> 
                            *presentar documentación
                        </p>
                            
                        </div>

                    </div>

                </div>
            </div>

        </section>

        <section class="w-50 mx-auto mt-5">
            <p class="text-center">VENTA</p>
            <h1 class="text-center">VALOR DE TICKET $<strong class="cost">200</strong></h1>
            <form class="form-row mt-5" action="post" id="tickets-form">
                <div class="form-group col-lg-6">
                    <input type="text" required placeholder="Nombre" id="inName" class="form-control shadow">
                </div>

                <div class="form-group col-lg-6">
                    <input type="text" required placeholder="Apellido" id="inLastnm" class="form-control shadow">
                </div>

                <div class="form-group col-lg-12" ">
                    <input type="email" required placeholder="Correo" id="inMail" class="form-control shadow">
                </div>

                <div class="form-group col-lg-6">
                    Cantidad
                    <input type="number" min="1" max="10" required placeholder="Cantidad" class="form-control shadow" id="input-quantity">
                </div>

                <div class="form-group col-lg-6">
                    Categoría
                    <select name="catego" id="catego" class="form-control shadow">
                        <option value="80">Estudiante</option>
                        <option value="50">Trainee</option>
                        <option value="15">Junior</option>
                        
                    </select>
                </div>
                <div class="form-group col-lg-12">
                    <input type="text" required disabled placeholder="Cantidad" class="form-control shadow" id="input-resumen" value="Total a pagar: $">
                </div>
                <!-- <div class="form-group row"> -->
                    <div class="form-group col-lg-6">
                        <input type="reset" value="Borrar" class="form-control shadow btn-warning border-1 rounded text-white btns" style="font-size: 20px;">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="button" value="Resumen" id="btnTotal" class="form-control shadow btn-warning border-1 rounded text-white btns" style="font-size: 20px;">
                    </div>
                <!-- </div> -->
            </form>
        </section>
    </main>

    <?php
        include('../layouts/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../javascript/script.js"></script>
</body>
</html>