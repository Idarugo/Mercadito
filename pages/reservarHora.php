<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/reservarHora.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Reservar Hora</title>
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="row col-12 text-center mt-5 my-5">
        <h1 class="title">Reserva de hora</h1>
        <div class="bar__container">
            <ul class="bar" id="bar">
                <li class="active">Identificar paciente</li>
                <li>Seleccionar servicio</li>
                <li>Seleccionar especialidad o profesional</li>
                <li>Seleccionar día y hora</li>
                <li>Confirmar y reservar</li>
            </ul>
        </div>

        <section id="cards">
            <div class="card">
                <h3 class="card__title">¿PARA QUIÉN ES LA HORA?</h3>
                <p class="card__text">Complete los datos del Paciente que será atendido:</p>
                <input type="text" name="txtRut" id="rut" class="form-style" onkeypress="return isNumber(event)" oninput="checkRut(this)" pattern="^(\d{1,2}\.)?\d{3}\.\d{3}(-|\s)?[\dkK]$">
                <div class="btn-container">
                    <a href="#" class="btn next" onclick="validarRut()" id="btnContinuar">Continuar</a>
                </div>
            </div>
            <div class="card">
                <h3 class="card__title">¿QUÉ SERVICIO NECESITA AGENDAR?</h3>
                <p class="card__text">Elige el servicio que necesitas agendar.</p>
                <!-- Servicios ofrecidos con iconos de FontAwesome -->
                <div class="services actions">
                    <a href="#" class="btn service next" data-service="evaluacion-habla">
                        <i class="fas fa-comments"></i>
                        Evaluación del Habla
                    </a>
                    <a href="#" class="btn service next" data-service="terapia-lenguaje">
                        <i class="fas fa-book"></i>
                        Terapia del Lenguaje
                    </a>
                    <a href="#" class="btn service next" data-service="rehabilitacion-auditiva">
                        <i class="fas fa-ear"></i>
                        Rehabilitación Auditiva
                    </a>
                    <a href="#" class="btn service next" data-service="orientacion-padres">
                        <i class="fas fa-users"></i>
                        Orientación a Padres
                    </a>
                </div>
                <div class="actions volver">
                    <a href="#" class="btn prev">Volver</a>
                </div>
            </div>
            <div class="card">
                <h3 class="card__title">Producto o servicio</h3>
                <p class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, alias consectetur, iusto non aut, voluptate recusandae saepe amet aperiam libero voluptatum, numquam quia totam. Autem iure nihil iusto quos, consectetur.</p>
                <div class="actions">
                    <a href="#" class="btn prev">Volver</a>
                    <a href="#" class="btn next">Next</a>
                </div>
            </div>

            <div class="card">
                <h4 class="card__title">Calendario de Disponibilidad de Consultas de Fonoudiología</h3>
                    <p class="card__text">Reserva tu consulta de fonoudiología fácilmente</p>
                    <!-- Calendario con horas disponibles usando jQuery UI Datepicker -->
                    <div class="calendar">
                        <h4>Selecciona una fecha</h4>
                        <input type="text" id="fecha" name="fecha" class="form-control">
                        <h4>Selecciona una hora</h4>
                        <select id="hora" name="hora" class="form-control">
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <!-- Agrega más opciones de horas disponibles aquí -->
                        </select>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn prev">Volver</a>
                        <a href="#" class="btn next" id="buscarHora" disabled>Buscar Hora</a>
                    </div>
            </div>
            <div class="card">
                <h3 class="card__title">¡Ya casi terminas! Completa tus datos y finaliza la reserva:</h3>
                <p class="card__text">Fecha seleccionada: <span id="fechaSeleccionada"></span></p>
                <p class="card__text">Hora seleccionada: <span id="horaSeleccionada"></span></p>
                <p class="card__text">Especialidad seleccionada: <span id="especialidadSeleccionada"></span></p>

                <div class="actions">
                    <a href="#" class="btn prev">Prev</a>
                    <a href="#" class="btn next" id="confirmarReserva">Confirmar Reserva</a>
                </div>
            </div>
    </div>
    <script src="../assets/js/reservarHora.js"></script>
    <script src="../assets/js/rutReserva.js"></script>
    <script src="../assets/js/selectorHora.js"></script>
    <script src="../assets/js/botonHora.js"></script>
    <script src="../assets/js/confirmarReserva.js"></script>
    <?php include '../components/footer.php' ?>
</body>

</html>