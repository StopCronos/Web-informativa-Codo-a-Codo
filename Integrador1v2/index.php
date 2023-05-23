<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrado 1v2</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
  <?php
  include('layouts/header.php');
  ?>

    <main>

        <container class="container-fluid ">

          <div id="carousel1" class="carousel slide" data-ride="carousel">
              
            <ol class="carousel-indicators">
              <li data-target="#carousel1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel1" data-slide-to="1"></li>
              <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>

            <!-- diapositivas -->
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" style="filter: brightness(0.5);" src="img/ba1-min.jpg" alt="">
                  <div class="carousel-caption align-items-end justify-content-end h-50 text-right container mr-0" >
                    <h3>Conf Bs As</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate iste, voluptatem mollitia repellat consequuntur suscipit natus ipsum perferendis! Temporibus eaque minus officiis quas repudiandae harum quod magni nulla repellendus fuga delectus, repellat modi, nihil esse labore? Reiciendis fuga labore perspiciatis. Eos nostrum pariatur officiis ipsa a quod quae dolore maiores similique voluptates amet natus obcaecati.</p>
                    <div class="d-flex justify-content-end">
                      <!-- <button type="button" href="#" class="mr-3 btn btn-white border border-white text-white ">Quiero ser orador</button>
                      <button type="button" href="#" class="mr-3 btn btn-success border border-white text-white ">Comprar tickets</button> -->
                    </div>
                  </div>
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="img/ba2-min.jpg" alt="">
                  <!-- <div class="carousel-caption">
                    <h3>título 2</h3>
                    <p>Descripción de la imagen.</p>
                  </div> -->
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="img/ba3-min.jpg" alt="">
                  <!-- <div class="carousel-caption">
                    <h3>título 3</h3>
                    <p>Descripción de la imagen.</p>
                  </div> -->
              </div>

            </div>

              <!-- botones de desplazamiento a izquierda y derecha -->      
              <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel1" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>

        </container>

        <container class="container">
            <div class="text-center text-uppercase">
                <p class="font-weight-light">Conoce a los</p>
                <p class="font-weight-bold h2">Oradores</p>
            </div>

            <div class="d-md-flex container justify-content-center">
              <div class="card mx-4 shadow">
                <img src="img/steve-min.jpg" class="card-img-top h-100" alt="steve">
                <div class="card-body ">
                  <div class="d-lg-flex">
                    <a href="#" class="btn btn-warning px-1 py-0 w-md-50 w-xs-100 mr-3">Javascript</a>
                    <a href="#" class="btn btn-info  px-1 py-0 w-md-50 w-xs-100">React</a>
                  </div>
                  <h5 class="card-title">Steve Jobs</h5>
                  
                  <p class="card-text w-100 " style="padding: 0; margin: 0;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, nihil, assumenda eligendi id, exercitationem quam obcaecati dolorum suscipit qui illo laudantium.</p>
                  
                </div>
              </div>
              <div class="card mx-4 shadow">
                <img src="img/bill-min.jpg" class="card-img-top" alt="bill">
                <div class="card-body ">
                  <div class="d-lg-flex">
                    <a href="#" class="btn btn-warning px-1 py-0 w-md-50 w-xs-100 mr-3">Javascript</a>
                    <a href="#" class="btn btn-info  px-1 py-0 w-md-50 w-xs-100">React</a>
                  </div>
                  <h5 class="card-title">Bill Gates</h5>
                  
                  <p class="card-text w-100 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, nihil, assumenda eligendi id, exercitationem quam obcaecati dolorum suscipit qui illo laudantium.</p>
                  
                </div>
              </div>
              <div class="card mx-4 shadow">
                <img src="img/ada-min.jpeg" class="card-img-top" alt="ada">
                <div class="card-body">
                  <div class="d-lg-flex">
                    <a href="#" class="btn btn-warning px-1 py-0 w-md-50 w-xs-100 mr-3">Javascript</a>
                    <a href="#" class="btn btn-danger  px-1 py-0 w-md-50 w-xs-100">Startups</a>
                  </div>
                  <h5 class="card-title">Ada Lovelace</h5>
                  
                  <p class="card-text w-100 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, nihil, assumenda eligendi id, exercitationem quam obcaecati dolorum suscipit qui illo laudantium.</p>
                  
                </div>
              </div>
            </div>
        </container>
        
        
        <container class="d-lg-flex w-100 ml-md-0" style="width: 100%;">
            <aside class="w-lg-50 w-md-100" style="width: 100%;">
              <img src="img/honolulu-min.jpg" class="img-fluid ">
            </aside>

            <aside class="w-lg-50 w-md-100 bg-dark p-4" style="width: 100% !important;">
              <h4 class="text-white">Bs As - Octubre</h4>
              <p class="text-white">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quibusdam odit repellendus aperiam ab vitae in odio quas, mollitia nisi, accusantium consequuntur earum ex ut aspernatur, accusamus explicabo. Quis laboriosam fuga in, eum dolorum saepe iure fugit veniam! Tempore non consequatur similique molestias ea aliquam cupiditate ducimus omnis nihil iure?
              </p>
              <button type="button" class="text-white bg-transparent border border-1 rounded">Conocé más</button>
            </aside>
        </container>

        <container class="container ">
          <div class="text-center text-uppercase">
            <p class="font-weight-light">Convierteté en un</p>
            <p class="font-weight-bold h2">Orador</p>
          </div>

          <div class="container text-center ">
            <h6 class="fs-3">Anótate como orador para dar una <u>charla ignite</u>. Cuéntanos de que quieres hablar!</h6>
          </div>

          <div class="container w-50">
            <form class="form-row" action="post">
              <div class="form-group col-lg-6">
                <input type="text" required placeholder="Nombre" class="form-control shadow">
              </div>

              <div class="form-group col-lg-6">
                <input type="text" required placeholder="Apellido" class="form-control shadow">
              </div>

              <div class="form-group col-lg-12" style="height: 6em; ">
                <textarea class="form-control shadow h-100" required placeholder="Sobre qué quieres hablar?"></textarea>
              </div>

              <div class="form-group col-lg-12">
                <input type="submit"  class="form-control shadow btn-warning border-1 rounded text-white container btns" style="font-size: 20px;">
              </div>
            </form>
          </div>
        </container>
        
        <?php
        include('layouts/footer.php');
        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/script.js"></script>
</body>
</html>