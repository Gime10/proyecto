<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>mi pagina Web</title>
</head>
    <body>
        <div class="container"> 
            <br>
            <div class="row">
                <div class="col-md-5">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $this->isViewActive("Home");?>" aria-current="page" href="/home">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $this->isViewActive("ListarProducto");?>" href="/producto">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $this->isViewActive("ListarCliente");?>" href="#">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $this->isViewActive("ListarVenta");?>" href="#">Ventas</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php echo $content; ?>

            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <span class="text-muted">© 2022 Proyecto-X, Inc</span>
             </div>

            </footer>
            
        </div>


</body>
</html>