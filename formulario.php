<?php
$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = (int)$_POST['edad'];

    $resultado = "<div class='resultado'>";
    $resultado .= "<h2>Resultado del Formulario</h2>";
    $resultado .= "<div class='mensaje'>";
    $resultado .= "Nombre: <strong>$nombre</strong><br>";
    $resultado .= "Edad: <strong>$edad</strong><br><br>";

    if ($edad >= 18) {
        $resultado .= "Eres mayor de edad.";
    } else {
        $resultado .= "Eres menor de edad.";
    }
    $resultado .= "</div></div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #eef2f3, #8e9eab);
            padding: 20px;
            margin: 0;
        }

        .contenedor {
            max-width: 600px;
            margin: auto;
        }

        .formulario, .resultado {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            color: rgb(28, 46, 85);
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            background-color: rgb(28, 46, 85);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: rgb(255, 217, 0);
            color: black;
        }

        .mensaje {
            font-size: 18px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="contenedor">

    <div class="formulario">
        <h2>Formulario de Registro</h2>
        <form method="post">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Edad:</label>
            <input type="number" name="edad" required>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <!-- Mostrar resultado si existe -->
    <?php echo $resultado; ?>

</div>

</body>
</html>
