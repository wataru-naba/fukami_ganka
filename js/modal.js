
const openModal = (e) => {
    console.log(e)
    e.preventDefault();
    const contentsId = e.currentTarget.getAttribute('data-target')
    const modal = document.querySelector('.modal')
    modal.style.display = "block";
    fadeIn(contentsId, 500); // 500ミリ秒でフェードイン
    
}

function fadeIn(id, duration) {
    let element = document.getElementById(id);
    element.style.display = "block";
    element.style.opacity = 0;

    let last = +new Date();
    let tick = function() {
        element.style.opacity = +element.style.opacity + (new Date() - last) / duration;
        last = +new Date();

        if (+element.style.opacity < 1) {
            (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
        }
    };

    tick();
}

//document.getElementsByClassName('modal-button').onclick = openModal

document.querySelector('.modal-close').onclick = () => {
    const modal = document.querySelector('.modal')
    modal.style.display = "none";
    document.getElementById('modal-degisuma').style.display = "none";
    document.getElementById('modal-shinryo').style.display = "none";
}

document.querySelectorAll('.modal-button').forEach(button => {
    button.onclick = openModal;
});

