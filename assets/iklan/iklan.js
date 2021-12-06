const body = document.getElementsByTagName("body");

const modalHTML = `    <div class="modal open" id="modal-iklan">
<div class="modal-bg modal-exit"></div>
<div class="modal-container">
    <h1>Ingin Belajar Cloud and Back-End?</h1>
    <p>gratis <i>course</i> belajar dasar <i>cloud computing</i></p>
    <a class="btn btn-yes" href="https://www.dicoding.com/programs/aws/registration/1100554" target="_blank">Saya mau!!</a>
    <a id="tolak" class="btn btn-no">Jangan Tampilkan Lagi</a>

    <button class="modal-close modal-exit">X</button>
</div>
</div>`;

body[0].insertAdjacentHTML("beforeend", modalHTML);

const modal = document.getElementById("modal-iklan")
const exits = modal.querySelectorAll('.modal-exit');

exits.forEach(function(exit) {
    exit.addEventListener('click', function(event){
        event.preventDefault();
        modal.classList.remove('open')
    })
});

const tolak = document.getElementById('tolak');
tolak.addEventListener('click', function(event){
    event.preventDefault();
    
    let expire = new Date();
    expire.setTime(expire.getTime() + (60*60*24*7*1000));

    document.cookie = "tolak=yes; expires=" + expire.toUTCString();
    modal.classList.remove('open')
})