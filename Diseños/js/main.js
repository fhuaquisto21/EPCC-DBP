fetch("https://randomuser.me/api/?inc=picture")
    .then(res => res.json())
    .then(data => {
        const userProfile = document.querySelector('.profile .aux img');
        userProfile.src = data.results[0].picture.large
    });

setInterval(() => {
    let body = document.querySelector('body');
    let box = document.querySelector('.profile .aux.hearts');
    let heart = document.createElement('span');
    let size = Math.random() * 80;
    let transformRotate = Math.random() * 360;
    heart.style.left = (box.offsetLeft + 40) + 'px';
    heart.style.top = (box.offsetTop + 40) + 'px';
    heart.style.width = 20 + size + 'px';
    heart.style.height = 20 + size + 'px';
    heart.style.transform = 'rotate(' + transformRotate + 'deg)';
    body.appendChild(heart);
    setTimeout(() => {
        heart.remove();
    }, 1000);
}, 100);

let btnSimple = document.getElementById('simple');
let btnSpiral = document.getElementById('spiral');
let btnHearts = document.getElementById('hearts');
let btnPhoto = document.getElementById('photo');
let imageMain = document.querySelector('.profile .aux');

btnSimple.addEventListener('click', () => {
    imageMain.classList.remove('spiral');
    imageMain.classList.remove('hearts');
    imageMain.classList.remove('photo');
    imageMain.classList.add('simple');
})
btnSpiral.addEventListener('click', () => {
    imageMain.classList.add('spiral');
    imageMain.classList.remove('hearts');
    imageMain.classList.remove('photo');
    imageMain.classList.remove('simple');
})
btnHearts.addEventListener('click', () => {
    imageMain.classList.remove('spiral');
    imageMain.classList.add('hearts');
    imageMain.classList.remove('photo');
    imageMain.classList.remove('simple');
})