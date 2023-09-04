let voto = 75;
switch(true){
    case (voto >= 90) :
        console.log('valutazione A');
        break;
    case (voto >= 80) :
        console.log('valutazione B');
        break;
    case (voto >= 70) :
        console.log('valutazione C');
        break;
    case (voto >= 60) :
        console.log('valutazione D');
        break;
    case (voto >= 0) :
        console.log('valutazione E');   
        break;
    default:
        console.log('valutazione non valida');   
}