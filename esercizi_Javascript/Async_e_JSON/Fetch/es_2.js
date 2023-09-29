const dati = [{
    userId: 2,
    title: ' Nuovo TODO ',
    completed: false,
    nome: 'mario',
    cognome: 'rossi'
},
{
    userId: 60,
    title: ' Nuovo TODO4 ',
    completed: false,
    nome: 'gianni',
    cognome: 'verdi'
}
];

fetch('https://jsonplaceholder.typicode.com/todos/1', {
    method: 'POST',
    headers: { 
        'Content-Type': 'application/json'    
    },
    body: JSON.stringify(dati)
})
.then(res => res.json())
.then(data =>{
    for(let key in data){
        if(!isNaN(key))
            console.log(json[key]);
    }    
})
.catch(err => console.error('errore: '+err));