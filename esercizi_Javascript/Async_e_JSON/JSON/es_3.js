const json = '{"nome": "Giovanni", "cognome": "Storti", "età": 66}';

const resObj = JSON.parse(json);
console.log(resObj.nome, resObj.cognome, resObj.età);