let giorno = 5;

switch(giorno){
    case 6:
    case 7:
        console.log('giorno non lavorativo');
        break;
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        console.log('giorno lavorativo');
        break;    
    default:
        console.log('giorno non esistente');    
}