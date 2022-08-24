// Config general
let ruta = "../php/cartelera/cartelera";

// Agregar pelicula
if (document.getElementById("formAgregar")) {
  document.getElementById("btnAgregar").addEventListener("click", (e) => {
  e.preventDefault();

  let tituloPelicula = $("#tituloPelicula").val();
  let tituloImg = $("#tituloImg").val();
  let genero = $("#generoPelicula").val();
  let sinopsis = $("#sinopsisPelicula").val();
  let horario = $("#horarioPelicula").val();
  let idioma = $("#idiomaPelicula").val();
  let duracion = $("#duracionPelicula").val();
  let formato = $("#formatoPelicula").val();
  let imagen = $("#imgAñadir").val();
  let imagenFile = $("#imgAñadir").prop("files");

  // Valida que vayan todos los datos
  if(
    tituloPelicula != "" && tituloImg != "" &&
    genero != "" && sinopsis != "" &&
    horario != "" && idioma != "" &&
    duracion != "" && formato != "" && imagen != ""
  ) {

    // Si se envian todos los datos los envia a PHP para que los agregué a la BD
    var formData = new FormData();
    formData.append("tituloPelicula", tituloPelicula);
    formData.append("tituloImg", tituloImg);
    formData.append("genero", genero);
    formData.append("sinopsis", sinopsis);
    formData.append("horario", horario);
    formData.append("idioma", idioma);
    formData.append("duracion", duracion);
    formData.append("formato", formato);
    formData.append("imagen", imagenFile[0]);

    fetch('../php/cartelera/agregar.php', {
        method: "POST",
        body: formData,
      })
      .then((response) => response.json())
      .then((response) => {
        if (response == "correcto") {
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Película agregada exitosamente",
              showConfirmButton: !1,
              timer: 1500,
            });
            setTimeout(Reedireccion, 500);
            function Reedireccion() {
              location.href = "./cartelera.php";
            }
        }
      });
    } else {
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Faltan datos",
        showConfirmButton: !1,
        timer: 1500,
      });
      setTimeout(Reedireccion, 1000);
      function Reedireccion() {
        location.href = "./cartelera.php";
      }
    }
  });
}

// Editar pelicula
let abrirEditar = (id) => {
  let checks = document.querySelectorAll('.check-peli');
  Array.from(checks).map((check) => {
    return check.checked = false;
  });

  fetch('../php/cartelera/traer_por_id.php', {
      method: "POST",
      body: JSON.stringify({id}),
      headers: { "Content-type": "aplication/json" },
  })
  .then((res) => res.json())
  .then((data) => {
    let {id_cartelera, imagen, genero, nombre, descripcion, duracion, formato, horario, idioma} = data;

    document.querySelector("#idEditar").value = id_cartelera;
    document.querySelector("#tituloEditar").innerText = nombre;
    document.querySelector("#tituloPeliculaEditar").value = nombre;
    document.querySelector("#imgPrev_editar").src = `../public/img/cartelera/${imagen}`;
    document.querySelector("#horarioPeliculaEditar").value = horario;

    let generosS = genero.split(",");

    generosS.map((gen) => {
      document.getElementById(gen).checked = true;
    });

    document.querySelector("#seleccionada").value = idioma;
    document.querySelector("#seleccionada").innerHTML = idioma;
    document.querySelector("#noSeleccionada").value = (idioma == "Español") ? "Subtitulos" : "Español";
    document.querySelector("#noSeleccionada").innerHTML = (idioma == "Español") ? "Subtitulos" : "Español";

    document.querySelector("#seleccionadaFormato").value = formato;
    document.querySelector("#seleccionadaFormato").innerHTML = formato;
    document.querySelector("#noSeleccionadaFormato").value = (formato == "2D") ? "3D" : "2D";
    document.querySelector("#noSeleccionadaFormato").innerHTML = (formato == "2D") ? "3D" : "2D";

    document.querySelector("#duracionPeliculaEditar").value = duracion;
    document.querySelector("#descripcionInputEditar").innerText = descripcion;
  });
}

if (document.getElementById("formEditar")) {
  document.getElementById("btnEditar").addEventListener("click", (e) => {
    e.preventDefault();
    const formEditar = document.getElementById("formEditar");
    let formulario = new FormData(formEditar);

    fetch('../php/cartelera/editar.php', {
      method: "POST",
      body: formulario,
    })
    .then((response) => response.json())
    .then((response) => {
      if (response == "correcto") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Película actualizada",
          showConfirmButton: !1,
          timer: 1500,
        });
        setTimeout(Reedireccion, 500);
        function Reedireccion() {
          location.href = "./cartelera.php";
        }
      } else if (response == "vacio") {
        Swal.fire("Error!", "Datos vacíos", "error");
      } else if (response == "error") {
        Swal.fire("Error!", "Error en el servidor", "error");
      }
    });
  });
}

// Eliminar pelicula

$(document).on("click", ".eliminarPeli", function () {
  var id = $(this).data("id");

  Swal.fire({
      icon: "warning",
      title: 'Eliminar tarjeta',
      text: '¿Estás seguro de eliminar esta tarjeta? esta opción no se puede deshacer',
      showCancelButton: true,
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar',
  }).then((result) => {
      if (result.value) {
          $.post("../php/cartelera/eliminar.php", {
              id: id
          }, function () {
              Swal.fire({
                  icon: "success",
                  title: 'Tarjeta eliminada',
                  text: 'La tarjeta se ha eliminado correctamente',
              });
              setTimeout(Reedireccion, 500);
              function Reedireccion() {
                location.href = "./cartelera.php";
              }
          });
      } else {
          Swal.fire({
              icon: "error",
              title: 'Cancelado',
              text: 'La tarjeta no se ha eliminado',
              confirmButtonText: 'Aceptar'
          });
      }
  });
});