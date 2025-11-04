document.addEventListener("DOMContentLoaded", () => {
  const btnMenu = document.getElementById("btnMenuToastIndex") || document.querySelector(".menu-icon");
  const menuToast = document.getElementById("menuToastIndex") || document.getElementById("menu-toast");

  if (btnMenu && menuToast) {
    btnMenu.addEventListener("click", () => {
      menuToast.classList.toggle("active");
    });

    menuToast.addEventListener("click", (e) => {
      if (e.target === menuToast) menuToast.classList.remove("active");
    });

    const menuItems = menuToast.querySelectorAll("li");
    menuItems.forEach(item => {
      item.addEventListener("click", () => {
        const text = item.textContent.trim();
        if (text === "Administración") {
          window.location.href = "administracion.html";
        }
        menuToast.classList.remove("active"); 
      });
    });
  }

  const carritoBtn = document.getElementById("btnCarritoIndex");
  const addCartIcons = document.querySelectorAll(".add-cart-index");
  let carritoCount = 0;

  function mostrarToastCarrito() {
    const toast = document.createElement("div");
    toast.textContent = "Producto añadido al carrito";
    toast.style.position = "fixed";
    toast.style.bottom = "20px";
    toast.style.right = "20px";
    toast.style.background = "#e00064";
    toast.style.color = "white";
    toast.style.padding = "10px 20px";
    toast.style.borderRadius = "10px";
    toast.style.zIndex = "9999";
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 1500);
  }

  addCartIcons.forEach(icon => {
    icon.addEventListener("click", () => {
      carritoCount++;
      mostrarToastCarrito();
    });
  });

  if (carritoBtn) {
    carritoBtn.addEventListener("click", () => {
      alert(`Tienes ${carritoCount} productos en el carrito.`);
    });
  }


  const modalInfo = document.getElementById("modalInfoIndex");
  const modalTitulo = document.getElementById("modalTituloIndex");
  const modalTexto = document.getElementById("modalTextoIndex");
  const cerrarModal = document.querySelector(".cerrar");

  function abrirModal(titulo, texto) {
    if (!modalInfo) return;
    modalTitulo.textContent = titulo;
    modalTexto.textContent = texto;
    modalInfo.style.display = "flex";
  }

  const btnContactenos = document.getElementById("btnContactenosIndex");
  const btnPreguntas = document.getElementById("btnPreguntasIndex");
  const btnResenas = document.getElementById("btnResenasIndex");

  if (btnContactenos) {
    btnContactenos.addEventListener("click", () => {
      abrirModal("Contáctenos", "Tel: +506 8888-8888\npanaderiaana@gmail.com");
    });
  }

  if (btnPreguntas) {
    btnPreguntas.addEventListener("click", () => {
      abrirModal("Preguntas Frecuentes", "¿Abren los domingos?\nSí, de 8 a.m. a 12 m.d.\n\n¿Aceptan pedidos personalizados?\n¡Por supuesto!");
    });
  }

  if (btnResenas) {
    btnResenas.addEventListener("click", () => {
      window.location.href = "reseñas.html";
    });
  }

  if (cerrarModal && modalInfo) {
    cerrarModal.addEventListener("click", () => modalInfo.style.display = "none");
    modalInfo.addEventListener("click", (e) => {
      if (e.target === modalInfo) modalInfo.style.display = "none";
    });
  }


  const formPastel = document.getElementById("formPastel");
  if (formPastel) {
    const imagenInput = document.getElementById("imagen");
    const preview = document.getElementById("preview");

    formPastel.addEventListener("submit", (e) => {
      e.preventDefault();
      alert("¡Gracias por tu pedido! La panadería revisará tu solicitud y te contactará pronto.");
      formPastel.reset();
      if (preview) preview.style.display = "none";
    });

    if (imagenInput && preview) {
      imagenInput.addEventListener("change", (e) => {
        const file = e.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = () => {
            preview.src = reader.result;
            preview.style.display = "block";
          };
          reader.readAsDataURL(file);
        }
      });
    }
  }
});

  // Funcionalidad para reseñas.html
  if (document.getElementById("listaResenas")) {
    // Reseñas existentes
    const reseñasExistentes = [
      { comentario: "¡Los pasteles son increíbles! El de chocolate es mi favorito.", calificacion: 5 },
      { comentario: "Buen servicio, pero el pan podría estar más fresco.", calificacion: 4 },
      { comentario: "Excelente atención al cliente, volveré pronto.", calificacion: 5 },
      { comentario: "Los bonetes dulces están deliciosos, pero un poco caros.", calificacion: 3 },
      { comentario: "¡Me encantó el tamal asado! Muy cremoso.", calificacion: 5 }
    ];
    function renderizarEstrellas(calificacion) {
      let estrellas = "";
      for (let i = 1; i <= 5; i++) {
        estrellas += i <= calificacion ? "★" : "☆";
      }
      return estrellas;
    }


    const listaResenas = document.getElementById("listaResenas");
    reseñasExistentes.forEach(reseña => {
      const div = document.createElement("div");
      div.className = "producto";
      div.innerHTML = `
        <div class="info">
          <p><strong>Comentario:</strong> ${reseña.comentario}</p>
          <p><strong>Calificación:</strong> ${renderizarEstrellas(reseña.calificacion)}</p>
        </div>
      `;
      listaResenas.appendChild(div);
    });


    const estrellasLabels = document.querySelectorAll('.estrellas label');
    const estrellasInputs = document.querySelectorAll('.estrellas input');


    function updateSelection() {
      const checkedIndex = Array.from(estrellasInputs).findIndex(input => input.checked);
      estrellasLabels.forEach((label, index) => {
        if (index <= checkedIndex) {
          label.classList.add('selected');
        } else {
          label.classList.remove('selected');
        }
      });
    }

    estrellasLabels.forEach((label, index) => {
      label.addEventListener('mouseenter', () => {

        estrellasLabels.forEach((l, i) => {
          if (i <= index) {
            l.classList.add('hover');
          } else {
            l.classList.remove('hover');
          }
        });
      });

      label.addEventListener('mouseleave', () => {

        estrellasLabels.forEach(l => l.classList.remove('hover'));
      });
    });

    estrellasInputs.forEach(input => {
      input.addEventListener('change', updateSelection);
    });

    updateSelection();

    const formResena = document.getElementById("formResena");
    formResena.addEventListener("submit", (e) => {
      e.preventDefault();
      const comentario = document.getElementById("comentario").value.trim();
      const calificacion = document.querySelector('input[name="calificacion"]:checked')?.value;

      if (!comentario || !calificacion) {
        alert("Por favor, completa el comentario y selecciona una calificación.");
        return;
      }

      const nuevaResena = { comentario, calificacion: parseInt(calificacion) };
      reseñasExistentes.push(nuevaResena);

      const div = document.createElement("div");
      div.className = "producto";
      div.innerHTML = `
        <div class="info">
          <p><strong>Comentario:</strong> ${nuevaResena.comentario}</p>
          <p><strong>Calificación:</strong> ${renderizarEstrellas(nuevaResena.calificacion)}</p>
        </div>
      `;
      listaResenas.appendChild(div);

      formResena.reset();
      alert("¡Gracias por tu reseña!");
    });
  }

//  Mostrar información de la receta 
const recetas = {
  "Pastel de chocolate": {
    descripcion: "Bizcocho húmedo de cacao con cobertura de chocolate derretido y relleno de crema.",
    ingredientes: "Harina, cacao, azúcar, mantequilla, huevos, leche, esencia de vainilla.",
    imagen: "img/ququeChocolate.png"
  },
  "Queque seco": {
    descripcion: "Receta clásica, esponjosa y con suaves toques de vainilla.",
    ingredientes: "Harina, azúcar, mantequilla, huevos, esencia de vainilla, polvo de hornear.",
    imagen: "img/quequeSeco.png"
  },
  "Pizzita": {
    descripcion: "Receta clásica, con deliciosa salsa casera y mucho queso.",
    ingredientes: "Harina, mantequilla, huevos, mayonesa, polvo de hornear, mortadela, queso mozzarella, queso fresco, salsa de pizza.",
    imagen: "img/pizzita.png"
  }
};

const botonesVer = document.querySelectorAll(".btn-ver");
const modal = document.getElementById("modalReceta");
const cerrarModal = document.querySelector(".cerrar-modal");
const titulo = document.getElementById("tituloReceta");
const descripcion = document.getElementById("descripcionReceta");
const ingredientes = document.getElementById("ingredientesReceta");
const imgReceta = document.getElementById("imgReceta");

botonesVer.forEach(boton => {
  boton.addEventListener("click", e => {
    const nombre = e.target.closest(".producto-card")?.querySelector("h3")?.textContent ||
      e.target.closest(".producto-card")?.querySelector("p strong")?.textContent ||
      e.target.closest(".producto-card")?.querySelector("h2")?.textContent ||
      e.target.closest(".producto-card")?.querySelector(".titulo")?.textContent ||
      e.target.closest(".producto-card")?.querySelector("h3")?.innerText;

    if (recetas[nombre]) {
      titulo.textContent = nombre;
      descripcion.textContent = recetas[nombre].descripcion;
      ingredientes.textContent = "Ingredientes: " + recetas[nombre].ingredientes;
      imgReceta.src = recetas[nombre].imagen;
      modal.style.display = "flex";
    }
  });
});

cerrarModal.addEventListener("click", () => modal.style.display = "none");
modal.addEventListener("click", e => { if (e.target === modal) modal.style.display = "none"; });


// Toast de éxito por el momento, para envio express y añadir a carrito 
function mostrarToast(mensaje) {
  const toast = document.createElement("div");
  toast.className = "toast-exito";
  toast.textContent = mensaje;
  document.body.appendChild(toast);
  setTimeout(() => toast.remove(), 2000);
}
document.querySelectorAll(".btn-agregar").forEach(btn => {
  btn.addEventListener("click", () => {
    mostrarToast("✅ Producto añadido al carrito");
  });
});

document.querySelectorAll(".btn-express").forEach(btn => {
  btn.addEventListener("click", () => {
    mostrarToast("🚚 Pedido Express solicitado");
  });
});
