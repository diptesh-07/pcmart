// Script for navigation bar
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })

}

// Script for special product
let MainImg = document.getElementById("MainImg");
let smallimg = document.getElementsByClassName("small-img");

smallimg[0].onclick = function () {
    MainImg.src = smallimg[0].src;
}
smallimg[1].onclick = function () {
    MainImg.src = smallimg[1].src;
}
smallimg[2].onclick = function () {
    MainImg.src = smallimg[2].src;
}
smallimg[3].onclick = function () {
    MainImg.src = smallimg[3].src;
}



let pro = document.getElementsByClassName("pro");

pro.addEventListener('onclick', () => {

    MainImg.src = pro[0].src;
})

