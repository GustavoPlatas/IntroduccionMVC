<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción a MVC</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <header class="text-center">
            <h1>Introducción al patrón MVC desde php</h1>
            <hr>
        </header>
        <div class="col-md-12 text-center" >
            <hr>
            <h3>Listado de personas</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido paterno</th>
                        <th class="text-center">Apellido materno</th>
                        <th class="text-center">Genero</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center" colspan=2>Acciones</th>    
                    </tr>
                </thead>
                <tbody>
                
                    <?php
                    foreach ($datos_personas as $row){
                        $nombre = $row["nombre"];
                        $ap_paterno = $row["ap_paterno"];
                        $ap_materno = $row["ap_materno"];
                        $genero = $row["genero"];
                        $activo = $row["activo"];
                        ?>
                        <tr>
                        <td class="text-center"><?php echo $nombre;?></td>
                        <td class="text-center"><?php echo $ap_paterno;?></td>
                        <td class="text-center"><?php echo $ap_materno;?></td>
                        <td class="text-center"><?php echo $genero;?></td>
                        <?php
                            if($activo == 1){?>
                                <td class="text-center"><a class="btn btn-success">Activo</a></td>
                        <?php    }else{?>
                            <td class="text-center"><a class="btn btn-danger">Desactivado</a></td>
                        <?php    }
                        if($activo == 1){
                        
                        ?>
                        <td class="text-center">
                        <a class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                        <?php
                         }else{?>
                        <td class="text-center">
                        <a style="background-color:#474747;" class="btn" disabled="true"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a style="background-color:#474747;" class="btn" disabled="true"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                        <?php
                         }
                        ?>
                        
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </div>    
</body>
</html>