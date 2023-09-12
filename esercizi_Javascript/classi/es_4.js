class Libro{
    constructor(titolo, autore){
        this.titolo = titolo;
        this.autore = autore;
    }
    dettagli(){
        console.log(this.titolo, this.autore);        
    }
}

const libro = new Libro("Libro123", "Autore123");

libro.dettagli();