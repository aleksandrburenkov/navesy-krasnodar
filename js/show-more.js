'use-strict';
const scowMore = document.querySelector('.button-block-btn');
const scowMores = document.querySelector('.btn-button-block');
const scowMoresVideo = document.querySelector('.button-riviews');

const productsLenghs = document.querySelectorAll(
    '.policarbonate__awnings-column'
).length;
const productsLenghsProfnastil = document.querySelectorAll(
    '.profnastil__awnings-column'
).length;
const productsVideo = document.querySelectorAll(
    '.video__reviews_block-video-item'
).length;

let items = 9;
let itemse = 9;
let itemses = 2;

scowMore.addEventListener('click', () => {
    items += 18;

    const array = Array.from(
        document.querySelector('.policarbonate__awnings-row').children
    );
    const visItems = array.slice(0, items);

    visItems.forEach((el) => el.classList.add('is-visible'));
    if (visItems.length === productsLenghs) {
        scowMore.style.display = 'none';
    }
});

scowMoresVideo.addEventListener('click', () => {
    itemses += 2;

    const arrayses = Array.from(
        document.querySelector('.video__reviews_block-video').children
    );

    const visItemsese = arrayses.slice(0, itemses);
    visItemsese.forEach((el) => el.classList.add('is-visible'));
    if (visItemsese.length === productsVideo) {
        scowMoresVideo.style.display = 'none';
    }
});
scowMores.addEventListener('click', () => {
    itemse += 18;

    const arrays = Array.from(
        document.querySelector('.profnastil__awnings-row').children
    );

    const visItemse = arrays.slice(0, itemse);
    visItemse.forEach((el) => el.classList.add('is-visible'));
    if (visItemse.length === productsLenghsProfnastil) {
        scowMores.style.display = 'none';
    }
});
