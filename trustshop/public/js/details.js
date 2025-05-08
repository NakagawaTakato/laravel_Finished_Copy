document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.shop-card__area.btn');
    const modals = document.querySelectorAll('.shop-card__modal');
    const closeButtons = document.querySelectorAll('.shop-card__modal__inner__close.btn');

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            modals[index].showModal();
        });
    });

    closeButtons.forEach((closeButton, index) => {
        closeButton.addEventListener('click', () => {
            modals[index].close();
        });
    });
});
