<?php
include 'conexionbd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomape = $_POST['nomape'];
    $dni = $_POST['dni'];
    $fechaingreso = $_POST['fechaingreso'];
    $domicilio = $_POST['domicilio'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $programa = $_POST['programa'];
    $aniofin = $_POST['aniofin'];
    $titulado = $_POST['titulado'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $estadocivil = $_POST['estadocivil'];
    $aniotitulo = $_POST['aniotitulo']==""?0 : $_POST['aniotitulo'];
    $trabajaopcion = $_POST['trabajaopcion'];
    $remuneracion = $_POST['remuneracion'];
    $empresa = $_POST['empresa'];
    $tipoempresa = $_POST['tipoempresa'];
    $actividad = $_POST['actividad'];
    $direccionempresa = $_POST['direccionempresa'];
    $correoempresa = $_POST['correoempresa'];
    $telefonoempresa = $_POST['telefonoempresa'];
    $notrabajadetalle = $_POST['notrabajadetalle'];
    $condicionlaboral = $_POST['condicionlaboral'];
    $formacontrato = $_POST['formacontrato'];
    $calificacionformacion = $_POST['calificacionformacion'];
    $satisfaccionestudio = $_POST['satisfaccionestudio'];
    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];
    $pregunta4 = $_POST['pregunta4'];
    $pregunta5 = $_POST['pregunta5'];
    $conformeconinsti = $_POST['conformeconinsti'];
    $terminos = isset($_POST['terminos']) ? 1 : 0;

    var_dump($aniotitulo);
    $sql = "INSERT INTO egresados (nomape, dni, fechaingreso, domicilio, email, celular, programa, aniofin, titulado, edad, sexo, estadocivil, aniotitulo, trabajaopcion, remuneracion, empresa, tipoempresa, actividad, direccionempresa, correoempresa, telefonoempresa, notrabajadetalle, condicionlaboral, formacontrato, calificacionformacion, satisfaccionestudio, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, conformeconinsti, terminos)
    VALUES ('$nomape', '$dni', '$fechaingreso', '$domicilio', '$email', '$celular', '$programa', '$aniofin', '$titulado', '$edad', '$sexo', '$estadocivil', '$aniotitulo', '$trabajaopcion', '$remuneracion', '$empresa', '$tipoempresa', '$actividad', '$direccionempresa', '$correoempresa', '$telefonoempresa', '$notrabajadetalle', '$condicionlaboral', '$formacontrato', '$calificacionformacion', '$satisfaccionestudio', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$conformeconinsti', '$terminos')";

    if ($conn->query($sql) === TRUE) {
        header("Location: listaregresados.php");
        exit;
    } else {
        header("Location: listaregresados.php?error=" . urlencode("Error: " . $conn->error));
        exit;
    }
}
?>