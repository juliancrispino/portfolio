const hamburguer = document.querySelector('.hamburguer');
const nav = document.querySelector('.nav');

hamburguer.addEventListener('click', () => {
    nav.classList.toggle('aparecer-menu')
})

window.addEventListener('click', e=>{
    if(nav.classList.contains('aparecer-menu') && e.target != nav && e.target != hamburguer){
        nav.classList.toggle("aparecer-menu")
    }
})