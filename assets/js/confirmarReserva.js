    // Obtener los datos de fecha, hora y especialidad seleccionados y mostrarlos en la card
    $('#fecha').on('change', function() {
        $('#fechaSeleccionada').text($(this).val());
    });

    $('#hora').on('change', function() {
        $('#horaSeleccionada').text($(this).val());
    });

    // Supongamos que la especialidad se selecciona mediante un input o un select con el ID 'especialidad'
    $('#especialidad').on('change', function() {
        $('#especialidadSeleccionada').text($(this).val());
    });

    // Función para confirmar la reserva al hacer clic en el botón "Confirmar Reserva"
    $('#confirmarReserva').on('click', function() {
        var fecha = $('#fecha').val();
        var hora = $('#hora').val();
        var especialidad = $('#especialidad').val();

        // Aquí puedes agregar la lógica para procesar la reserva con los datos obtenidos
        // por ejemplo, enviarlos a un servidor para almacenarlos en una base de datos
        // o mostrar un mensaje de confirmación al usuario

        // Ejemplo de alerta con los datos seleccionados
        alert('Reserva confirmada:\nFecha: ' + fecha + '\nHora: ' + hora + '\nEspecialidad: ' + especialidad);
    });