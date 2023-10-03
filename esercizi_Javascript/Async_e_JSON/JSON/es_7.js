const objsJson = '[{"nome": "Giovanni", "cognome": "Storti", "età": 66}, {"nome": "Giacomo", "cognome": "Poretti", "età": 67}, {"nome": "Aldo", "cognome": "Baglio", "età": 65}]';

const objs = JSON.parse(objsJson);

for(let ele of objs)
    console.log(ele.nome+' '+ele.cognome+' '+ele.età);