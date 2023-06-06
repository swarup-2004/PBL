

let contry = document.getElementById('contry');
let moving = document.getElementById('moving');
let text = document.getElementById('text');
let list = document.getElementById('list');


contry.addEventListener('click', () => {
    list.classList.toggle('hidden');
    moving.classList.toggle('roted')
});
function myfunction(info) {
    text.innerHTML = info;
}


let eng_tag = document.getElementById('eng_tag');
let hin_eng = document.querySelector('.hin_eng');
let language = document.querySelector('.language');

language.addEventListener('click', () => {
    hin_eng.classList.toggle('display_div');
});
function languageolx(anyone) {
    eng_tag.innerHTML = anyone;
}

let girl_img_id = document.getElementById('girl_img_id');
let gropdwonid = document.getElementById('gropdwonid');

girl_img_id.addEventListener('click', () => {
    gropdwonid.classList.toggle('block_div')
});

