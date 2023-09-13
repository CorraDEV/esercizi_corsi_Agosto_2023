class Animale{
    verso(){
        console.log('verso animale generico');
    }
}

class Gatto extends Animale{    
    verso(){
        console.log('verso gatto');
    }
}

const animale = new Animale();
const gatto = new Gatto();

animale.verso();
gatto.verso();