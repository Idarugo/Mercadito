
function validarRut() {
    var rut = document.getElementById("rut").value;
    if (rut === "") {
        alert("Debe ingresar un RUT");
        return;
    }
    // Validar el RUT ingresado utilizando una expresión regular
    var rutValido = /^0*(\d{1,3}(\.?\d{3})*)-?([\dkK])$/.test(rut);
    if (!rutValido) {
        alert("RUT ingresado no válido");
        return;
    }
    // Si el RUT es válido, se habilita el botón y se cambia su estilo
    var btnContinuar = document.getElementById("btnContinuar");
    btnContinuar.classList.add("active");
    btnContinuar.removeAttribute("onclick");
    btnContinuar.style.cursor = "pointer";
    // Si el RUT no es válido, se muestra un mensaje de error o se realiza alguna otra acción según el caso
    alert("RUT del Paciente ingresado correctamente. Puede continuar.");
}

// Función para validar y formatear el RUT automáticamente
function checkRut(rut) {
    // Obtiene el valor ingresado quitando puntos y guión.
    var valor = clean(rut.value);

    // Divide el valor ingresado en dígito verificador y resto del RUT.
    cuerpo = valor.slice(0, -1);
    dv = valor.slice(-1).toUpperCase();

    // Separa con un Guión el cuerpo del dígito verificador.
    rut.value = format(rut.value);

    // Calcular Dígito Verificador "Método del Módulo 11"
    suma = 0;
    multiplo = 2;

    // Para cada dígito del Cuerpo
    for (i = 1; i <= cuerpo.length; i++) {
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if (multiplo < 7) {
            multiplo = multiplo + 1;
        } else {
            multiplo = 2;
        }
    }

    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    dv = dv == "K" ? 10 : dv;
    dv = dv == 0 ? 11 : dv;
}
function format(rut) {
    rut = clean(rut);

    var result = rut.slice(-4, -1) + '-' + rut.substr(rut.length - 1);
    for (var i = 4; i < rut.length; i += 3) {
        result = rut.slice(-3 - i, -i) + '.' + result;
    }

    return result;
}
