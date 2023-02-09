
   function iniciarS(){
      var email = document.getElementById("mailper").value;
      var pass = document.getElementById("pass").value;
      $.ajax({
        type: "POST",
        url: `http://wscashmas.segurointeligente.mx/ControlUsuarios/IniciarSesion`,
        data: {API_USUARIO: {USUARIO:'ADMIN' ,CONTRASENIA:'Hola123'},USUARIO:{Correo:email,Contrasenia:pass}},
        success: function (datos) {

          console.log(JSON.parse(datos))
          var obj = JSON.parse( datos);
          var Respuesta = obj['MSG'];
          var Nombre = obj['NOMBRE'];
          var ApellidoP = obj['APELLIDO_PATERNO'];
          var ApellidoM = obj['APELLIDO_MATERNO'];
          var Mailu = obj['CORREO'];
          var cel = obj['TELEFONO'];
          var MSG = obj['MSG']

          if(MSG == "OK"){
          
          var pass1 = document.getElementById("pass").value;
          console.log(pass1);

                $.ajax({
                  type: "POST",
                  url: `secciones/control/control.php`,
                  data: {
                      action: 'GuardarDatos',
                      nombre: Nombre,
                      apellidoP: ApellidoP,
                      apellidoM: ApellidoM,
                      Mail : Mailu,
                      pass : pass1,
                      Celular : cel,
                  },
                  dataType: "json",
                  success: function (e) {
                      if(e.response = 'OK'){
                        console.log("Todo Chido Mi rey "+Respuesta)
                        window.location="secciones/inicio.php";
                      } 
                  }
              }).fail(function (e) {
                  console.log(e)
              });
          }else{
            alert("Valio Madre");
          }
          
        }
    }).fail(function (e) {
        console.log(e)
    });
   }
   
   
   function CerrarS(){  

      var email = document.getElementById("mailper");
      var pass = document.getElementById("pass");
      
      console.log(email.innerHTML);
      console.log(pass.innerText);

      $.ajax({
      type: "POST",
      url: `http://wscashmas.segurointeligente.mx/ControlUsuarios/CerrarSesion`,
      data: {API_USUARIO: {USUARIO:'ADMIN' ,CONTRASENIA:'Hola123'},USUARIO:{Correo:email.innerHTML,Contrasenia:pass.innerHTML}},
      success: function (datos) {
          console.log(JSON.parse(datos))
          var obj = JSON.parse( datos);
          var Respuesta = obj['Mensaje'];
          
            if( Respuesta == 'SESION CERRADA'){
              
              console.log("Todo Chido Mi rey "+ Respuesta)
              window.location="../index.php";
          }   
      }
    }).fail(function (e) {
      console.log(e)
    });

  }  

  function RegistroNU(){  
    
    var nombre = document.getElementById("nombre").value;
    var Apaterno = document.getElementById("Apaterno").value;
    var Amaterno = document.getElementById("Amaterno").value;
    var Celular = document.getElementById("Celular").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var Perfil = "User";
    


    $.ajax({
    type: "POST",
    url: `http://wscashmas.segurointeligente.mx/ControlUsuarios/InsertarUsuario`,
    data: {API_USUARIO:{USUARIO:"ADMIN",CONTRASENIA:"Hola123"},
    "USUARIO":{Nombre: nombre, Apellido_Paterno: Apaterno, Apellido_Materno: Amaterno,
    Telefono: Celular, Correo: email,Contrasenia: pass ,Perfil: Perfil}},
    success: function (datos) {
        console.log(JSON.parse(datos))
        var obj = JSON.parse( datos);
        var Respuesta = obj['Mensaje'];
          if( Respuesta == 'CORREO REGISTRADO EXITOSAMENTE'){
           
            console.log("Todo Chido Mi rey "+Respuesta)
            window.location="./index.php";
        }   
    }
  }).fail(function (e) {
    console.log(e)
  });

}  



   
   


   
   
    



