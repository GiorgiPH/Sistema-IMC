<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/15a0d9b4d3.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="icono-img"><i class="fa-solid fa-calculator"></i></div>
            <p>CALCULADORA IMC</p>
        </div>
    </header>
    <div class="definicion ">
        <div class="definicion-contenido">
            <div class="contenedor apoyo">
            <h2>¿Qué es el índice de masa corporal?</h2>

            <p>El índice de masa corporal (IMC) es la relación entre la masa corporal
            de una persona y su estatura. Según los valores propuestos por la Organización
            Mundial de la Salud (OMS), el IMC uno de los principales recursos para evaluar el
            estado nutricional.</p>
            <br><br>

            <center><a class="boton boton-azul" href="#">Más información</a></center>
            </div>
        </div>
    </div>
    <div class="contenedor calculadora">
        <section class="calculadora-calcular">
            <h4>Calculadora del índice de masa corporal</h4>
            <div class="contenedor-campos">
                <div class="campo">
                    <label>Nombre: </label>
                    <input type="text" class="texto" placeholder="escribe tu nombre">
                </div>
                <div class="campo sexos">
                    <button><img alt="Masculino" id="H" src="https://www.clinicalascondes.cl/Dev_CLC/media/Imagenes/redi_imc/btn-man.png"></button>
                    <button><img alt="Femenino" id="M" src="https://www.clinicalascondes.cl/Dev_CLC/media/Imagenes/redi_imc/btn-woman.png"></button>
                </div>
                <div class="campo edad">
                    <label>Edad: </label>
                    <input type="number" class="texto" placeholder="Escribe tu edad">
                </div>
                <div class="campo">
                    <label>Peso (kg): </label>
                    <input type="number" class="texto" placeholder="Escribe tu peso">
                </div>
                <div class="campo">
                    <label>Altura (mts): </label>
                    <input type="number" class="texto" placeholder="Escribe tu altura">
                </div>
                <div class="enviar">
                    <input class="boton boton-negro" type="submit" value="Generar PDF">
                </div>
            </div>
        </section>
        <aside class="calculadora-info">
            <h4>¿Cómo se mide el IMC?</h4>
            <p>La fórmula del IMC es el peso en kilógramos dividido por el cuadrado de la
                altura en metros (kg/m2). El IMC es una indicación simple de la relación 
                entre el peso y la talla que se utiliza frecuentemente para identificar el
                sobrepeso y la obesidad en los adultos, tanto a nivel individual como poblacional.</p>
        </aside>
    </div>
    <footer class="footer">
        <p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy;</p>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>