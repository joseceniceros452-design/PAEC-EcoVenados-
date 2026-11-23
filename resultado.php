<!DOCTYPE html>
<html>
<head>
    <title>Carta compromiso</title>
    <meta charset="UTF-8">
    <link rel = "Stylesheet" href = "estilos.css" type = "text/css">
</head>
<body>
    
    <div class="contenedor">
        <div class="menu">
            <h3>Índice</h3>
            <ul>
                <li><a href="index.html">Principal</a></li>
                <br>
                <li><a href="reciclaje.html">¿Qué es el reciclaje?</a></li>
                <br>
                <li><a href="tipos_residuos.html">Tipos de residuos</a></li>
                <br>
                <li><a href="3r.html">Las 3R</a></li>
                <br>
                <li><a href="problema_ambiental.html">Problema ambiental</a></li>
                <br>
                <li><a href="reciclaje_escuela.html">El reciclaje en nuestra escuela</a></li>
                <br>
                <li><a href="reciclaje_comunidad.html">El reciclaje en nuestra comunidad</a></li>
                <br>
                <li><a href="formulario.php">Compromiso</a></li>
            </ul>
        </div>
        <div class="contenido">
            <div class="tarjeta-info">
                <?php
                $nombre = htmlspecialchars($_POST["nombre"] ?? "Compañero/a");
                $grupo = htmlspecialchars($_POST["grupo"] ?? "");
                $compromiso = htmlspecialchars($_POST["compromiso"] ?? "cuidar el ambiente");
                $unidades_semana = intval($_POST["unidades_semana"] ?? 0);

                $impacto_mes = $unidades_semana * 4;
                $impacto_ano = $unidades_semana * 52;

                if ($impacto_mes >= 40) {
                    $nivel_eco = "Guardían Eco-Venado Nivel Oro 🏆";
                } elseif ($impacto_mes >= 16) {
                    $nivel_eco = "Impulsor Verde Nivel Plata 🥈";
                } else {
                    $nivel_eco = "Semilla del Cambio Nivel Bronce 🌱";
                }

                echo "<h3>¡Compromiso registrado con éxito, " . $nombre . "!</h3>";
                echo "<p>Grupo: <strong>" . $grupo . "</strong> | Compromiso elegido: <strong>" . ucfirst($compromiso) . "</strong></p><br>";

                $mensajes = [
                    "¡Gran paso, $nombre! Cada envase que separas o evitas cuenta más de lo que imaginas. Al cumplir tu compromiso de '$compromiso', estás evitando que cientos de residuos terminen contaminando nuestra escuela y comunidad. ¡Sigue contagiando esa energía Eco-Venado!",
                    "¡Excelente aporte, $nombre! El cambio ambiental empieza con decisiones reales como la tuya hoy. Gracias por sumarte a la transformación de nuestro entorno y demostrar que en la prepa sí sabemos cuidar el planeta.",
                    "El reciclaje no es una moda, $nombre, es una responsabilidad con nuestro futuro. Gracias por comprometerte a '$compromiso'. Al darle una segunda vida a los materiales, ahorras agua, energía y mantienes limpios nuestros espacios escolares.",
                    "¿Sabías que tus pequeñas acciones diarias inspirarán a más compañeros, $nombre? No necesitas hacerlo perfecto desde el primer día: basta con ser constante en '$compromiso'. ¡Gracias por ser parte activa de PAEC: Eco-Venados Transformando el Entorno!"
                ];

                $indice_aleatorio = array_rand($mensajes);
                $mensaje_final = $mensajes[$indice_aleatorio];

                echo "<p style='font-size: 17px;'>" . $mensaje_final . "</p><br>";

                echo "<div style='background-color: #e3f2fd; padding: 12px; border-left: 4px solid #0e0e75; border-radius: 5px;'>";
                echo "<strong>🌱 Resultado de tu impacto semanal:</strong><br><br>";
                echo "Con <strong>$unidades_semana</strong> residuos gestionados o evitados por semana:<br>";
                echo "• En 1 mes evitarás/separarás <strong>$impacto_mes</strong> residuos.<br>";
                echo "• En 1 año lograrás un impacto de <strong>$impacto_ano</strong> residuos.<br>";
                echo "• Insignia alcanzada: <strong>$nivel_eco</strong>";
                echo "</div>";
                ?>
                <br><br>
                <a href="formulario.php">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>