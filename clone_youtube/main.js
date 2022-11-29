const moreBtn = document.querySelector('.infoAndUpNext .info .metadata .moreBtn');
const title = document.querySelector('.infoAndUpNext .info .metadata .title');

moreBtn.addEventListener('click', ()=> {
    moreBtn.classList.toggle('clicked');
    title.classList.toggle('clamp');
});