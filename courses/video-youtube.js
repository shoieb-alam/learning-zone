let listVideo = document.querySelectorAll('.iframe-list .vid');
let mainVideo = document.querySelector('.main-iframe iframe');
let title = document.querySelector('.main-iframe .title');

listVideo.forEach(iframe => {
    iframe.onclick = () => {
        listVideo.forEach(vid => vid.classList.remove('active'));
        iframe.classList.add('active');
        if (iframe.classList.contains('active')) {
            let src = iframe.children[0].getAttribute('src');
            mainVideo.src = src;
            let text = iframe.children[1].innerHTML;
            title.innerHTML = text;
        };
    };
});