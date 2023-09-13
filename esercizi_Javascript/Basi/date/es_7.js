const dataNascita = new Date(2002, 2, 3);
const dataOdierna = new Date();
const diff = Math.abs(dataOdierna - dataNascita);
const dayMillisec = 24 * 60 * 60 * 1000;
const diffDays = Math.floor(diff / dayMillisec)

console.log(diffDays);