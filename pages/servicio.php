<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/servicio.css">
    <title>Servicio</title>
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="row col-12 text-center mt-5 my-5">
        <section class="services-section">
            <div class="container">
                <h2 class="section-title">Servicios</h2>

                <div class="card-container">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Evaluación auditiva</h3>
                            <button class="card-button" data-target="card-1">Ver más información</button>
                        </div>
                        <div class="card-body" id="card-1">
                            <ul class="card-list">
                                <li>Examen otoscópico</li>
                                <li>Pruebas de audición</li>
                                <li>Diagnóstico y tratamiento de problemas auditivos</li>
                            </ul>
                            <p class="card-text">Realizamos evaluaciones auditivas completas para niños y adultos.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Terapia del habla</h3>
                            <button class="card-button" data-target="card-2">Ver más información</button>
                        </div>
                        <div class="card-body" id="card-2">
                            <ul class="card-list">
                                <li>Trastornos del lenguaje</li>
                                <li>Disfemia (tartamudez)</li>
                                <li>Disfonías</li>
                            </ul>
                            <p class="card-text">Ofrecemos terapia del habla personalizada para tratar trastornos del lenguaje y del habla.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Adaptación de prótesis auditivas</h3>
                            <button class="card-button" data-target="card-3">Ver más información</button>
                        </div>
                        <div class="card-body" id="card-3">
                            <ul class="card-list">
                                <li>Evaluación audiológica</li>
                                <li>Selección de prótesis auditiva</li>
                                <li>Adaptación y seguimiento</li>
                            </ul>
                            <p class="card-text">Ayudamos a seleccionar y adaptar la prótesis auditiva más adecuada para cada paciente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include '../components/footer.php' ?>
    <script src="../assets/js/servicio.js"></script>
</body>

</html>