<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

    <body class="body1">
      <nav>
      <form action="..Controller/agregarDescargo.php" method="POST" class="form-box" >
    <h2 class="text-center">Positivo</h2>
    <br>
    <div class="text-center">
    <br>
        <div class="text-center" >
        <label for="tipoProceso" class="form-label">Tipo de Proceso</label>
        <br>
            <select name="tipoProceso" id="tipoProceso" >
            <option value="Seleccione">Seleccione</option>
                <option value="Negativa">Negativa</option>
                <option value="Positiva">Positiva</option>    
                <option value="Radicacion">Radicacion</option>
            </select>
        </div>  
        <br>
        <div class="text-center" >
        <label for="categoria" class="form-label">Categoria</label>
        <br>
            <select name="categoria" id="categoria" >
            <option value="Seleccione">Seleccione</option>
                <option value="Leve">Leve</option>
                <option value="Moderada">Moderada</option>    
                <option value="Grave">Grave</option>
            </select>
        </div>  
        <br>
        <div class="text-center">
          <label for="" class="form-label">Fecha Hechos</label>
         <input type="date" class="form-control" name="fechaHechos" placeholder="fechaHechos">
        </div>
        <div class="text-center">
          <label for="" class="form-label">Evidencia</label>
         <input type="file" class="form-control-file" name="evidencia" placeholder="evidencia">
        </div>
        <div class="text-center">
         <label for="" class="form-label">Observacion</label>
         <TExtarea type="text" class="form-control" name="observacionP" placeholder="observacionP"></TExtarea>
         
        </div>
    </div>
    <br>
                <div class="text-center">
                <button type="submit" value="RegistrarProceso">Registrar </button> 
                </div>
    </form>
      </nav>
            
    </body>
    <br>
      

</html>