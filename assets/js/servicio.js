// Agregamos un controlador de eventos para el clic en los botones de "Ver más información"
const buttons = document.querySelectorAll('.card-button');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const target = document.querySelector(`#${button.dataset.target}`);
    target.classList.toggle('show');
  });
});
