async function operazioneAsincrona() {
    try {
        const response = await fetch('https://jsonplaceholder.typicode.com/todos/1');
  
        if (response.ok){
            const data = await response.json();
            console.log('Dati:', data);
        }
        else
            throw new Error('richiesta fallita');          
    } catch (err) {
        console.log(err);
    }
}
    
operazioneAsincrona();