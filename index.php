<?php
    
    session_start();
    if(isset($_POST['agg'])){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $edad=$_POST['edad'];
        $email=$_POST['email'];
        $horario=$_POST['horario'];
        $team=$_POST['team'];
        $trainer=$_POST['trainer'];
        $cedula=$_POST['cedula'];
        
        $data = [
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Direccion" => $direccion,
            "Edad" => $edad,
            "Email" => $email,
            "Horario" => $horario,
            "Team" => $team,
            "Trainer" => $trainer,
            "Cedula" => $cedula,
        ];
        $credenciales["http"]["method"]="POST";
        $credenciales["http"]["header"] = "Content-type: application/json"; 
        $data = json_encode($data);
        $credenciales["http"]["content"] = $data;
        $config = stream_context_create($credenciales);
        $_DATA = file_get_contents("https://64822ec329fa1c5c5032b0a9.mockapi.io/usuario", false, $config);
        print_r($_DATA);
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMPUSLANDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
        <form method="POST">
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
                    <input type="time" name="horario">
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
        </form>
    </div>
    <div id="div4" class="conta">
        <table class="table">
            <tr> 
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Horaio</th>
                <th>Team</th>
                <th>Trainer</th>
            </tr>
        <tbody class="table2-group-divider lista">
        <?php
        $url="https://64822ec329fa1c5c5032b0a9.mockapi.io/usuario";
        $si=file_get_contents($url);
        $array = json_decode($si, true);
        foreach($array as $content){
            echo '<tr>
            <td>'.$content['Nombre'].'</td>
            <td>'.$content['Apellido'].'</td>
            <td>'.$content['Direccion'].'</td>
            <td>'.$content['Edad'].'</td>
            <td>'.$content['Email'].'</td>
            <td>'.$content['Horario'].'</td>
            <td>'.$content['Team'].'</td>
            <td>'.$content['Trainer']. '<input type="button" value="↑" name="flecha" style="margin-left:50px"></td>
        </tr>';
        }
        ?>
        </tbody>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>