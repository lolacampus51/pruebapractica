<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Comunidad</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>
     
     <hr style="height:15px;color: rgb(64, 13, 185); background-color: rgb(64,13,185);">
     <h3 id="cabecera" class="text-center sm-6">BASE DE DATOS DE ADMINISTRADORES DE FINCAS</h3>
 </header>
 <hr style="height:15px;color: rgb(64, 13, 185); background-color: rgb(64,13,185);">
 <section>
     <div class="container">
         
         <div class="row my-5">
             <div class="col-12">
                 <h3 class="text-center my-4">Alta de usuarios</h3>
   
             </div>
             </div>
            <div class="row" style="background-color: rgb(64, 13, 185, 0.3)">
                <div class="col-12 my-3">
                    <form class="row g-3" method="post" action="../controlador/comunidad_controlador.php">
                        <div class="col-sm-6 ">
                            <label for="inputnombre" class="form-label">Nombre de la Comunidad</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                       
                        <div class=" col-sm-6 ">
                            <label for="inputdireccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>

                        <div class="col-sm-6">
                            <label for="inputpoblacion" class="form-label">Población</label>
                            <input type="text" class="form-control" id="poblacion" name="poblacion">
                        </div>
                        
                        
                        <div class="col-sm-4">
                            <label for="inputid_administrador" class="form-label">ID Administrador</label>
                            <input type="number" class="form-control" id="id_administrador" name="id_administrador">
                        </div>
                        
                        
                        <div class="col-12 text-center my-5">
                            <button type="submit" class="btn btn-primary">Iniciar proceso de Alta</button>
                        </div>
                    </form>
                </div>           
            </div>
            <div class="text-center mt-4">
                <a href="../index.php" class="btn btn-info">Volver al menú principal</a>
            </div>
        </div>
    </section>
</body>
</html>
