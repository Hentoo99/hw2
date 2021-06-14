const form = document.querySelector("form");
const form_request = {method: 'post', body: new FormData(form)};
fetch("/hw2/public/lezioneprivata", form_request).then(onPromise).then(saveIstructors);
const selectPool = document.querySelector("[name='piscina']");
const selectIstruttore = document.querySelector("[name='istruttore']");
const data = document.querySelector("[name='data']");

const submit = document.querySelector("[name='invio']");
submit.addEventListener("click", submitForm);
const time = new Date();





function submitForm(event){
    console.log("CIAOO");
    //event.preventDefault();

    const save = new Date(data.value);

    
    if(save > time){
        console.log("invio il form");
        const form = document.querySelectorAll("form")[0];
        const form_request = {method: 'post', body: new FormData(form)};
        fetch("/hw2/public/lezioneprivata/insert",form_request);
    }
}
const div = document.querySelector(".hidden");



selectPool.addEventListener("onchange", onClick);

function onClick(){

    while(selectIstruttore.firstChild){
        selectIstruttore.removeChild(selectIstruttore.firstChild);
    }
    for(let i = 0; i< istruttori.length; i++){
        if(istruttori[i].ID_piscina == selectPool.value){
            const option = document.createElement("option");
            option.value = istruttori[i].ID_istruttore;
            option.innerHTML = istruttori[i].Nome + " " + istruttori[i].Cognome;
            selectIstruttore.appendChild(option);
        }
    }
    
   
}

function onPromise(promise){
    return promise.json();
}

const istruttori = [];
const saveNomiPiscina = [];
function saveIstructors(json){
    //salvo gli istruttori
    for(let i =0; i < json.length; i++){
        istruttori.push(json[i]);
    }
    onClick();
}



const registro = document.createElement("div");
console.log(registro);
const section = document.querySelector("section");
section.appendChild(registro);


//funzione per la rimozione delle lezioni
const buttonDelete = document.querySelector('[name="elimina"]');
const selectDate = document.querySelector('[name="delete"]');
function putDate(json){
    while(selectDate.firstChild){
        selectDate.removeChild(selectDate.firstChild);
    }    
    for(let i = 0; i < json.length; i++){
        const option = document.createElement("option");
        option.innerHTML = json[i].data;
        option.innerHTML = json[i].data;
        selectDate.appendChild(option);
    }
}
buttonDelete.addEventListener("click", (e) =>{
    console.log("Elimino");

    const form = document.querySelectorAll("form")[1];
    const form_request = {method: 'post', body: new FormData(form)};
    fetch("/hw2/public/lezioneprivata/delete",form_request);
  
});



