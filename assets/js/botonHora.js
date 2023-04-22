
     // Habilitar o deshabilitar el botón "Buscar Hora" según si se ha seleccionado una fecha
     $('#fecha').on('change', function() {
        if ($(this).val() !== '') {
            $('#buscarHora').removeAttr('disabled');
        } else {
            $('#buscarHora').attr('disabled', true);
        }
    });
    