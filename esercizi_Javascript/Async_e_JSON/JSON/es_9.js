const objsJson = '[{"nome": "Giovanni", "cognome": "Storti", "età": 66}, {"nome": "Giacomo", "cognome": "Poretti", "età": 67}, {"nome": "Aldo", "cognome": "Baglio", "età": 65}]';

const objs = JSON.parse(objsJson);

console.log("prima dell'ordinamento\n");

for(let ele of objs)
    console.log(ele.nome+' '+ele.cognome+' '+ele.età);

objs.sort((a, b) => a.età - b.età);

console.log("\ndopo l'ordinamento\n");

for(let ele of objs)
    console.log(ele.nome+' '+ele.cognome+' '+ele.età);