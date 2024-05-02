'use strict';
const add = document.getElementsByClassName('_active');
const modalsBtn = document.querySelectorAll('._modal-open');
const modals = document.querySelectorAll('._modal');
const scrollBody = document.body;
function openModal(elem) {
    elem.classList.add('_modal-active');
    scrollBody.classList.add('body-skroll');
}
function closeModal(e) {
    if (
        e.target.classList.contains('modal-close-wrapper') ||
        e.target.classList.contains('close_modal_form') ||
        e.target.classList.contains('modal-bg')
    ) {
        e.target.closest('._modal').classList.remove('_modal-active');
        e.target.closest('.modal-bg').classList.remove('_modal-active');
        scrollBody.classList.remove('body-skroll');
        document.body.classList.remove('no-scroll');
    }
}
modalsBtn.forEach((btn) => {
    btn.addEventListener('click', (event) => {
        let data = event.target.dataset.modalOpen;
        modals.forEach((modal) => {
            if (modal.dataset.modal == data) {
                openModal(modal);
            }
        });
    });
});
modals.forEach((modal) => {
    modal.addEventListener('click', (e) => closeModal(e));
});
window.addEventListener('keydown', (e) => {
    modals.forEach((modal) => {
        if (e.key === 'Escape' && modal.classList.contains('_modal-active')) {
            modal.classList.remove('_modal-active');
            scrollBody.classList.remove('body-skroll');
        }
    });
});
