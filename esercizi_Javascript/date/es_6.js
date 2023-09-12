const dataNascita = new Date(2002, 2, 3);
const dataOdierna = new Date();

let age = dataOdierna.getFullYear() - dataNascita.getFullYear();

if (dataNascita.getMonth() > dataOdierna.getMonth() ||
    dataNascita.getMonth() === dataOdierna.getMonth() &&
    dataNascita.getDate() > dataOdierna.getDate()){
    
    age--;
}

console.log(age);