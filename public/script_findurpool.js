const sumbit = document.querySelector('[name="invia"]');
const text = document.querySelector("[name='citta']");
const divHidden = document.querySelector(".hidden");
const finddiv = document.querySelector(".hidden");


sumbit.addEventListener("click", searchPool);

function searchPool(event){
 
    event.preventDefault();

      const form = document.querySelector("form");
      const form_request = {method: 'post', body: new FormData(form)};
      fetch("/hw2/public/findurpool", form_request).then(onResponse).then(pools);

}

function onResponse(promise){
    return promise.json();
}

function pools(json){
    console.log(json);
  
    const divPiscina = document.querySelector(".piscina");
    console.log(finddiv);
    const array = json;
    finddiv.innerHTML = [];
    divPiscina.innerHTML = [];
    const find = document.createElement("h1");
    finddiv.appendChild(find);
    find.innerHTML = "A "+ array[0].Citta + " ci sono "+ array.length + " piscine"; 
    finddiv.classList.remove("hidden");   
    for(let i = 0; i < array.length; i++){
        const div = document.createElement("div");
         console.log(i);
        const h1 = document.createElement("h1");
        h1.innerHTML = array[i].Nome_piscina;
        div.appendChild(h1);

        const citta = document.createElement("p");
        citta.innerHTML = array[i].Citta;
        div.appendChild(citta);

        const indirizzo = document.createElement("p");
        indirizzo.innerHTML = array[i].Via;
        div.appendChild(indirizzo);

        divPiscina.appendChild(div);
    }
    
}

