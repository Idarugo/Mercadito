<!DOCTYPE html>
<html lang="es">

<head>
    <?php include './components/head.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Inicio</title>
</head>

<body>
    <?php include './components/header.php' ?>

    <!-- HTML -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Contenedor del carrusel -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/img/carrusel-1.png" class="d-block w-100 img-carrusel">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/carrusel-2.png" class="d-block w-100 img-carrusel">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/carrusel-3.png" class="d-block w-100 img-carrusel">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5">
                <img src="./assets/img/QuienSomos.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-7 my-auto">
                <h1 class="text-center mb-4">Quienes somos</h1>
                <p class="text-justify">
                    En nuestra clínica de fonoaudiología, estamos comprometidos con mejorar la comunicación y la calidad de vida de nuestros pacientes. Nuestro equipo de fonoaudiólogos altamente capacitados y apasionados, se dedica a brindar servicios de evaluación y tratamiento de trastornos del habla, lenguaje y comunicación, para pacientes de todas las edades. Nuestra misión es ayudar a nuestros pacientes a superar sus desafíos de comunicación, para que puedan tener una vida más plena y conectada con los demás.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-10 offset-sm-1">
                <h1 class="mb-5">Servicios</h1>
                <ul class="list-unstyled">
                    <li>Evaluación y diagnóstico de trastornos del habla, lenguaje y comunicación.</li>
                    <li>Terapia individualizada para niños y adultos con trastornos del habla y lenguaje.</li>
                    <li>Terapia del habla y lenguaje para pacientes con dificultades de aprendizaje o discapacidad intelectual.</li>
                    <li>Rehabilitación vocal para pacientes con trastornos de la voz.</li>
                    <li>Orientación y apoyo para padres de niños con trastornos del habla y lenguaje.</li>
                    <li>Asesoramiento a instituciones educativas y empresas en materia de comunicación oral.</li>
                </ul>
            </div>
        </div>
    </div>



    <div class="row mt-5 my-5 col-12">
        <div class="col-sm-5 text-center pocision texto order-sm-2">
            <h1>Testimonios</h1>
        </div>
    </div>

    <div id="testimonios" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row testimonios">
                    <div class="col-md-4 mb-5">
                        <div class="testimonial">
                            <div class="testimonial-image text-center">
                                <img class="imgTestimonios" src="./assets/img/carrusel/testimonial1.png" alt="Testimonial 1">
                            </div>
                            <div class="testimonial-content">
                                <p>"Gracias a la ayuda de la fonoaudióloga he mejorado mi capacidad de comunicación y me siento más seguro al hablar con los demás."</p>
                                <div class="testimonial-meta">- Juan Pérez</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">
                        <div class="testimonial">
                            <div class="testimonial-image text-center">
                                <img class="imgTestimonios" src="./assets/img/carrusel/testimonial2.png" alt="Testimonial 2">
                            </div>
                            <div class="testimonial-content">
                                <p>"Mi hijo tenía problemas de lenguaje y gracias a la fonoaudióloga ha mejorado significativamente. Ahora se comunica mejor con su entorno y su autoestima ha mejorado."</p>
                                <div class="testimonial-meta">- María González</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="testimonial">
                            <div class="testimonial-image text-center">
                                <img class="imgTestimonios" src="./assets/img/carrusel/testimonial3.png" alt="Testimonial 3">
                            </div>
                            <div class="testimonial-content">
                                <p>"La atención y dedicación de la fonoaudióloga es excepcional. Me siento en buenas manos y confío en su profesionalismo."</p>
                                <div class="testimonial-meta">- Ana Torres</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="row testimonios">
                    <div class="col-md-4 mb-5">
                        <div class="testimonial">
                            <div class="testimonial-image text-center">
                                <img class="imgTestimonios" src="./assets/img/carrusel/testimonial4.png" alt="Testimonial 4">
                            </div>
                            <div class="testimonial-content">
                                <p>"Mi experiencia con la fonoaudióloga ha sido muy positiva. Me ha ayudado a superar mi tartamudez y ahora puedo hablar con más fluidez."</p>
                                <div class="testimonial-meta">- José Rodríguez</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonios" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonios" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="row mt-5 my-5 col-12">
        <div class="col-sm-5 text-center pocision texto order-sm-2">
            <h1>Preguntas frecuentes</h1>
            <div class="accordion" id="preguntas-frecuentes">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="pregunta1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta1" aria-expanded="true" aria-controls="respuesta1">
                            ¿Cuál es su horario de atención?
                        </button>
                    </h2>
                    <div id="respuesta1" class="accordion-collapse collapse" aria-labelledby="pregunta1" data-bs-parent="#preguntas-frecuentes">
                        <div class="accordion-body">
                            Nuestro horario de atención es de lunes a viernes de 9:00 am a 6:00 pm y sábados de 9:00 am a 1:00 pm.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="pregunta2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta2" aria-expanded="false" aria-controls="respuesta2">
                            ¿Qué servicios ofrecen?
                        </button>
                    </h2>
                    <div id="respuesta2" class="accordion-collapse collapse" aria-labelledby="pregunta2" data-bs-parent="#preguntas-frecuentes">
                        <div class="accordion-body">
                            Ofrecemos una amplia variedad de servicios de fonoaudiología para pacientes de todas las edades, incluyendo evaluación y diagnóstico de trastornos del habla, lenguaje y comunicación, terapia individualizada para niños y adultos con trastornos del habla y lenguaje, terapia del habla y lenguaje para pacientes con dificultades de aprendizaje o discapacidad intelectual, rehabilitación vocal para pacientes con trastornos de la voz, orientación y apoyo para padres de niños con trastornos del habla y lenguaje, y asesoramiento a instituciones educativas y empresas en materia de comunicación oral.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="pregunta3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta3" aria-expanded="false" aria-controls="respuesta3">
                            ¿Cuál es el costo de los servicios?
                        </button>
                    </h2>
                    <div id="respuesta3" class="accordion-collapse collapse" aria-labelledby="pregunta3" data-bs-parent="#preguntas-frecuentes">
                        <div class="accordion-body">
                            Los costos varían según el tipo de servicio que necesite cada paciente. Por favor, póngase en contacto con nosotros para obtener información detallada sobre los precios de nuestros servicios.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-5 my-5 col-12">
        <div class="col-sm-5 pocision order-sm-1">
            <h1>Contacto</h1>
            <ul class="contacto-list">
                <li>Teléfono: <a href="tel:numero-de-telefono">+56 9 6417 7619</a></li>
                <li>Email: <a href="mailto:correo-electronico">infoaudiologico@gmail.com</a></li>
                <li>Dirección: Mujica 609 | Oficina 602, Rancagua</li>
            </ul>
        </div>

        <div class="col-sm-5 text-center position texto order-sm-2">
            <h1>Horario disponible</h1>
            <table class="horario-table">
                <tr>
                    <th>Día</th>
                    <th>Horario</th>
                </tr>
                <tr>
                    <td>Lunes</td>
                    <td>09:00 - 13:00<br>14:00 - 19:00</td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td>09:00 - 13:00<br>14:00 - 19:00</td>
                </tr>
                <tr>
                    <td>Miércoles</td>
                    <td>09:00 - 13:00<br>14:00 - 19:00</td>
                </tr>
                <tr>
                    <td>Jueves</td>
                    <td>09:00 - 13:00<br>14:00 - 19:00</td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>09:00 - 13:00<br>14:00 - 19:00</td>
                </tr>
                <tr>
                    <td>Sábado</td>
                    <td>Cerrado</td>
                </tr>
                <tr>
                    <td>Domingo</td>
                    <td>Cerrado</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row mt-5 my-5 justify-content-center">
        <div class="col-11">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.171016590918!2d-70.74773037134428!3d-34.167545018442816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966343bd1328e1e1%3A0x78978ea9b84002e6!2sCENTRO%20AUDIOLOGICO%20RANCAGUA!5e0!3m2!1ses!2scl!4v1681070330160!5m2!1ses!2scl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <?php include './components/footer.php' ?>
    <script src="/assets/js/doctype.js"></script>
    <script src="/assets/js/header.js"></script>
</body>

</html>