<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid ven">
        <div class="row mt-3">
            <div class="col-8">
                <div class="input-group mb-3">
                    <input type="text" id="txtbus" onkeyup="busqueda()" class="form-control text-center campo" placeholder="Buscar Productos" aria-label="Buscador" aria-describedby="basic-addon1" name="buscador">
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end ">
                <p >Bienvenido <?php echo $user->getNombre();?></p>  
                <a href="includes/logaut.php"><img src="img/login.png" alt=""></a>   
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="container-fluid" style="overflow-y:scroll;position:relative;width:100%;height:540px;">
                    <div class="row" id="resultados">
                        
                    </div>
                </div>
            </div>
            <div class="col-4">
                
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/bos.js"></script>
    <script src="js/lib.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
</body>
</html>