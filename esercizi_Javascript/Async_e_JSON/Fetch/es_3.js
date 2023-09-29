const dati = {
    userId: 1,
    title: 'TODO modificata',
    completed: false,
    nome: 'Mario',
    cognome: 'Gialli'
};

fetch('https://jsonplaceholder.typicode.com/todos/1', {
    method: 'PUT',
    headers: { 
        'Content-Type': 'application/json'    
    },
    body: JSON.stringify(dati)
})
.then(res => res.json())
.then(data => console.log(data))
.catch(err => console.log(err));