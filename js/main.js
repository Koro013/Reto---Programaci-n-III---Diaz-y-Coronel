// Funcionalidad del menú móvil
document.addEventListener("DOMContentLoaded", function () {
  const alternarMenu = document.getElementById("alternarMenu");
  const navMenu = document.querySelector("nav ul");

  if (alternarMenu && navMenu) {
    alternarMenu.addEventListener("click", function () {
      navMenu.classList.toggle("show");
    });
  }

  // Validación del formulario de contacto
  const contactForm = document.querySelector("form");
  if (contactForm) {
    const inputs = contactForm.querySelectorAll("input, textarea");

    function validacionInput(input) {
      if (input.validity.valid) {
        input.classList.remove("input-error");
      } else {
        input.classList.add("input-error");
      }
    }

    inputs.forEach((input) => {
      input.addEventListener("input", () => validacionInput(input));
      input.addEventListener("blur", () => validacionInput(input));
    });

    contactForm.addEventListener("submit", function (e) {
      let hasError = false;
      inputs.forEach((input) => {
        if (!input.validity.valid) {
          hasError = true;
          input.classList.add("input-error");
        }
      });

      if (hasError) {
        e.preventDefault();
      }
    });
  }
});
