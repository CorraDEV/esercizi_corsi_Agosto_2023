const objsJson = '[{"nome": "Giovanni", "cognome": "Storti", "età": 66}, {"nome": "Giacomo", "cognome": "Poretti", "età": 67}, {"nome": "Aldo", "cognome": "Baglio", "età": 65}]';

const objs = JSON.parse(objsJson);

const nuovoObjs = objs.filter(ele => ele.età <= 65);

for(let i = 0; i < nuovoObjs.length; i++)
    console.log(`${nuovoObjs[i].nome} ${nuovoObjs[i].cognome} ${nuovoObjs[i].età}`);