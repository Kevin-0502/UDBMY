let expr = /^[a-zA-Z-0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;


$(document).ready(function () {
  $("#enviar").click(function () {
    var nombre = $("#nombres").val();
    var apellido = $("#apellidos").val();
    var correo = $("#email").val();
    var password = $("#password").val();
    var password2 = $("#password2").val();

    if (nombre == "") {
      $("#mensaje1").fadeIn();
      return false;
    } else {
      $("#mensaje1").fadeOut();
      if (apellido == "") {
        $("#mensaje2").fadeIn();
        return false;
      } else {
        $("#mensaje2").fadeOut();
        if (correo == "" || !expr.test(correo)) {
          $("#mensaje3").fadeIn();
          return false;
        } else {
          $("#mensaje3").fadeOut();
          if (password == "") {
            $("#mensaje4").fadeIn();
            return false;
          } else {
            $("#mensaje4").fadeOut();
            if (password2 == "") {
              $("#mensaje5").fadeIn();
              return false;
            } else {
              $("#mensaje5").fadeOut();
              if (password != password2) {
                $("#mensaje6").fadeIn();
                return false;
              } else {
                $("#mensaje6").fadeOut();
              }
            }
          }
        }
      }


    }


  });
});