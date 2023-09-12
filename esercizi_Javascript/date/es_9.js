const dataOdierna = new Date();
let dataOdiernaGiorno = dataOdierna.getDate();
let dataOdiernaMese = dataOdierna.getMonth() + 1;

if(dataOdiernaGiorno < 10)
    dataOdiernaGiorno = '0' + dataOdiernaGiorno;

if(dataOdiernaMese < 10)
    dataOdiernaMese = '0' + dataOdiernaMese;

const dataFormattata = `${dataOdiernaGiorno}-${dataOdiernaMese}-${dataOdierna.getFullYear()}`;
console.log(dataFormattata);