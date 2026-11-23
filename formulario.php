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
     
            <form action="resultado.php" method="post" style="margin:15px">

                <div class="titulo">
                    <h1>Mi compromiso con el reciclaje</h1>  
                </div>

                <div class="datos">
                    <h2>Datos personales:</h2>
                    <label> Nombre: </label>
                    <input type="text" name="nombre"> <br> <br>
                    <label> Edad: </label>
                    <input type="number" name="edad"> <br> <br>
                    <label> Grupo: </label>
                    <input type="text" name="grupo"> <br> <br>
                </div>

                <div class="preguntas">
                    <label> ¿Cuál es el residuo que más generas? </label><br><br>
                    <input type="text" name="residuo_frecuente"> <br> <br>            
                </div>

                <div class="preguntas">
                    <label> ¿Separas tus residuos? </label><br><br>
                    <input type="radio" name="residuos" value="si"> Si <br><br>
                    <input type="radio" name="residuos" value="no"> No <br><br>
                    <input type="radio" name="residuos" value="algunas veces"> Algunas veces <br> <br>            
                </div>

                <div class="preguntas">
                    <label> ¿Qué acción realizas para cuidar el ambiente? </label><br><br>
                    <input type="text" name="accion_ambiente"> <br> <br>            
                </div>

                <div class="preguntas">
                    <label> Seleccionar un compromiso: </label><br><br>
                    <input type="radio" name="compromiso" value="reducir"> Reducir el uso del plastico <br><br>
                    <input type="radio" name="compromiso" value="separar"> Separar residuos <br><br>
                    <input type="radio" name="compromiso" value="reutilizar"> Reutilizar materiales <br><br>
                    <input type="radio" name="compromiso" value="participar"> Participar en campañas <br><br>
                    <input type="radio" name="compromiso" value="reciclar"> Reciclar aparatos electrónicos <br> <br>            
                </div>


                <div class="preguntas">
                    <h1>Calculadora de impacto semanal </h1>
                    <label> 🌱 ¿Cuántos envases o residuos evitas o separas a la semana con tu compromiso? </label><br><br>
                    <input type="number" name="unidades_semana" min="0" max="500" value="5"> <br> <br>
                </div>

                <div class="preguntas">
                    <label>Comentario: </label><br><br>
                    <input type="text" name="comentario"> <br> <br>
                    <input type="submit" value="Enviar">  
                </div>
                <div class="preguntas">
                <p>¿Tienes dudas o quieres enviar un mensaje directo? 
                <a href="mailto:ximenadol12@gmail.com">Escríbeme por correo</a>
                </p>
            </div>
            </form>
        </div>

    </div>
</body>
</html>