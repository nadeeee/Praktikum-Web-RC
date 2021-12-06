function histRender(){
    const history_buck = document.getElementById('history_buck');
    let template = '';
    if (localStorage.arrOfHyst !== null){
        let histories = JSON.parse(localStorage.arrOfHyst);
        histories = [...new Set(histories)];

        histories.forEach(item => {
            const hist = JSON.parse(localStorage.getItem(item));

            template += `
                <div style="border:solid 1px gray; margin:2px">
                        <h5 style="margin:0 ">${hist.judul}</h3>
                        <p style="margin:0">${hist.judul}</p>
                </div>
            `;
        });

        history_buck.innerHTML = template;
    }
}
histRender();


function addHist(el) {
    const id = el.getAttribute('data-id');
    const judul = el.getElementsByClassName('card-head')[0].innerText;
    const isi = el.getElementsByClassName('card-body')[0].innerText;

    const histItem = {
        id: id,
        judul: judul,
        isi: isi
    }

    if (localStorage.getItem('arrOfHyst') !== null){
        let histories = JSON.parse(localStorage.arrOfHyst);
        histories.push('hyst' + id);
        histories = [...new Set(histories)];

        localStorage.setItem('arrOfHyst', JSON.stringify(histories));
    }else{
        localStorage.setItem('arrOfHyst', JSON.stringify(['hyst' + id]));
    }
    localStorage.setItem('hyst' + id, JSON.stringify(histItem));

    histRender();
}
function clearhistory(){
    localStorage.clear();
    
    const history_buck = document.getElementById('history_buck')
    let template = ''
    history_buck.innerHTML = template
}