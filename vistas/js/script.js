function fncSweetAlert(type, text, url) {
  switch (type) {
    /*=============================================
Cuando ocurre un error
=============================================*/
    case "error":
      if (url == null) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: text,
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: text,
        }).then((result) => {
          if (result.value) {
            window.open(url, "_top");
          }
        });
      }
      break;
    /*=============================================
Cuando es correcto
=============================================*/
    case "success":
      if (url == null) {
        Swal.fire({
          icon: "success",
          title: "OK",
          text: text,
        });
      } else {
        Swal.fire({
          icon: "success",
          title: "OK",
          text: text,
        }).then((result) => {
          if (result.value) {
            window.open(url, "_top");
          }
        });
      }
      break;
    /*=============================================
Cuando estamos precargando
=============================================*/
    case "loading":
      Swal.fire({
        allowOutsideClick: false,
        icon: "info",
        text: text,
      });
      Swal.showLoading();
      break;
    /*=============================================
Cuando necesitamos cerrar la alerta suave
=============================================*/
    case "close":
      Swal.close();
      break;
    /*=============================================
    Cuando solicitamos confirmación
=============================================*/
    case "confirm":
      return new Promise((resolve) => {
        Swal.fire({
          text: text,
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          cancelButtonText: "Cancelar",
          confirmButtonText: "Si, eliminar!",
        }).then(function (result) {
          resolve(result.value);
        });
      });
      break;
  }
}
/*=============================================
ELIMINAR DATO
=============================================*/
$(document).ready(function () {

    $(".tablaDatos").on("click", ".btnEliminarDato", function () {

        let idDatoEliminar = $(this).attr("idDato");      

        Swal.fire({
           
            text: "¡Si no está seguro puede cancelar la acción!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Sí, eliminar dato"

        }).then(function (result) {

            if (result.isConfirmed) {

                window.location =
                    "index.php?ruta=datos&idDatoEliminar=" + idDatoEliminar;

            }

        });

    });

});

document.addEventListener('DOMContentLoaded', function () {

    const tabla = document.querySelector('#example');

    if (tabla) {
        new DataTable('#example', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.2/i18n/es-AR.json'
            },
            pageLength: 10,
            lengthMenu: [5, 10, 25, 50],
            ordering: true,
            searching: true
        });
    }

});