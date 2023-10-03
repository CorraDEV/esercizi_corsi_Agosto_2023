const json = '{"nome": "Giovanni", "cognome": "Storti", "età": 66}';

const resObj = JSON.parse(json);

delete resObj.età;

const nuovoJson = JSON.stringify(resObj);
console.log(nuovoJson);