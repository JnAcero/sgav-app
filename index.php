<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap/bootstrap.min.js" defer> </script>
    <script src="controllers/personacontroller.js" defer></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="back-nav">
        <ul>
           <li><a href="">Persona</a></li>
           <li><a href="">Paises</a></li>
           <li><a href="">Regiones</a></li>
           <li><a href="">Ciudades</a></li>
           <li><a href="">Tipo de casa</a></li>
           <li><a href="">Tipo de vivienda</a></li>
        </ul>
        </div>
    </nav>
    <form class="mt-5 form" id="form-persona">
        <h1>Formulario de Persona</h1>
        <input type="text" placeholder="Numero de Cedula" name="id_person"><br>
        <input type="text" placeholder="Nombre de pesona" name="firstname_person"><br>
        <input type="submit" value="Guardar" class="btn btn-success">
    </form>
    <form class="mt-5 form" >
        <h1>Ingrese un Pais </h1>
        <input type="text" placeholder="Nombre de pesona"></input>
        <input type="submit" value="Guardar" class="btn btn-success">
    </form>

    
</body>
</html>