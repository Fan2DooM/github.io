let page = document.querySelector('.page');
let btn = document.querySelector('.btn');
btn.onclick = function(){
    page.classList.toggle('body');
    page.classList.toggle('body-dark');
}