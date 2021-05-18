const popupLinks = document.querySelectorAll('.popup-link');

if (popupLinks.length > 0) {
    for (let index = 0; index < popupLinks.length; index++) {
        const popupLink = popupLinks[index];
        popupLink.addEventListener("click", function (e) {
            const popupName = popupLink.getAttribute('href').replace('#', '');
            const currentPopup = document.getElementById(popupName);
            popupOpen(currentPopup);
            e.preventDefault();
        });
    }
}

const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
    for (let index = 0; index < popupCloseIcon.length; index++) {
        const el = popupCloseIcon[index];
        el.addEventListener('click', function (e) {
           popupClose(el.closest('.popup'));
           e.preventDefault();
        });
    }
}

function popupOpen(currentPopup) {
    const popupActive = document.querySelector('.popup.open');
    if(popupActive){
        popupClose(popupActive, false);
    }
    currentPopup.classList.add('open');
    currentPopup.addEventListener('click', function (e) {
        if(!e.target.closest('.popup-content')) {
            popupClose(e.target.closest('.popup'));
        }
    });
}

function popupClose(popupActive, doUnlock = true) {
    popupActive.classList.remove('open');
}

document.addEventListener('keydown', function (e){
    if(e.which === 27) {
        const popupActive = document.querySelector('.popup.open');
        popupClose(popupActive);
    }
});
