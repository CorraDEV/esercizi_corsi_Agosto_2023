const json = '{"nome": "Giovanni", "cognome": "Storti", "età": 66}';

const resObj = JSON.parse(json);

resObj.nome = 'Giacomo';
resObj.cognome = 'Poretti';
resObj.età = 67;

const nuovoJson = JSON.stringify(resObj);
console.log(nuovoJson);