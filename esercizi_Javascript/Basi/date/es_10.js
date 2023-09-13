const dataOdierna = new Date();
const currWeekDay = dataOdierna.getDay();

switch (currWeekDay) {
    case 0:
        console.log('Domenica');
        break;
    case 1:
        console.log('Lunedì');
        break;
    case 2:
        console.log('Martedì');
        break;
    case 3:
        console.log('Mercoledì');    
        break;
    case 4:
        console.log('Giovedì');
        break;
    case 5:
        console.log('Venerdì');
        break;
    case 6:
        console.log('Sabato');        
}