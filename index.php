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
                <input type="text" placeholder="Nombre" style="margin-top: 20px">
                <br>
                <input type="text" placeholder="Apellidos" style="margin-top: 20px">
                <br>
                <input type="text" placeholder="Direccion" style="margin-top: 20px">
            </div>
            <div class="container4" style="margin-left:30px">
                <h4>CAMPUSLANDS</h4>
                <input type="number" placeholder="Edad">
                <br>
                <input type="text" placeholder="Email">
            </div>
        </div>
        <div class="container5" style="display:flex;">
            <div class="cotainer6">
                <input type="time">
                <br>
                <input type="text" placeholder="Team">
                <br>
                <input type="text" placeholder="Trainer">
                </div>
            <div class="container7">
                <div class="container8" style="margin-left:30px">
                    <button>✔</button>
                    <button>X</button>
                </div>
                <div class="container9" style="margin-top:10px; margin-left:30px">
                    <button>✎</button>
                    <button>Buscar</button>
                </div>
                <input type="text" placeholder="Cédula">
            </div>
        </div>
    </div>
</body>
</html>