document.addEventListener("DOMContentLoaded", () => {
  const menuItems = document.querySelectorAll(".perfil-menu li");
  const secciones = document.querySelectorAll(".perfil-section");
  const bienvenida = document.getElementById("perfil-contenido");

  function ocultarTodo() {
    secciones.forEach(sec => sec.style.display = "none");
  }

  function mostrarSeccion(id) {
    ocultarTodo();
    bienvenida.style.display = "none";
    const target = document.getElementById(id);
    if (target) target.style.display = "block";
  }

  menuItems.forEach(item => {
    item.addEventListener("click", () => {
      menuItems.forEach(li => li.classList.remove("activo"));
      item.classList.add("activo");
      mostrarSeccion(item.dataset.section);
    });
  });

  ocultarTodo();
  bienvenida.style.display = "block";

  function toast(msg, color="#e00064") {
    const div = document.createElement("div");
    div.textContent = msg;
    div.style.position = "fixed";
    div.style.bottom = "20px";
    div.style.right = "20px";
    div.style.background = color;
    div.style.color = "#fff";
    div.style.padding = "10px 20px";
    div.style.borderRadius = "10px";
    div.style.zIndex = "9999";
    document.body.appendChild(div);
    setTimeout(() => div.remove(), 1800);
  }

  document.querySelectorAll(".btn-pago").forEach(btn => {
    btn.addEventListener("click", () => {
      const metodo = btn.dataset.metodo;
      toast(` Método seleccionado: ${metodo}`);
    });
  });

  
  document.querySelectorAll(".btn-fav.eliminar").forEach(btn => {
    btn.addEventListener("click", () => {
      btn.closest(".fav-card").remove();
      toast(" Eliminado de favoritos", "#ff4b4b");
    });
  });

  document.querySelectorAll(".btn-admin").forEach(btn => {
    btn.addEventListener("click", () => {
      toast(" Sección administrativa abierta", "#17c400");
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const menuItems = document.querySelectorAll(".perfil-menu li");
  const secciones = document.querySelectorAll(".perfil-section, .perfil-contenido");

  function ocultarSecciones() {
    secciones.forEach(sec => sec.classList.remove("activa"));
  }

  function mostrarSeccion(id) {
    ocultarSecciones();
    const target = document.getElementById(id);
    if (target) target.classList.add("activa");
  }

  menuItems.forEach(item => {
    item.addEventListener("click", () => {
      menuItems.forEach(li => li.classList.remove("activo"));
      item.classList.add("activo");
      const id = item.dataset.section.replace(".html", "");
      mostrarSeccion(id);
    });
  });

  mostrarSeccion("perfil-contenido");

  const formContacto = document.getElementById("form-contacto");
  if (formContacto) {
    formContacto.addEventListener("submit", e => {
      e.preventDefault();
      alert(" ¡Gracias por contactarnos! Te responderemos pronto.");
      formContacto.reset();
    });
  }
});

