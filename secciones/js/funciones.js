
function validInput(e) {
    if (e.value == "") {
        valid = false;
        $("#error-" + e.name).html("*Es necesario llenar este campo")
    } else {
        $("#error-" + e.name).html("")
    }
}

function validInputSLC(e) {
    if (e.value == "0") {
        $("#error-MultiSlc").html("*No se ha seleccionado una descripción completa del vehiculo")
    } else {
        $("#error-MultiSlc").html("")
    }
}

function createLoginData(data) {
    let obj = new Object()
    $.map(data, function (a) {
        switch (a.name) {
            case 'marca':
                obj.marca = a.value
                break;
            case 'modelo':
                obj.modelo = a.value
                break;
            case 'descripcion':
                obj.descripcion = a.value
                break;
            case 'descripcionCompleta':
                obj.cvic = a.value
                break;
            case 'CP':
                obj.CP = a.value
                break;
            case 'genero':
                obj.genero = a.value
                break;
            case 'FNacimiento':
                obj.FNacimiento = a.value
                break;
            case 'nombre':
                obj.nombre = a.value
                break;
        }

    })

    return obj
}