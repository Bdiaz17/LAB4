<?php
$fileName = $_FILES["archivo"]["name"]; // nombre del archivos
$fileTmpLoc = $_FILES["archivo"]["tmp_name"]; // folder temporal de archivo
$fileType = $_FILES["archivo"]["type"]; // tipo de archivo
$fileSize = $_FILES["archivo"]["size"]; // tamaÃ±o del archivo
$fileErrorMsg = $_FILES["archivo"]["error"]; // tiene valor de cero si no hay error
if (!$fileTmpLoc) { //si no a seleccionado archivo
    echo "ERROR: Seleccione un archivo para subir.";
    exit();
}

if ($fileType == "png" || $fileType == "jpg") {
    if (move_uploaded_file($fileTmpLoc, "archivos/" . $fileName)) {
        echo $fileName . " subido completamente";
    } else {
        echo "ERROR: al subir el archivo";
    }
} else {
    echo "ERROR: Tipo de archivo no valido";
}
?>


<html>

<head>
    <title>Archivos</title>
</head>

<body bgcolor="black" text="#80FF00">
    <center>
        <form action='' method='post'>
            <table border='1'>
                <tr>
                    <th>URL de Archivos</th>
                    <th>Opcion a Borrar</th>
                </tr>