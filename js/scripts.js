AOS.init();


const hamburguer = document.querySelector('.hamburguer');
const nav = document.querySelector('.nav');
const btn = document.querySelector('.btn-portfolio');

hamburguer.addEventListener('click', () => {
    nav.classList.toggle('aparecer-menu')
})

window.addEventListener('click', e=>{
    if(nav.classList.contains('aparecer-menu') && e.target != nav && e.target != hamburguer){
        nav.classList.toggle("aparecer-menu")
    }
})

btn.addEventListener('click', () => {
    btn.textContent = '¡Estas acá!'
})
