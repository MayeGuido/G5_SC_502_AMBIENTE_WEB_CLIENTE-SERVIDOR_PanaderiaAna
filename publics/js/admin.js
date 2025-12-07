document.addEventListener("DOMContentLoaded", () => {
  const botones = document.querySelectorAll(".btn-admin");
  const secciones = document.querySelectorAll(".admin-subseccion");
  const adminPanel = document.getElementById("admin");
  const botonesVolver = document.querySelectorAll(".btn-volver");

  function ocultarTodo() {
    secciones.forEach(sec => sec.style.display = "none");
  }

  botones.forEach(btn => {
    btn.addEventListener("click", () => {
      ocultarTodo();
      adminPanel.style.display = "none";

      if (btn.classList.contains("usuarios"))
        document.getElementById("admin-usuarios").style.display = "block";
      if (btn.classList.contains("productos"))
        document.getElementById("admin-productos").style.display = "block";
      if (btn.classList.contains("reportes"))
        document.getElementById("admin-reportes").style.display = "block";
      if (btn.classList.contains("configuracion"))
        document.getElementById("admin-config").style.display = "block";
    });
  });

  botonesVolver.forEach(boton => {
    boton.addEventListener("click", () => {
      ocultarTodo();
      adminPanel.style.display = "block";
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });

  ocultarTodo();
});
