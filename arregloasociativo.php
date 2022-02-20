<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos asociativos</title>
</head>
<body>
    <p> Ingresa los datos de los trabajadores <br></p>


    <form id="formulario" name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <h4>Primer trabajador</h4>

        <p>Ingresar Nombre: <input type="text" id="WorkN1" name="WorkN1"></p>
        <p>Ingresar Apellido: <input type="text" id="WorkA1" name="WorkA1"></p>
        <p>Ingresar Cedula: <input type="text" id="WorkC1" name="WorkC1"></p>
        <p>Ingresar Sueldo: <input type="text" id="WorkS1" name="WorkS1"></p>
        <p>Ingresar Departamento: <input type="text" id="WorkD1" name="WorkD1"></p>
        <p>Ingresar Lugar: <input type="text" id="WorkL1" name="WorkL1"></p>

        <h4>Segundo trabajador</h4>

        <p>Ingresar Nombre: <input type="text" id="WorkN2" name="WorkN2"></p>
        <p>Ingresar Apellido: <input type="text" id="WorkA2" name="WorkA2"></p>
        <p>Ingresar Cedula: <input type="text" id="WorkC2" name="WorkC2"></p>
        <p>Ingresar Sueldo: <input type="text" id="WorkS2" name="WorkS2"></p>
        <p>Ingresar Departamento: <input type="text" id="WorkD2" name="WorkD2"></p>
        <p>Ingresar Lugar: <input type="text" id="WorkL2" name="WorkL2"></p>

        <h4>Tercer trabajador</h4>

        <p>Ingresar Nombre: <input type="text" id="WorkN3" name="WorkN3"></p>
        <p>Ingresar Apellido: <input type="text" id="WorkA3" name="WorkA3"></p>
        <p>Ingresar Cedula: <input type="text" id="WorkC3" name="WorkC3"></p>
        <p>Ingresar Sueldo: <input type="text" id="WorkS3" name="WorkS3"></p>
        <p>Ingresar Departamento: <input type="text" id="WorkD3" name="WorkD3"></p>
        <p>Ingresar Lugar: <input type="text" id="WorkL3" name="WorkL3">
        <input type="submit" id="enviar" name="enviar" value="enviar"/></p>
    </form>
</body>
</html>
<?php

$trabajador[0]=['Nombre'=>$_POST['WorkN1'],'Apellido'=>$_POST['WorkA1'],'Cedula'=>$_POST['WorkC1'],'Sueldo'=>$_POST['WorkS1'],'Departamento'=>$_POST['WorkD1'],'Lugar'=>$_POST['WorkL1']];
$trabajador[1]=['Nombre'=>$_POST['WorkN2'],'Apellido'=>$_POST['WorkA2'],'Cedula'=>$_POST['WorkC2'],'Sueldo'=>$_POST['WorkS2'],'Departamento'=>$_POST['WorkD2'],'Lugar'=>$_POST['WorkL2']];
$trabajador[2]=['Nombre'=>$_POST['WorkN3'],'Apellido'=>$_POST['WorkA3'],'Cedula'=>$_POST['WorkC3'],'Sueldo'=>$_POST['WorkS3'],'Departamento'=>$_POST['WorkD3'],'Lugar'=>$_POST['WorkL3']];

echo '<h1>Registro de Trabajadores</h1>';

foreach($trabajador as $valor){
    echo '<h3> Nombre: '.$valor['Nombre'].$Nombre.'</h3>';
    echo '<h3> Apellido: '.$valor['Apellido'].$Apellido.'</h3>';
    echo '<h3> Cedula: '.$valor['Cedula'].$Cedula.'</h3>';
    echo '<h3> Sueldo: '.$valor['Sueldo'].$Sueldo.'</h3>';
    echo '<h3> Departamento: '.$valor['Departamento'].$Departamento.'</h3>';
    echo '<h3> Lugar: '.$valor['Lugar'].$Lugar.'</h3>';
    echo '<hr>';
}

?>
