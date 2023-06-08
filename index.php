<?php
    /**$credenciales["http"]["method"] = "POST";
    $credenciales["http"]["header"] = "Content-type: application/json";
    $data = [
        "cc"=>"123",
        "nombre"=> "Miguel",
        "apelldio"=> "Castro",
        "edad"=> 23
    ];
    $data = json_encode($data);
    $credenciales["http"]["content"] = $data;
    $config = stream_context_create($credenciales);

    $_DATA = file_get_contents("https://6480e3fef061e6ec4d4a0194.mockapi.io/informacion", false, $config);
    print_r($_DATA); */
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMPUSLANDS</title>
    <style>
        .container1{
            margin-left: 700px;
        }
        input{
            margin-top: 10px;
            text-align: center;
            width:200px;
        }
        .container3{

        }
        .container5{
            margin-top:50px;
        }
        .container7{
            margin-left:30px;
            margin-top:10px;
        }
        button{
            width:70px;
        }
    </style>
</head>
<body>
    <div class="container1">
        <div class="container2" style="display:flex;">
            <div class="container3">
                <input type="text" placeholder="Nombre" style="margin-top: 20px" name="nombre">
                <br>
                <input type="text" placeholder="Apellido" style="margin-top: 20px" name="apellido">
                <br>
                <input type="text" placeholder="Direccion" style="margin-top: 20px" name="direccion">
            </div>
            <div class="container4" style="margin-left:30px">
                <h4>CAMPUSLANDS</h4>
                <input type="number" placeholder="Edad" name="edad">
                <br>
                <input type="text" placeholder="Email" name="email">
            </div>
        </div>
        <div class="container5" style="display:flex;">
            <div class="cotainer6">
                <input type="time">
                <br>
                <input type="text" placeholder="Team" name="team">
                <br>
                <input type="text" placeholder="Trainer" name="trainer">
                </div>
            <div class="container7">
                <div class="container8" style="margin-left:30px">
                    <button name="agg">✔</button>
                    <button name="borrar">X</button>
                </div>
                <div class="container9" style="margin-top:10px; margin-left:30px">
                    <button name="editar">✎</button>
                    <button name="buscar">Buscar</button>
                </div>
                <input type="text" placeholder="Cédula" name="cedula">
            </div>
        </div>
    </div>
    <div id="div4" class="conta">
        <table class="table">
            <tr> 
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Direccion</th>
              <th>Edad</th>
              <th>Email</th>
              <th>Team</th>
              <th>Trainer</th>
            </tr>
        <tbody class="table2-group-divider lista">
  
  
  
  
        </tbody>
    </div>









</body>
</html>