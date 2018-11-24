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

// Sharebar
const sharebar = document.querySelector('.a2a_kit.a2a_default_style');

sharebarClose = document.createElement('div');
sharebarClose.setAttribute('class', 'sharebar-close');
sharebarClose.innerHTML = '&times;';

sharebar.appendChild(sharebarClose);

if(sharebarClose) {
    sharebarClose.addEventListener('click', (e) => {
    e.preventDefault();
    sharebar.classList.add('is-closed');
  });
}
