function nascondiCarrello(event){ 

    const carrello = event.currentTarget;
    
    const pannello_carrello = document.querySelector('.pannello_carrello');
    pannello_carrello.classList.add('hidden');
    
    carrello.removeEventListener('click', nascondiCarrello);
    carrello.addEventListener("click", visualizzaCarrello);
  }
  
  function visualizzaCarrello(event) {
  
    const carrello = event.currentTarget;
    
    const pannello_carrello = document.querySelector('.pannello_carrello');
    pannello_carrello.classList.remove('hidden');
    
    carrello.removeEventListener('click', visualizzaCarrello);
    carrello.addEventListener('click', nascondiCarrello);
  
    fetch('/homework2/public/carica_carrello').then(onResponse).then(caricaCarrello);
  
  }
  
  
  function aggiornaCarrello() { 
  
    // Richiedi la lista di articoli
    fetch('/homework2/public/carica_carrello').then(onResponse).then(caricaCarrello);
  
  }
  
  function caricaCarrello(json){ 
  
    const pannello_carrello = document.querySelector('.pannello_carrello2');
    pannello_carrello.innerHTML='';
  
    const num_risultati_trovati = json.length;

    let totale = 0;
  
    for (let i=0; i<num_risultati_trovati; i++) {
  
      const dati = json[i];

      totale = totale + (dati.prezzo * dati.quantita);
  
    const articolo_carrello= document.createElement('form');
    articolo_carrello.classList.add('articolo_carrello');
    articolo_carrello.setAttribute("method", "get");
    pannello_carrello.appendChild(articolo_carrello);
  
    const immagine_articolo_carrello = document.createElement('div');
    immagine_articolo_carrello.classList.add('immagine_articolo_carrello');
    articolo_carrello.appendChild(immagine_articolo_carrello);
    
    const img_articolo = document.createElement('img');
    img_articolo.src= dati.immagine;
    immagine_articolo_carrello.appendChild(img_articolo);
  
    const titolo_e_quantita= document.createElement('div');
    titolo_e_quantita.classList.add('titolo_e_quantita');
    articolo_carrello.appendChild(titolo_e_quantita);
  
    const titolo_articolo_carrello = document.createElement('div');
    titolo_articolo_carrello.classList.add('titolo_articolo_carrello');
    titolo_articolo_carrello.textContent=dati.articolo;
    titolo_e_quantita.appendChild(titolo_articolo_carrello);
  
    const titolo_articolo_hidden = document.createElement('input');
    titolo_articolo_hidden.setAttribute("type", "hidden");
    titolo_articolo_hidden.setAttribute("name", "articolo");
    titolo_articolo_hidden.setAttribute("value", dati.articolo);
    articolo_carrello.appendChild(titolo_articolo_hidden);
  
    const quantita_articolo_carrello = document.createElement('div');
    quantita_articolo_carrello.classList.add('quantita_articolo_carrello');
    titolo_e_quantita.appendChild(quantita_articolo_carrello);
  
    const meno = document.createElement('submit');
    meno.textContent = "-";
    meno.classList.add('meno');
    meno.addEventListener('click', diminuisciQuantita);
    quantita_articolo_carrello.appendChild(meno);
  
    const quantita = document.createElement('div');
    quantita.textContent = dati.quantita;
    quantita.classList.add('quantita');
    quantita_articolo_carrello.appendChild(quantita);
  
    const piu = document.createElement('submit');
    piu.textContent = "+";
    piu.classList.add('piu');
    piu.addEventListener('click', aumentaQuantita);
    quantita_articolo_carrello.appendChild(piu); 
  
    const prezzo_e_rimuovi = document.createElement('div');
    prezzo_e_rimuovi.classList.add('prezzo_e_rimuovi');
    articolo_carrello.appendChild(prezzo_e_rimuovi);
  
    const prezzo_articolo_carrello = document.createElement('div'); 
    prezzo_articolo_carrello.textContent = "€" + dati.prezzo; 
    prezzo_articolo_carrello.classList.add('prezzo_articolo_carrello');
    prezzo_e_rimuovi.appendChild(prezzo_articolo_carrello);
  
    const rimuovi_articolo_carrello = document.createElement('submit');
    rimuovi_articolo_carrello.classList.add('rimuovi_articolo_carrello');
    rimuovi_articolo_carrello.addEventListener('click', rimuoviArticolo);
    prezzo_e_rimuovi.appendChild(rimuovi_articolo_carrello);
  

    }
  
    const totale_carrello = document.querySelector('.totale_carrello span');
    totale_carrello.innerHTML='';
    totale_carrello.textContent = parseFloat(totale).toFixed(2);
  
  }
  
  
  function aumentaQuantita(event){
   
    const articolo = event.currentTarget.parentNode.parentNode.parentNode.querySelector('input').value;
  
    fetch('/homework2/public/aumenta_quantita/' + encodeURIComponent(articolo)).then(aggiornaCarrello);
  
  }
  
  function diminuisciQuantita(event){ 
  
    const articolo = event.currentTarget.parentNode.parentNode.parentNode.querySelector('input').value;
    const quantita = event.currentTarget.parentNode.querySelector('.quantita').textContent;
    
    if(quantita <= "1") { 
        
      fetch('/homework2/public/elimina_articolo/' + encodeURIComponent(articolo)).then(aggiornaCarrello);
  
    } else {
        
      fetch('/homework2/public/diminuisci_quantita/' + encodeURIComponent(articolo)).then(aggiornaCarrello);
        
    }
  
  }
  
  
  function aggiungiVideogioco(event){

    const prezzo = event.currentTarget.parentNode.parentNode.querySelector('input').value;
    const articolo = event.currentTarget.parentNode.querySelector('.nuovoh1').textContent;
  
    fetch('/homework2/public/aggiungi_videogioco/' + encodeURIComponent(articolo) + "/" + encodeURI(prezzo)).then(aggiornaCarrello);
  
  }

  function aggiungiMerchandise(event){

    const prezzo = event.currentTarget.parentNode.parentNode.querySelector('input').value;
    const articolo = event.currentTarget.parentNode.querySelector('.nuovoh1').textContent;
  
    fetch('/homework2/public/aggiungi_merchandise/' + encodeURIComponent(articolo) + "/" + encodeURI(prezzo)).then(aggiornaCarrello);
  
  }

  function aggiungiAbbonamento(event){

    const prezzo = event.currentTarget.parentNode.parentNode.querySelector('input').value;
    const articolo = event.currentTarget.parentNode.querySelector('.nuovoh1').textContent;
  
    fetch('/homework2/public/aggiungi_abbonamento/' + encodeURIComponent(articolo) + "/" + encodeURI(prezzo)).then(aggiornaCarrello);
  
  }
  
  function rimuoviArticolo(event){ 
  
    const articolo = event.currentTarget.parentNode.parentNode.querySelector('input').value;
  
    fetch('/homework2/public/elimina_articolo/' + encodeURIComponent(articolo)).then(aggiornaCarrello);
  
  }

  function onResponse(response) {
    return response.json();
  }

  const carrello = document.querySelector('.carrello');
carrello.addEventListener("click", visualizzaCarrello);



