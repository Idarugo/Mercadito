  // Inicializar el Datepicker en el input de fecha
  $("#fecha").datepicker();
    
  // Manejar el click en el botón "Buscar Hora"
  $(".next").on("click", function() {
      // Obtener la fecha y hora seleccionada
      var fechaSeleccionada = $("#fecha").val();
      var horaSeleccionada = $("#hora").val();
      
      // Realizar la acción necesaria con la fecha y hora seleccionada
      // Puedes hacerlo con JavaScript para procesar los datos en el cliente
      // o con AJAX para enviar los datos al servidor y realizar la acción correspondiente
  });
  
  // Manejar el click en el botón "Volver"
  $(".prev").on("click", function() {
      // Realizar la acción necesaria para volver
  });