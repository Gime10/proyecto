<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Listar productos</title>
</head>
<body>
    <div class="container"> 
                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <h2>Crear Nuevo producto</h2>
                        <div class="contactos">
                            <form class="needs-validation" novalidate>
                            <div class="container form"> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="validationCustom01" class="form-label"></label>
                                        <input type="text" class="form-control" placeholder="Nombre producto" aria-label="nombre producto" id="validationCustom01" required>
                                        <div class="invalid-feedback">El campo esta vacio</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label"></label>
                                        <input type="text" class="form-control" placeholder="Empresa origen" aria-label="Empresa origen">
                                    </div>
                                
                                    <div class="col-12">
                                        <label for="inputNumber" class="form-label"></label>
                                        <input type="number" class="form-control" id="inputNumber" placeholder="Precio en Bs">
                                    </div>
                                 
                                    <div class="col-md-6">
                                            <label for="inputState" class="form-label"></label>
                                            <select id="inputState" class="form-select form-control">
                                                <option selected>Categoria</option>
                                                <option>Cosas del Hogar</option>
                                                <option>Fruta</option>
                                                <option>Ropa</option>
                                                <option>Limpieza</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="Textarea" class="form-label"></label>
                                    <textarea class="form-control" id="validationTextarea"
                                    placeholder="Ingrese descripcion del producto....."></textarea>
                                </div>
                                <br>
                                <div class="row">
                                   
                                    <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                                
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <h2>{{title}}</h2>
                        <table class="table table-light">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Empresa</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                               {{tableBody}}
                                
                            </tbody>
                        </table>

                    </div>
                    
                </div>
    </div>
</body>
</html>