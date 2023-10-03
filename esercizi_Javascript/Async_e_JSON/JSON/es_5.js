const json = '{"nome": "Giovanni", "cognome": "Storti", "età": 66}';

const resObj = JSON.parse(json);

resObj.lavoro = 'comico';

const nuovoJson = JSON.stringify(resObj);
console.log(nuovoJson);