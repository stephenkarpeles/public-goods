// Modal
const modalWindow = document.querySelector('.modal');
const modalTrigger = document.querySelector('.modal__trigger');
const modalInterior = document.querySelector('.modal__interior');
const modalClose = document.querySelector('.modal__close');

if(modalTrigger) {
    modalTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    modalWindow.classList.add('is-open');
  });
}

if(modalClose) {
  modalClose.addEventListener('click', (e) => {
    e.preventDefault();
    modalWindow.classList.remove('is-open');
  });
}
