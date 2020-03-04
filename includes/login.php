<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PLASITA</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col" style="padding: 0px;">
                <img class="img-fluid grande" src="img/Grupo 33.png" alt="">
            </div>
            <div class="col login d-flex align-items-center">
                <div class="container d-flex justify-content-center">
                    <div class="caja">
                        <p class="text-center ini">INICIAR </BR> SESION</p>
                        <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control text-center campo" aria-label="Text input with segmented dropdown button" placeholder="D N I" name="dni">
                            <div class="input-group-prepend">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split sel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">VENDEDOR</a>
                                <a class="dropdown-item" href="#">ADMINISTRADOR</a>
                              </div>
                            </div>
                          </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control text-center campo" placeholder="CONTRASEÑA" aria-label="Username" aria-describedby="basic-addon1" name="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary ingre">ENTRAR</button>
                        </div>
                        <?php if(isset($error)){ ?>
                                <div class="alert alert-danger mt-3 text-center" role="alert">
                                DNI y/o Contraseña incorrecta
                               </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/bos.js"></script>
</body>
</html>