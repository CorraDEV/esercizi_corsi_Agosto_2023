function caricaDatiDaRisorsa(url){
    return new Promise((resolve, reject) => {
        fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Errore nella richiesta: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            resolve(data);
        })
        .catch(error => {
            reject(error);
        });
    });
}
    
const url = 'https://jsonplaceholder.typicode.com/todos/1';
  
caricaDatiDaRisorsa(url)
    .then(data => {
      console.log('Dati caricati con successo:', data);
    })
    .catch(error => {
      console.error('Errore durante il caricamento dei dati:', error);
    });