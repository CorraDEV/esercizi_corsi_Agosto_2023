const json = '{"nome": "Giovanni", "cognome": "Storti", "età": 66}';

console.log(typeof json);
const resObj = JSON.parse(json);
console.log(typeof resObj);