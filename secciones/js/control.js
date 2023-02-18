$(document).ready(function () {


    $("#slc-anio").hide()
    $("#slc-descripcion").hide()
    $("#slc-descripcionCompleta").hide()

    $("#slc-marcas").one("click", function () {
        $.ajax({
            type: "GET",
            url: "https://gen_wsapp.segurointeligente.mx/WsGenericoSI.svc/GetMarcas?Usuario=&Pass=",
            async: true,
            success: function (datos) {
                let options = "<option value='0' selected disabled>Selecciona una marca</option>"
                $.map(datos, function (a) {
                    options += ` 
                    <option value="${a.MARHOM}">${a.MARHOM}</option>
                   `
                })

                $("#slc-marcas").empty().append(options);

            }
        }).fail(function (e) {
            console.log(e)
        });
    })

    $("#slc-marcas").change(function () {
        localStorage.clear();
        $("#pasoId").val(parseInt($("#pasoId").val()) + 1)
        let paso = parseInt($("#pasoId").val())
        let id = this.value.replace(/ /g, '')
        let optionSelected = ` 
        <span id="descript-${id}"  class="badge text-bg-primary position-relative" style="font-size:120%">${this.value} 
            <span  class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger btn-quitar-item paso-${paso} " onclick="restarPaso()" id="r-descript-${id}" >
                x
            </span>
        </span>
        `
        
        if (paso == 0) {
            $(".descript_options").empty().append(optionSelected)
            console.log("Aca tampoco lo veo");
        } else {
            $(`.btn-quitar-item`).hide();
            $(".descript_options").append(optionSelected)
            console.log("Si se selecciona pero no la veo :(");
        }
        $("#slc-marcas").hide()
        $("#slc-anio").show()


        localStorage.setItem('marca', $("#slc-marcas").val());
        localStorage.setItem('vecesConsultaAnio', 0);

        $(".btn-quitar-item").click(function () {
            let paso = parseInt($("#pasoId").val())
            let idbadge = this.id.replace("r-", '')

            $(`#${idbadge}`).remove()
            $(`.paso-${paso}`).show()
            console.log(idbadge)
        })

    })

    $("#slc-anio").click(function () {
        let marca = $("#slc-marcas").val()
        if (marca !== localStorage.getItem('marca')) {
            $.ajax({
                type: "GET",
                url: `https://gen_wsapp.segurointeligente.mx/WsGenericoSI.svc/GetModelo?Usuario=SIWS&Pass=Gmag2020*&RangoModelo=2005&Marca=${marca}`,
                async: true,
                success: function (datos) {

                    let options = "<option value='0' selected disabled>Selecciona un modelo</option>"
                    $.map(datos, function (a) {
                        options += ` 
                        <option value="${a.MODMIN}">${a.MODMIN}</option>
                       `
                    })

                    $("#slc-anio").empty().append(options);

                }
            }).fail(function (e) {
                console.log(e)
            });
        } else {
            if (localStorage.getItem('vecesConsultaAnio') == 0) {
                $.ajax({
                    type: "GET",
                    url: `https://gen_wsapp.segurointeligente.mx/WsGenericoSI.svc/GetModelo?Usuario=SIWS&Pass=Gmag2020*&RangoModelo=1989&Marca=${marca}`,
                    async: true,
                    success: function (datos) {

                        let options = "<option value='0' selected disabled>Selecciona un modelo</option>"
                        $.map(datos, function (a) {
                            options += ` 
                            <option value="${a.MODMIN}">${a.MODMIN}</option>
                           `
                        })
                        localStorage.setItem('vecesConsultaAnio', 1);

                        $("#slc-anio").empty().append(options);

                    }
                }).fail(function (e) {
                    console.log(e)
                });
            } else {
                console.log("es igual")
            }
        }
    })

    $("#slc-anio").change(function () {
        $("#pasoId").val(parseInt($("#pasoId").val()) + 1)
        let paso = parseInt($("#pasoId").val())
        let id = this.value.replace(/ /g, '')
        let optionSelected = ` 
        <span id="descript-${id}" class="badge text-bg-primary position-relative" style="font-size:120%">${this.value} 
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger btn-quitar-item paso-${paso} " onclick="restarPaso()" id="r-descript-${id}" >
                x
            </span>
        </span>
        `
        if (paso == 0) {
            $(".descript_options").empty().append(optionSelected)
        } else {
            $(`.btn-quitar-item`).hide();
            $(".descript_options").append(optionSelected)
        }

        $("#slc-anio").hide()
        $("#slc-descripcion").show()

        localStorage.setItem('modelo', $("#slc-anio").val());
        localStorage.setItem('vecesConsultaDescripcion', 0);
        localStorage.setItem('vecesConsultaAnio', 1);

        $(".btn-quitar-item").click(function () {
            let paso = parseInt($("#pasoId").val())
            let idbadge = this.id.replace("r-", '')

            $(`#${idbadge}`).remove()
            $(`.paso-${paso}`).show()
            console.log(idbadge)
        })

    })

    $("#slc-descripcion").click(function (e) {
        let marca = $("#slc-marcas").val()
        let anio = $("#slc-anio").val()

        if (marca !== localStorage.getItem('marca') || anio !== localStorage.getItem('modelo')) {
            $.ajax({
                type: "GET",
                url: `https://gen_wsapp.segurointeligente.mx/WsGenericoSI.svc/GetSubMarcas?Usuario=SIWS&Pass=Gmag2020*&Marca=${marca}&Modelo=${anio}`,
                async: true,
                success: function (datos) {
                    let options = "<option value='0' selected disabled>Selecciona una descripción</option>"
                    $.map(datos, function (a) {
                        options += ` 
                        
                        <option value="${a.SUBMARHOM}">${a.SUBMARHOM}</option>
                       `
                    })



                    $("#slc-descripcion").empty().append(options);

                }
            }).fail(function (e) {
                console.log(e)
            });
        } else {
            if (localStorage.getItem('vecesConsultaDescripcion') == 0) {
                $.ajax({
                    type: "GET",
                    url: `https://gen_wsapp.segurointeligente.mx/WsGenericoSI.svc/GetSubMarcas?Usuario=SIWS&Pass=Gmag2020*&Marca=${marca}&Modelo=${anio}`,
                    async: true,
                    success: function (datos) {
                        let options = "<option value='0' selected disabled>Selecciona una descripción</option>"
                        $.map(datos, function (a) {
                            options += `
                            
                            <option  value="${a.SUBMARHOM}">${a.SUBMARHOM}</option>`
                        })
                        localStorage.setItem('vecesConsultaDescripcion', 1);


                        $("#slc-descripcion").empty().append(options);

                    }
                }).fail(function (e) {
                    console.log(e)
                });
            } else {
                console.log("Es igual")
            }
        }
    })

    $("#slc-descripcion").change(function () {
        $("#pasoId").val(parseInt($("#pasoId").val()) + 1)
        let paso = parseInt($("#pasoId").val())
        let id = this.value.replace(/ /g, '')
        let optionSelected = ` 
        <span id="descript-${id}" class="badge text-bg-primary position-relative" style="font-size:120%">${this.value} 
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger btn-quitar-item paso-${paso} " onclick="restarPaso()" id="r-descript-${id}" >
                x
            </span>
        </span>
        `
        if (paso == 0) {
            $(".descript_options").empty().append(optionSelected)
        } else {
            $(`.btn-quitar-item`).hide();
            $(".descript_options").append(optionSelected)
        }

        $("#slc-descripcion").hide()
        $("#slc-descripcionCompleta").show()

        localStorage.setItem('descripcion', $("#slc-descripcion").val());
        localStorage.setItem('vecesConsultaDescripcion', 1);
        localStorage.setItem('vecesConsultaDescripcionCompleta', 0);


        $(".btn-quitar-item").click(function () {
            let paso = parseInt($("#pasoId").val())
            let idbadge = this.id.replace("r-", '')

            $(`#${idbadge}`).remove()
            $(`.paso-${paso}`).show()
        })

    })

    $("#slc-descripcionCompleta").click(function (e) {
        let marca = $("#slc-marcas").val()
        let anio = $("#slc-anio").val()
        let desc = $("#slc-descripcion").val()

        if (marca !== localStorage.getItem('marca') || anio !== localStorage.getItem('modelo') || desc !== localStorage.getItem('descripcion')) {
            $.ajax({
                type: "GET",
                url: `https://wscotizacion.segurointeligente.mx/Cotizacion.svc/ObtenerDescripcionesCompleta?Usuario=SIWS&Pass=Gmag2020*&Marca=${marca}&Modelo=${anio}&Des=${desc}&IDGrupo=466&Cobertura=AMPLIA&Aseguradora=AXA`,
                async: true,
                success: function (datos) {
                    let options = "<option value='0' selected disabled>Selecciona un paquete</option>"
                    $.map(datos, function (a) {
                        options += `
                        <option value="${a.CEVIC}">${a.Descripcion}</option>`
                    })


                    $("#slc-descripcionCompleta").empty().append(options);

                }
            }).fail(function (e) {
                console.log(e)
            });
        } else {
            if (localStorage.getItem('vecesConsultaDescripcionCompleta') == 0) {
                $.ajax({
                    type: "GET",
                    url: `https://wscotizacion.segurointeligente.mx/Cotizacion.svc/ObtenerDescripcionesCompleta?Usuario=SIWS&Pass=Gmag2020*&Marca=${marca}&Modelo=${anio}&Des=${desc}&IDGrupo=466&Cobertura=AMPLIA&Aseguradora=AXA`,
                    async: true,
                    success: function (datos) {
                        let options = "<option value='0' selected disabled>Selecciona un paquete</option>"
                        $.map(datos, function (a) {
                            options += `
                            <option value="${a.CEVIC}">${a.Descripcion}</option>`
                        })

                        localStorage.setItem('vecesConsultaDescripcionC', 1);

                        $("#slc-descripcionCompleta").empty().append(options);

                    }
                }).fail(function (e) {
                    console.log(e)
                });
            }
        }
    })


    $("#slc-descripcionCompleta").change(function () {
        $("#pasoId").val(parseInt($("#pasoId").val()) + 1)
        let paso = parseInt($("#pasoId").val())
        let id = this.value.replace(/ /g, '')
        let optionSelected = ` 
        <span id="descript-${id}" class="badge text-bg-primary position-relative" style="font-size:120%">${$('#' + this.id + ' option:selected').html()} 
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger btn-quitar-item paso-${paso} " onclick="restarPaso()" id="r-descript-${id}" >
                x
            </span>
        </span>
        `
        if (paso == 0) {
            $(".descript_options").empty().append(optionSelected)
        } else {
            $(`.btn-quitar-item`).hide();
            $(".descript_options").append(optionSelected)
        }
        $("#slc-descripcionCompleta").hide()

        localStorage.setItem('descripcionCompleta', $("#slc-descripcionCompleta").val());
        localStorage.setItem('vecesConsultaDescripcionCompleta', 1);


        $(".btn-quitar-item").click(function () {
            let paso = parseInt($("#pasoId").val())
            let idbadge = this.id.replace("r-", '')

            $(`#${idbadge}`).remove()
            $(`.paso-${paso}`).show()
        })

    })

    $("#formCotizacion").on('submit', function (evt) {
        evt.preventDefault();
        let data = $(this).serializeArray()
        if (validForm(data)) {
            let cot = createObjCotizacion(data)
            console.log(cot)

            $.ajax({
                type: "GET",
                url: `https://wscotizacion.segurointeligente.mx/Cotizacion.svc/ObtenerCotizacionAseg?Usuario=SIWS&Pass=Gmag2020*&Marca=${cot.marca}&Modelo=${cot.modelo}&Des=${cot.descripcion}&IDGrupo=466&Cobertura=AMPLIA&Aseguradora=AXA&Cevic=${cot.cvic}&CPostal=${cot.CP}&NombreFPago=CONTADO&Fnacimiento=${cot.FNacimiento}&Genero=${cot.genero}`,
                async: true,
                success: function (datos) {
                    console.log(datos.CotAI.PrimaTotal)
                    $.ajax({
                        type: "POST",
                        url: `cxsda/control.php`,
                        data: {
                            action: 'GuardarCotizacion',
                            nombre: cot.nombre,
                            marca: cot.marca,
                            modelo: cot.modelo,
                            descripcion: cot.descripcion,
                            precio: datos.CotAI.PrimaTotal,
                            ceviche: cot.cvic
                        },
                        dataType: "json",
                        success: function (e) {
                            if(e.response = 'OK'){
                                console.log("Tu poliza es de :" + datos.CotAI.PrimaTotal)
                                //window.location="gracias.php";
                            }
                        }
                    }).fail(function (e) {
                        console.log(e)
                    });
                }
            }).fail(function (e) {
                console.log(e)
            });
        }
    });


    $('.soloNumeros').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    $(".soloLetras").bind('keypress', function (event) {
        var regex = new RegExp("^[a-zA-Z ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });


    
});

function MiFuncionJS(){
console.log("Tacos")
}

